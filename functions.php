<?php
//apraseme konstanta keliui
define('ASSETS_URL', get_template_directory_uri() . '/assets/');

//iskvieciame funkcija
add_action( 'wp_enqueue_scripts', 'adding_theme_styles_and_scripts' );
//funkcija skirta uzkrauti stiliams ir skriptams
function adding_theme_styles_and_scripts(){

  //registruojame stilius
  wp_register_style( 'reset.css', ASSETS_URL . 'reset.css', array(), false );
  wp_register_style( 'stylesheet.css', ASSETS_URL . 'fonts/stylesheet.css', array(), false );
  wp_register_style( 'style.css', ASSETS_URL . 'style.css', array(), false );
  wp_register_style( 'icomoon-style.css', ASSETS_URL . 'fonts/icomoon/icomoon-style.css', array(), false );
  wp_register_style( 'styles-dist.css', ASSETS_URL . 'styles-dist.css', array(), false );
  wp_register_style( 'all.css', 'https://use.fontawesome.com/releases/v5.0.12/css/all.css', array(), false );
  wp_register_style( 'boostrap.min.css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css', array(), false );




  // //registruojame javascript
  wp_register_script( 'app.js', get_template_directory_uri() . '/js/app.js', array(), false, true);
  wp_register_script( 'google_api_key', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBysEdNbj0M6ukqvcUz6C9cZETj4BbXWNk', array(), false, false);
  wp_register_script( 'maps.js', get_template_directory_uri() .'/js/maps.js', array('google_api_key'), false, true);
  wp_register_script( 'boostrap.min.js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), false, true);
  // wp_register_script( 'fancybox_js', ASSETS_URL . 'js/jquery.fancybox.pack.js', array('jquery'), false, true);
  // wp_register_script( 'magnific_js', ASSETS_URL . 'js/jquery.magnific-popup.js', array('jquery'), false, true);
  // wp_register_script( 'masonry_js', ASSETS_URL . 'js/jquery.masonry.min.js', array('jquery'), false, true);
  // wp_register_script( 'mixitup_js', ASSETS_URL . 'js/jquery.mixitup.min.js', array('jquery'), false, true);
  // wp_register_script( 'main_js', ASSETS_URL . 'js/main.js', array('jquery','plugins'), false, true);
  // wp_register_script( 'plugins_js', ASSETS_URL . 'js/plugins.js', array('jquery'), false, true);

  //uzkrauname stilius
  wp_enqueue_style( 'reset.css' );
  wp_enqueue_style( 'boostrap.min.css' );
  wp_enqueue_style( 'stylesheet.css' );
  wp_enqueue_style( 'style.css' );
  wp_enqueue_style( 'icomoon-style.css' );
  wp_enqueue_style( 'styles-dist.css' );
  wp_enqueue_style( 'all.css' );



  //uzkrauname javascript
  wp_enqueue_script( 'app.js' );
  wp_enqueue_script( 'google_api_key' );
  wp_enqueue_script( 'maps.js' );
  wp_enqueue_script( 'boostrap.min.js' );
  // wp_enqueue_script( 'fancybox_js' );
  // wp_enqueue_script( 'magnific_js' );
  // wp_enqueue_script( 'masonry_js' );
  // wp_enqueue_script( 'mixitup_js' );
  // wp_enqueue_script( 'main_js' );
  // wp_enqueue_script( 'plugins_js' );
}

add_action( 'init', 'disable_admin_bar' );
//funkcija isjungiam administratoriaus eilute virsuje
function disable_admin_bar() {
  show_admin_bar(false);
}

add_action( 'init', 'adding_theme_supports' );
//funkcija ijungianti nurodytas funkcijos galimybes
function adding_theme_supports() {
  //ijungia meniu redagavimo galimybe
  add_theme_support('menus');
  add_theme_support('post-thumbnails');
}

//registruojame galimas navigaciju lokacijas
add_action('init', 'registering_navigations');
function registering_navigations() {
  register_nav_menus( array(
    'header-menu'             => __('Viršutinis meniu'),
    'footer-menu'             => __('Apatinis meniu')
  ) );
}

//pridedame reikiamus paveiksleliu dydzius
add_action('init', 'adding_theme_image_sizes');
function adding_theme_image_sizes() {
  add_image_size( 'Background_image', 1440, 620, array('center','center') );
}

//uzregistruojame google api key
// AIzaSyBysEdNbj0M6ukqvcUz6C9cZETj4BbXWNk
function my_acf_google_map_api( $api ){

	$api['key'] = 'AIzaSyBysEdNbj0M6ukqvcUz6C9cZETj4BbXWNk';

	return $api;

}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
