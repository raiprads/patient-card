<?php

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

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', 11);

function theme_enqueue_scripts() {

    //enqueue sb admin scripts
    
    //duplicate with wordpress
    //wp_register_script('jquery-script', get_stylesheet_directory_uri(). '/js/jquery.js', array(), '1.1');
    //wp_enqueue_script('jquery-script');

    wp_register_script('bootstrap-script', get_stylesheet_directory_uri(). '/js/bootstrap.min.js', array('jquery'), '1.1');
    wp_enqueue_script('bootstrap-script');

    wp_register_script('jquery-validate-script', get_stylesheet_directory_uri(). '/js/jquery.validate.min.js', array('jquery'), '1.1');
    wp_enqueue_script('jquery-validate-script');


    if ( get_permalink() == home_url() . '/add-new-patient/' ) {
        
        // add new patient js
        wp_register_script('patient-ajax', get_stylesheet_directory_uri(). '/js/add-new.patient.js', array('jquery'), '1.1');

    }

    wp_localize_script( 'patient-ajax', 'doAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));        
    wp_enqueue_script('patient-ajax');

}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );


include_once("functions/add-patient.php");

add_action( 'wp_ajax_add_new_patient', 'add_new_patient' );
//add_action( 'wp_ajax_nopriv_add_new_patient', 'add_new_patient' );


