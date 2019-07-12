<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );// add parent style

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
   wp_enqueue_style( 'pegasus-path-style', get_stylesheet_directory_uri() .'/assets/css/pegasuspath.css', array(),'1.0.0' );
}

