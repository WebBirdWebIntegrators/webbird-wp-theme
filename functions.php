<?php
	
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-background' );
add_theme_support( 'menus' );
add_theme_support( 'widgets' );
add_theme_support( 'woocommerce' );
add_theme_support( "title-tag" );

add_action('after_setup_theme', 'webbird_theme_setup');

function webbird_theme_setup(){
    load_theme_textdomain('webbird', get_template_directory() . '/languages');
}

add_action('init', 'load_exported_fields');

function load_exported_fields(){
	include 'assets/acf/acf.php';
}

update_option('thumbnail_size_w', 300);
update_option('thumbnail_size_h', 300);
update_option('medium_size_w', 600);
update_option('medium_size_h', 600);
update_option('large_size_w', 1200);
update_option('large_size_h', 1200);

add_image_size( 'medium-square', 600, 600, true );
add_image_size( 'billboard-bp5', 2500, 9999 );

add_filter( 'image_size_names_choose', 'webbird_custom_image_sizes' );

function webbird_custom_image_sizes( $sizes ) {
    return array_merge( $sizes, array(
	    'medium-square' => __( 'Medium square', 'webbird' ),
        'billboard-bp5' => __( 'Billboard', 'webbird' ),
    ) );
}

register_nav_menus( 
	array (
		'header-mnav' => 'Header - Main navigation',
		'header-fnav' => 'Header - Functional navigation',
		'footer-nav' => 'Footer - Navigation',
		'footer-copyrights' => 'Footer - Copyrights',
	)
);

if ( ! isset( $content_width ) ) $content_width = 600;

function webbird_login_stylesheet() {
    wp_enqueue_style( 'custom-login' , get_template_directory_uri() . '/css/wordpress.css' );
}
add_action( 'login_enqueue_scripts' , 'webbird_login_stylesheet' );

function webbird_login_logo_url() {
    return 'http://webbird.be';
}
add_filter( 'login_headerurl' , 'webbird_login_logo_url' );

function webbird_login_logo_url_title() {
    return 'WebBird | Website & webshop architects';
}
add_filter( 'login_headertitle' , 'webbird_login_logo_url_title' );

add_action('wp_enqueue_scripts' , 'webbird_scripts');

function webbird_scripts() {
	wp_enqueue_script('jquery');
	
	//wp_register_style( 'webbird-styles' , get_template_directory_uri() . '/css/styles.css');
	//wp_enqueue_style( 'webbird-styles' );
		
	wp_register_style( 'fontawesome' , get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'fontawesome' );
	
	wp_register_script( 'flexslider' , get_template_directory_uri() . '/js/jquery.flexslider.js' );
	wp_enqueue_script( 'flexslider' );
}

?>