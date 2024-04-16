<?php
function mcdo_assets(){
    // wp_enqueue_style -> load your css assets 
    wp_enqueue_style('mcdo-style', get_template_directory_uri() . "./css/style.css", microtime());
    wp_enqueue_style('mcdo-icons', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css", "6.4.0");

    // wp_enqueue_script -> load your JS assets
    wp_enqueue_script('mcdo-slider-js', 'https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js', "1.0", [], true );
    wp_enqueue_script('mcdo-script', get_template_directory_uri() . "./script/script.js", microtime(), [], true );
   
   // conditional loading of assets base on the current page
    if(is_front_page()) {
        wp_enqueue_script('mcdo-slider', get_template_directory_uri() . "./script/slider.js", microtime(), [], true );
    }
}
// Hook that will run this function    
add_action('wp_enqueue_scripts', 'mcdo_assets');

function blog_support(){
    add_theme_support('post-thumbnails'); // add featured Image 
    add_theme_support('menus'); // add menus

    register_nav_menu( 'header_menu', 'Header Menu'); // create a nav locations
    register_nav_menu( 'footer_menu', 'Footer Menu');
}

add_action('after_setup_theme', 'blog_support');


function careers_custom_post(){
    $careers_label = array(
        'name'     => __('Careers', 'textdomain'),
        'singular_name' => __('Career', 'textdomain'),
        'add_new'    => __('Add Career', 'textdomain'),
        'edit_item'   => __('Edit Career', 'textdomain'),
        'add_new_item' => __('Add New Career', 'textdomain'),
        'all_items'   => __('Careers', 'textdomain'),
    );

    $careers_args = array(
        'labels' => $careers_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title', 'editor','thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-format-aside',
    );

    register_post_type('careers', $careers_args);

}
        
add_action('init', 'careers_custom_post');

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
}
