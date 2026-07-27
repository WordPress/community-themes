( () => {
	const root = document.documentElement;
	const controls = document.querySelectorAll( '[data-scheme-choice]' );

	if ( ! controls.length ) {
		return;
	}

	const updatePressedState = () => {
		const activeScheme = root.dataset.scheme || 'system';

		controls.forEach( ( control ) => {
			control.setAttribute(
				'aria-pressed',
				String( control.dataset.schemeChoice === activeScheme )
			);
		} );
	};

	controls.forEach( ( control ) => {
		control.addEventListener( 'click', () => {
			const scheme = control.dataset.schemeChoice;

			if ( scheme === 'system' ) {
				delete root.dataset.scheme;
			} else {
				root.dataset.scheme = scheme;
			}

			updatePressedState();
		} );
	} );

	new MutationObserver( updatePressedState ).observe( root, {
		attributeFilter: [ 'data-scheme' ],
	} );

	updatePressedState();
} )();
