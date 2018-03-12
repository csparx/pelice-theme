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

/**
* Register & Implement Speaker Section
*/

// Register Speaker Custom Post Type
add_action( 'init', 'cns_speaker_init' );
function cns_speaker_init(){
  $labels = array(
        'name'               => _x( 'Speakers', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'Speaker', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'Speakers', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'Speaker', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Add New', 'speaker', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Add New Speaker', 'your-plugin-textdomain' ),
        'new_item'           => __( 'New Speaker', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Edit Speaker', 'your-plugin-textdomain' ),
        'view_item'          => __( 'View Speaker', 'your-plugin-textdomain' ),
        'all_items'          => __( 'All Speakers', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Search Speakers', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Parent Speakers:', 'your-plugin-textdomain' ),
        'not_found'          => __( 'No Speakers found.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'No Speakers found in Trash.', 'your-plugin-textdomain' )
    );

    $args = array(
        'labels'             => $labels,
    'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Speaker' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
    'menu_icon'          => 'dashicons-admin-users',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );
  register_post_type( 'cns_speaker', $args );
}

// Register Speaker Taxonomy
add_action( 'init', 'cns_speaker_year_init' );
function cns_speaker_year_init(){
  register_taxonomy(
        'cns_speaker_year',
        'cns_speaker',
        array(
            'label' => __( 'Year' ),
            'rewrite' => array( 'slug' => 'year' ),
            'hierarchical' => true,
        )
    );
}

/**
* Register & Implement Sponsor Section
*/

// Register Sponsor Custom Post Type
add_action( 'init', 'cns_sponsor_init' );
function cns_sponsor_init(){
  $labels = array(
    'name'               => _x( 'Sponsors', 'post type general name', 'your-plugin-textdomain' ),
    'singular_name'      => _x( 'Sponsor', 'post type singular name', 'your-plugin-textdomain' ),
    'menu_name'          => _x( 'Sponsors', 'admin menu', 'your-plugin-textdomain' ),
    'name_admin_bar'     => _x( 'Sponsor', 'add new on admin bar', 'your-plugin-textdomain' ),
    'add_new'            => _x( 'Add New', 'Sponsor', 'your-plugin-textdomain' ),
    'add_new_item'       => __( 'Add New Sponsor', 'your-plugin-textdomain' ),
    'new_item'           => __( 'New Sponsor', 'your-plugin-textdomain' ),
    'edit_item'          => __( 'Edit Sponsor', 'your-plugin-textdomain' ),
    'view_item'          => __( 'View Sponsor', 'your-plugin-textdomain' ),
    'all_items'          => __( 'All Sponsors', 'your-plugin-textdomain' ),
    'search_items'       => __( 'Search Sponsors', 'your-plugin-textdomain' ),
    'parent_item_colon'  => __( 'Parent Sponsors:', 'your-plugin-textdomain' ),
    'not_found'          => __( 'No Sponsors found.', 'your-plugin-textdomain' ),
    'not_found_in_trash' => __( 'No Sponsors found in Trash.', 'your-plugin-textdomain' )
  );

  $args = array(
    'labels'             => $labels,
    'description'        => __( 'Description.', 'your-plugin-textdomain' ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'Sponsor' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'menu_icon'          => 'dashicons-groups',
    'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
  );
  register_post_type( 'cns_sponsor', $args );
}

// Register Sponsor Taxonomy
add_action( 'init', 'cns_sponsor_level_init' );
function cns_sponsor_level_init(){
  register_taxonomy(
    'cns_sponsor_level',
    'cns_sponsor',
    array(
      'label' => __( 'Sponsor Level' ),
      'rewrite' => array( 'slug' => 'sponsor-level' ),
      'hierarchical' => true,
    )
  );
}