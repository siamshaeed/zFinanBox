<?php 
//Text Domain Load
load_theme_textdomain('zfinanbox', get_template_directory_uri().'/languages');

//title ber dynamic
add_theme_support('title-tag');

//Register Menu
 register_nav_menus(array(
 	'mainmenu' => __('Mani Menu','zfinanbox'),
 	'secondaymenu' => __('Secondary Menu', 'zfinanbox')
 ));

?>