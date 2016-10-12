<?php

function fv_support_scripts() {
  // normalize css
  wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css');
  // custom grid system
  wp_enqueue_style( 'grid', get_template_directory_uri() . '/css/grid.css'); 
  

  // Load our main stylesheet. 
  wp_enqueue_style( 'fv-support-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'fv_support_scripts' );