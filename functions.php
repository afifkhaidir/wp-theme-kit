<?php
/* Setup function */
function ak_theme_setup() {
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after-setup-theme', 'ak_theme_setup');

/* Theme scripts */
function ak_theme_scripts() {
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    wp_enqueue_style('raleway', 'https://fonts.googleapis.com/css?family=Raleway:400,600,700');
    wp_enqueue_style('default', get_stylesheet_uri());
    wp_enqueue_style('themestyle', get_template_directory_uri().'/build/css/themestyle.min.css');
    
    wp_enqueue_script('js-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), '2017', true);
    wp_enqueue_script('js-themescript', get_template_directory_uri().'/build/js/themescript.min.js', array('jquery'), '2017', true);
}
add_action('wp_enqueue_scripts', 'ak_theme_scripts');

?>