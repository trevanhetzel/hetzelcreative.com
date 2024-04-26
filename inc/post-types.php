<?php

add_action( 'init', 'create_post_types' );

function create_post_types() {
	register_post_type( 'projects',
		array(
			'labels' => array(
				'name' => __( 'Projects' ),
				'singular_name' => __( 'Project' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => true,
			'supports' => array( 'title', 'editor', 'thumbnail' )
		)
	);
}

?>
