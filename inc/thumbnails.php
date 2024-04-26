<?php

add_theme_support( 'post-thumbnails', array('post', 'page', 'projects') );

// Horizontal feature iamge
add_image_size( 'featured', 1450, 500, array('center', 'center') );
add_image_size( 'featured_2x', 2900, 1000, array('center', 'center') );

// Half-width project photos
add_image_size( 'project', 717, 382, array('center', 'center') );
add_image_size( 'project_2x', 1434, 764, array('center', 'center') );

?>
