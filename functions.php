<?php

function samaaj_child_enqueue_scripts() {

  wp_enqueue_style( 'samaaj-child-style', get_stylesheet_uri() );

}
add_action('wp_enqueue_scripts', 'samaaj_child_enqueue_scripts');
