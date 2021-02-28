<?php 

function zfinanbox_default_functions(){

//Text Domain Load
	load_theme_textdomain('zfinanbox', get_template_directory_uri().'/languages');

//title ber dynamic
	add_theme_support('title-tag');

//post thumbnails add
	add_theme_support('post_thumbnails');

//theme support for thumbnails add
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-thumbnails', array( 'post' ) );    // Posts only       
	add_theme_support( 'post-thumbnails', array( 'page' ) );    // Pages only
	add_theme_support( 'post-thumbnails', array( 'post', 'slider' ) ); // Posts and Movies
//theme support for Logo
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-width' => true,
	) );

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

	//Post read more / less content
	function read_more(){
		$post_content = explode(" ", get_the_content());
		$less_content = array_slice($post_content, 0, 20);
		echo implode(" ", $less_content);
	}


}


//Hook
add_action('after_setup_theme','zfinanbox_default_functions');
?>