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
		'footer-menu' => 'Footer Menu' ) 

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
?>