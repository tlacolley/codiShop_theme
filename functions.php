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

remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );



remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );


//-------------Menu Nav -----------------
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );



// ---------Single Product Hook-----------

add_action( 'woocommerce_single_product_summary', 'codishop_add_price', 5 );
 
function codishop_add_price() {
echo '<p class="label_single_product"> Price:</p>';
};


add_action( 'woocommerce_single_product_summary', 'codishop_add_description', 10 );
 
function codishop_add_description() {
echo '<p class="label_description"> Description :</p>';
}







 ?>



