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


add_theme_support('post-thumbnails');