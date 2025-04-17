<?php

function long_theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'long_theme_support');


function long_register_styles()
{
    wp_enqueue_style('long-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all');
    wp_enqueue_style('long-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '1.0', 'all');
    wp_enqueue_style('long-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'long_register_styles');


function long_menus()
{
    $locations = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
}

add_action('init', 'long_menus');

function long_register_scripts()
{

    wp_enqueue_script('long-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '1.0', true);
    wp_enqueue_script('long-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.0', true);
    wp_enqueue_script('long-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '1.0', true);
    wp_enqueue_script('long-main', get_template_directory_uri() . '/asset/js/main.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'long_register_scripts');



function long_widget_areas()
{

    register_sidebar(
        array(
            'before_title'  => '',
            'after_title'   => '',
            'before_widget' => '',
            'after_widget'  => '',
            'name'          => 'Sidebar Area',
            'id'            => 'sidebar-1',
            'description'   => 'Sidebar Widget Area'
        )
    );


    register_sidebar(
        array(
            'before_title'  => '',
            'after_title'   => '',
            'before_widget' => '',
            'after_widget'  => '',
            'name'          => 'Footer Area',
            'id'            => 'footer-1',
            'description'   => 'Footer Widget Area'
        )
    );
}

add_action('widgets_init', 'long_widget_areas');
