<?php

function add_theme_scripts()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');

function register_my_menu()
{
    register_nav_menu(
        'navbar-menu',
        'Top Desktop Navbar'
    );
}

add_action('init', 'register_my_menu');
