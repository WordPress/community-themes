
import { spawn } from 'child_process';
import fs from 'fs';
import inquirer from 'inquirer';
import { RewritingStream } from 'parse5-html-rewriting-stream';
import { table } from 'table';
import progressbar from 'string-progressbar';

const isWin = process.platform === 'win32';

const commands = {
	"escape-patterns": {
		helpText: 'Escapes block patterns for pattern files that have changes (staged or unstaged).',
		run: () => escapePatterns()
	},
	"help": {
		helpText: 'Displays the main help message.',
		run: (args) => showHelp(args?.[1])
	},
};

(async function start() {
	let args = process.argv.slice(2);
	let command = args?.[0];

	if (!commands[command]) {
		return showHelp();
	}

	commands[command].run(args);
})();

function showHelp(command = '') {
	if (!command || !commands.hasOwnProperty(command)) {
		console.log(`
node theme-utils.mjs [command]

Available commands:
_(theme-utils.mjs help [command] for more details)_

\t${Object.keys(commands).join('\n\t')}
	`);
		return;
	}

	const { helpText, additionalArgs } = commands[command];
	console.log(`
${command} ${additionalArgs ?? ''}

${helpText}
	`);
}

/*
 Execute a command locally.
*/
export async function executeCommand(command, logResponse) {
	const timeout = 2*60*1000; // 2 min

	return new Promise((resolove, reject) => {
		let child;
		let response = '';
		let errResponse = '';

		if (isWin) {
			child = spawn('cmd.exe', ['/s', '/c', '"' + command + '"'], {
				windowsVerbatimArguments: true,
				stdio: [process.stdin, 'pipe', 'pipe'],
				detached: true,
			})
		} else {
			child = spawn(process.env.SHELL, ['-c', command], {
				stdio: [process.stdin, 'pipe', 'pipe'],
				detached: true,
			});
		}

		var timer = setTimeout(() => {
			try {
				process.kill(-child.pid, 'SIGKILL');
			} catch (e) {
				console.log('Cannot kill process');
			}
		}, timeout);

		child.stdout.on('data', (data) => {
			response += data;
			if (logResponse) {
				console.log(data.toString());
			}
		});

		child.stderr.on('data', (data) => {
			errResponse += data;
			if (logResponse) {
				console.log(data.toString());
			}
		});

		child.on('exit', (code) => {
			clearTimeout(timer)
			if (code !== 0) {
				reject(errResponse.trim());
			}
			resolove(response.trim());
		});
	});
}

