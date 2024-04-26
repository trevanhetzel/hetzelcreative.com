<?php

	// Remove WP emoji stuff
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );

	// Dequeue WP embed script
	add_action( 'wp_footer', 'my_deregister_scripts' );

	function my_deregister_scripts(){
		wp_deregister_script( 'wp-embed' );
	}

	// Dequeue Ninja Forms assets
	add_action( 'nf_display_enqueue_scripts', 'wpgood_nf_display_enqueue_scripts');

	function wpgood_nf_display_enqueue_scripts() {
		wp_dequeue_style( 'nf-display' );
		wp_dequeue_style( 'nf-font-awesome' );
	}

	// Custom post types
	require get_template_directory() . '/inc/post-types.php';

	// Enable post thumbnails
	require get_template_directory() . '/inc/thumbnails.php';

	// ACF
	require get_template_directory() . '/inc/acf.php';

?>
