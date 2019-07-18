<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );// add parent style

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
   wp_enqueue_style( 'pegasus-path-style', get_stylesheet_directory_uri() .'/assets/css/pegasuspath.css', array(),'1.0.0' );
}


function knowledge_base_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'knowledge Base Sidebar' ),
            'id' => 'kdb-base-side-bar',
            'description' => __( 'knowledge Base Sidebar'),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'knowledge_base_sidebar' );

function sidebar_widget_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar'),
        'id' => 'main_sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ) );
}
add_action( 'widgets_init', 'sidebar_widget_init' );
