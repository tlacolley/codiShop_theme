<?php
add_filter( 'woocommerce_enqueue_styles', '__return_false' );

// Link stylesheet CodiShop
function codiShop_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'codishop_theme_scripts' );


// Add function WooCommerce
function CodiShop_theme_setup(){

add_theme_support('woocommerce');

}
add_action( 'after_setup_theme', 'CodiShop_theme_setup' );



 ?>
