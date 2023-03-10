<?php
/**
 * Register block styles.
 * TODO: Add CSS, repeat for both featured image and image blocks
 */
register_block_style(
	'core/image',
	array(
		'name'         => 'slant-left',
		'label'        => __( 'Slant left', 'blue-note' ),
		'inline_style' => '',
	)
);

register_block_style(
	'core/image',
	array(
		'name'         => 'slant-right',
		'label'        => __( 'Slant right', 'blue-note' ),
		'inline_style' => '',
	)
);
