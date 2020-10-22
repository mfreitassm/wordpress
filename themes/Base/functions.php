<?php

//link StyleSheets
/*function load_stylesheets(){
wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false,'all' );
wp_enqueue_style('bootstrap');

wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', array(), false,'all' );
wp_enqueue_style('stylesheet');

}
add_action('wp_enqueue_scripts', 'load_stylesheets');*/

function loadjs()
{
    wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
    wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'loadjs');

//Theme Support WordPress
add_theme_support('menus');
add_theme_support('post-thumbnails');

//Menu
register_nav_menus(

    array(
        'top-menu' => _('Top Menu', 'theme'),
        'footer-menu' => _('Footer Menu', 'theme'),
        'sidebar-menu' => _('SideBar Menu', 'theme'),
    )
);

//Images configurations

add_images_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, true);
