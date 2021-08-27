<?php

    function theme_css(){
        wp_enqueue_style( 'main-style', get_stylesheet_uri(), array(), '', '' );
    }


    add_action('wp_enqueue_scripts','theme_css');


    //Add Menu Support in our theme

    add_theme_support( 'menus' );


    function mytheme_register_nav_menu(){
        register_nav_menus( array(
            'header_menu' => __( 'Primary Menu', 'text_domain' ),
            'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
        ) );
    }
    add_action('after_setup_theme','mytheme_register_nav_menu');

?>