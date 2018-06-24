<?php

function theme_prefix_setup() {
	
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_enqueue_style( 'nunitosans', 'https://fonts.googleapis.com/css?family=Nunito+Sans');
    wp_enqueue_script( 'jQuery', 'https://code.jquery.com/jquery-3.1.0.js', array(), '1.0.0', true );
    wp_enqueue_script( 'cdnjs', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'recapcha', 'https://www.google.com/recaptcha/api.js', array(), '1.0.0', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
    
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' )
//      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

add_theme_support( 'post-thumbnails' ); 

function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer widget 1',
		'id'            => 'footer_1',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

function arphabet_widgets_init2() {

	register_sidebar( array(
		'name'          => 'Footer widget 2',
		'id'            => 'footer_2',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init2' );

function arphabet_widgets_init3() {

	register_sidebar( array(
		'name'          => 'Footer widget 3',
		'id'            => 'footer_3',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init3' );

function arphabet_widgets_init4() {

	register_sidebar( array(
		'name'          => 'Footer widget 4',
		'id'            => 'footer_4',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init4' );

?>