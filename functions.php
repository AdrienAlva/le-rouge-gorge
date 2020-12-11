<?php 

// Adding style.css to head
function load_stylesheets() {

	wp_register_style( 'stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all' );
	wp_enqueue_style( 'stylesheet' );

}
add_action( 'wp_enqueue_scripts', 'load_stylesheets' );
//END

// Adding app.js to scripts section
function load_javascript(){

	wp_register_script( 'custom', get_template_directory_uri() . '/app.js' , 'jquery', 1, true );
	wp_enqueue_script( 'custom' );

}
add_action( 'wp_enqueue_scripts', 'load_javascript' );
//END


// Add support
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );


// Register menus
register_nav_menus(

 array( 'top-menu' => 'Top Menu',
		'footer-menu' => 'Footer Menu',
		'top-menu-shop' => 'Top Menu Shop') 
);

// Add image sizes
add_image_size( 'post_image', 500, 375, false ); //false = crop l'image ou non.


// Add a widget
register_sidebar( array( 
	'name'=> 'Page Sidebar',
	'id' => 'page-sidebar',
	'class' => '',
	'before_title' => '<h4>',
	'after_title' => '</h4>'						 
));

// Adjusting "the_excerpt" value 
function wpdocs_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


//WOOCOMMERCE SUPPORT
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );


/* Adding short descritpion to shop list items */
function tutsplus_excerpt_in_product_archives() {
    	the_excerpt();     
}
add_action( 'woocommerce_after_shop_loop_item_title', 'tutsplus_excerpt_in_product_archives', 9 );


/* Removing breadcrumbs from single product */
function remove_shop_breadcrumbs(){
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
}
add_action('template_redirect', 'remove_shop_breadcrumbs' );


/* Moving Description tab */
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );

add_action( 'woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs', 11 );


/* Ne pas afficher l'UGS sur vos pages produits */
add_filter( 'wc_product_sku_enabled', 'wpm_remove_sku' );

function wpm_remove_sku( $enabled ) {
	// Si on est pas dans l'admin et si on est sur la page produit
    if ( !is_admin() && is_product() ) {
        return false;
    }
    return $enabled;
}


//remove summary from single product
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );

function woocommerce_template_single_excerpt() {
        return;
}


/* Move price on single product page */
add_action('woocommerce_single_product_summary', 'move_single_product_price', 1);
function move_single_product_price() {
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
    add_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 29);
}


/* Remove stock from single product page*/
function my_wc_hide_in_stock_message( $html, $product ) {
	if ( $product->is_in_stock() ) {
		return '';
	}
	return $html;
}

add_filter( 'woocommerce_get_stock_html', 'my_wc_hide_in_stock_message', 10, 2 );

// To change add to cart text on product archives(Collection) page

add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text' );  
function woocommerce_custom_product_add_to_cart_text() {
    return __( '', 'woocommerce' );
}



?>