async function escapePatterns() {
	// get staged files
	const staged = (await executeCommand(`git diff --cached --name-only`)).split('\n');
	// get unstaged, untracked files
	const unstaged = (await executeCommand(`git ls-files -m -o --exclude-standard`)).split('\n');

	// avoid duplicates and filter pattern files
	const patterns = [...new Set([...staged, ...unstaged])].filter(file => file.match(/.*\/patterns\/.*.php/g));

	// arrange patterns by theme
	const themePatterns = patterns.reduce((acc, file) => {
		const themeSlug = file.split('/').shift();
		return {
			...acc,
			[themeSlug]: (acc[themeSlug] || []).concat(file)
		};
	}, {});

	Object.entries(themePatterns).forEach(async ([themeSlug, patterns]) => {
		console.log(getPatternTable(themeSlug, patterns));

		const prompt = await inquirer.prompt([{
			type: 'input',
			message: 'Verify the theme slug',
			name: "themeSlug",
			default: themeSlug
		}]);

		if (!prompt.themeSlug) {
			return;
		}

		patterns.forEach(file => {
			const rewriter = getReWriter(prompt.themeSlug);
			const tmpFile = `${file}-tmp`;
			const readStream = fs.createReadStream( file, { encoding: 'UTF-8' } );
			const writeStream = fs.createWriteStream( tmpFile, { encoding: 'UTF-8' } );
			writeStream.on('finish', () => {
				fs.renameSync(tmpFile, file);
			});

			readStream.pipe(rewriter).pipe(writeStream);
		});
	});


	// Helper functions
	function getReWriter(themeSlug) {
		const rewriter = new RewritingStream();

		rewriter.on('text', (_, raw) => {
			rewriter.emitRaw(escapeText(raw, themeSlug));
		});

		rewriter.on('startTag', (startTag, rawHtml) => {
			if (startTag.tagName === 'img') {
				const attrs = startTag.attrs.filter(attr => ['src', 'alt'].includes(attr.name));
				attrs.forEach(attr => {
					if (attr.name === 'src') {
						attr.value = escapeImagePath(attr.value);
					} else if (attr.name === 'alt') {
						attr.value = escapeText(attr.value, themeSlug, true);
					}
				});
			}


			rewriter.emitStartTag(startTag);
		});

		rewriter.on('comment', (comment, rawHtml) => {
			if (comment.text.startsWith('?php')) {
				rewriter.emitRaw(rawHtml);
				return;
			}
			// escape the strings in block config (blocks that are represented as comments)
			// ex: <!-- wp:search {label: "Search"} /-->
			const block = escapeBlockAttrs(comment.text, themeSlug)
			rewriter.emitComment({...comment, text: block})
		});

		return rewriter;
	}

	function escapeBlockAttrs(block, themeSlug) {
		// Set isAttr to true if it is an attribute in the result HTML
		// If set to true, it generates esc_attr_, otherwise it generates esc_html_
		const allowedAttrs=[
			{ name: 'label' },
			{ name: 'placeholder', isAttr: true },
			{ name: 'buttonText' },
			{ name: 'content' }
		];
		const start = block.indexOf('{');
		const end = block.lastIndexOf('}');

		const configPrefix = block.slice(0, start);
		const config = block.slice(start, end+1);
		const configSuffix = block.slice(end+1);

		try {
			const configJson = JSON.parse(config);
			allowedAttrs.forEach((attr) => {
				if (!configJson[attr.name]) return;
				configJson[attr.name] = escapeText(configJson[attr.name], themeSlug, attr.isAttr)
			})
			return configPrefix + JSON.stringify(configJson) + configSuffix;
		} catch (error) {
			// do nothing
			return block
		}
	}

	function escapeText(text, themeSlug, isAttr = false) {
		const trimmedText = text && text.trim();
		if (!themeSlug || !trimmedText || trimmedText.startsWith(`<?php`)) return text;
		const escFunction = isAttr ? 'esc_attr__' : 'esc_html__';
		const spaceChar = text.startsWith(' ') ? '&nbsp;' : ''
		const resultText = text.replace('\'', '\\\'').trim();
		return `${spaceChar}<?php echo ${escFunction}( '${resultText}', '${themeSlug}' ); ?>`;
	}

	function escapeImagePath(src) {
		if (!src || src.trim().startsWith('<?php')) return src;

		const assetsDir = 'assets';
		const parts = src.split('/');
		const resultSrc = parts.slice(parts.indexOf(assetsDir)).join('/');
		return `<?php echo esc_url( get_template_directory_uri() ); ?>/${resultSrc}`;
	}

	function getPatternTable(themeSlug, patterns) {
		const tableConfig = {
			columnDefault: {
				width: 40,
			},
			header: {
				alignment: 'center',
				content: `THEME: ${themeSlug}\n\n Following patterns may get updated with escaped strings and/or image paths`,
			}
		};

		return table(patterns.map(p => [p]), tableConfig);
	}
}

function startProgress(length) {
	let current = 0;
	function render() {
		const [progress, percentage] = progressbar.filledBar(length, current);
		console.log('\nProgress:', [progress, Math.round(percentage*100)/100], `${current}/${length}\n`);
	}

	render();
	return {
		increment() {
			current++;
			render();
		}
	};
}
