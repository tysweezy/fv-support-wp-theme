<?php

function fv_support_scripts() {
  // Load our main stylesheet. 
  wp_enqueue_style( 'fv-support-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'fv_support_scripts' );