<?php 

function zfinanbox_default_functions(){
//Text Domain Load
	load_theme_textdomain('zfinanbox', get_template_directory_uri().'/languages');

//title ber dynamic
	add_theme_support('title-tag');
//post thumbnails add
	add_theme_support('post_thumbnails');

//Register Menu
	register_nav_menus(array(
		'mainmenu' => __('Mani Menu','zfinanbox'),
		'secondaymenu' => __('Secondary Menu', 'zfinanbox')
	));
//Register for slider
	register_post_type('zfinanbox',array(
		'labels' => array(
			'name' => 'My Sliders'
		),
		'public' => true,
		'supports' => array('title', 'editor', 'thumbnails')
	));

	
}

add_action('after_setup_theme','zfinanbox_default_functions');

?>