<?php

call_user_func(function() {
    $cssDir = get_stylesheet_directory_uri() . '/stylesheets';
    $jsDir = get_stylesheet_directory_uri() . '/scripts';

    // front
    add_action('wp_enqueue_scripts', function() use ($cssDir, $jsDir) {
        // Override the jQuery library
        wp_deregister_script('jquery');
        wp_register_script('jquery', $jsDir .'/vendors/jquery.js');

        // Stylesheets
        wp_enqueue_style('ilets-style', $cssDir . '/dist/main.css');

        // Scripts
        wp_enqueue_script('ilets-script', $jsDir . '/script.js',  array('jquery'));
    });
});