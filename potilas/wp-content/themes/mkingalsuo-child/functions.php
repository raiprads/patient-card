<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', 11);

function theme_enqueue_styles() {

    //enqueue sb admin css

    wp_enqueue_style( 'bootstrap-style', 
        get_stylesheet_directory_uri() . '/css/bootstrap.min.css'
    );

    wp_enqueue_style( 'sb-admin', 
        get_stylesheet_directory_uri() . '/css/sb-admin.css'
    );

    wp_enqueue_style( 'font-awesome', 
        get_stylesheet_directory_uri() . '/font-awesome/css/font-awesome.min.css'
    );

    //wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css' );
}

function theme_enqueue_scripts() {

    //enqueue sb admin scripts
    
    wp_register_script('jquery-script', get_stylesheet_directory_uri(). '/js/jquery.js', array('jquery'), '1.1', true);
    wp_enqueue_script('jquery-script');

    wp_register_script('bootstrap-script', get_stylesheet_directory_uri(). '/js/bootstrap.min.js', array(), '1.1', true);
    wp_enqueue_script('bootstrap-script');

}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );  