<?php
if ( function_exists('register_sidebar') )

	register_nav_menu($location, $description);

    add_theme_support('post-thumbnails');
	
	add_theme_support('post-formats', array('aside', 'gallery'));

    register_sidebar(array(
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<div class="title">',
        'after_title' => '</div>',
    ));
?>