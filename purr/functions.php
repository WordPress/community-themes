<?php

function purr_setup() {
	add_theme_support( 'post-formats', array( 'status', 'gallery', 'aside', 'video', 'audio', 'image', 'link' ) );
}

add_action( 'after_setup_theme', 'purr_setup' );