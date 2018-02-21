<?php
function cns_enqueue_style() {
	if ( is_child_theme() ) {
      // load parent stylesheet first if this is a child theme
      wp_enqueue_style( 'parent-stylesheet', trailingslashit( get_template_directory_uri() ) . 'style.css', false );
    }
    // load active theme stylesheet in both cases
    wp_enqueue_style( 'theme-stylesheet', get_stylesheet_uri(), false );
    wp_enqueue_style( 'media-query', get_template_directory_uri() . '/assets/css/media-query.css' );

    if( is_home() ){
    	wp_enqueue_script( 'theme-stylesheet', get_template_directory_uri() . '/slick/slick.min.js', array( 'jquery' ), true );
	      wp_enqueue_style( 'parent-stylesheet', trailingslashit( get_template_directory_uri() ) . '/slick/slick.css', false );
	      wp_enqueue_style( 'parent-stylesheet', trailingslashit( get_template_directory_uri() ) . '/slick/slick-theme.css', false );
    }
}
add_action( 'wp_enqueue_scripts', 'cns_enqueue_style' );

/**
* Registers Navigation menus for the main navigation bar and top social media bar
*/
register_nav_menus( array(
  'top'    => __( 'Top Menu', 'bioenergyshow' ),
) );