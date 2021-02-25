<?php 

function zfinanbox_default_functions(){

//Text Domain Load
	load_theme_textdomain('zfinanbox', get_template_directory_uri().'/languages');

//title ber dynamic
	add_theme_support('title-tag');

//post thumbnails add
	add_theme_support('post_thumbnails');

//Slider thumbnails add
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-thumbnails', array( 'post' ) );    // Posts only       
	add_theme_support( 'post-thumbnails', array( 'page' ) );    // Pages only
	add_theme_support( 'post-thumbnails', array( 'post', 'slider' ) ); // Posts and Movies
//Register for slider
	register_post_type('zfinanbox',array(
		'labels' => array(
			'name' => 'My Sliders',
			'add_new_item' =>'Add Your Slider Here'
		),
		'public' => true,
		'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
	));

//Register Menu
	register_nav_menu('header-menu',__( 'Header Menu', 'zfinanbox'));
}


//Hook
add_action('after_setup_theme','zfinanbox_default_functions');
?>