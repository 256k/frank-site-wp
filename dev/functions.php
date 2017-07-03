<?php

// stylesheets and javascripts
function addResources() {
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_script( 'jquery-3.2.1.min', 'https://code.jquery.com/jquery-3.2.1.min.js', $in_footer = true );
//   wp_enqueue_script( 'jquery.waypoints.min', get_template_directory_uri() .'/js/jquery.waypoints.min.js', true );
  wp_enqueue_script( 'app', get_template_directory_uri() .'/js/app.js', true );
  
}

add_action('wp_enqueue_scripts', 'addResources');



//  custom except length

// function custom_excerpt_length(){
//   return 20;
// }

// add_filter('excerpt_length', 'custom_excerpt_length');

// add .active class on active navbar
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

function theme_setup(){

  // registering menus
  register_nav_menus(array(
  'filter-menu' => __("Filter Menu")
  ));


  // featured image support
  add_theme_support('post-thumbnails');

  // adding website title dynamically
//   add_theme_support( 'title-tag' );
}
add_action('after_setup_theme', 'theme_setup');

// Hide admin bar
// add_action('get_header', 'remove_admin_login_header');
// function remove_admin_login_header() {
// 	remove_action('wp_head', '_admin_bar_bump_cb');
// }

// adding widgets (and sidebar) to wp admin interface
add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', '256k-theme' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
}

function debug_to_console($data) {
    if(is_array($data) || is_object($data))
	{
		echo("<script>console.log('PHP: ".json_encode($data)."');</script>");
	} else {
		echo("<script>console.log('PHP: ".$data."');</script>");
	}
}
