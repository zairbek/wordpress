<?php




function shopcase_custom_post_type_gallery() {
    $labels = array(
        'name'                  => _x( 'Galleries', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Gallery', 'Post type singular name', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'gallery' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
    );

    register_post_type( 'gallery', $args );
}

add_action( 'init', 'shopcase_custom_post_type_gallery' );



function shopcase_custom_post_type_deals() {
    $labels = array(
        'name'                  => _x( 'Deals', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Deal', 'Post type singular name', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'deals' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
    );

    register_post_type( 'deals', $args );
}

add_action( 'init', 'shopcase_custom_post_type_deals' );



function shopcase_custom_post_type_testimonials() {
    $labels = array(
        'name'                  => _x( 'Testimonials', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Testimonial', 'Post type singular name', 'textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'testimonials' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
    );

    register_post_type( 'testimonials', $args );
}

add_action( 'init', 'shopcase_custom_post_type_testimonials' );


/**
 * Register a private 'Genre' taxonomy for post type 'book'.
 *
 * @see register_post_type() for registering post types.
 */
function custom_register_taxonomy() {
    $location = array(
        'label'        => __( 'Location', 'textdomain' ),
        'public'       => true,
        'rewrite'      => false,
        'hierarchical' => true
    );
    register_taxonomy( 'location', 'deals', $location );

    $price = array(
        'label'        => __( 'Price', 'textdomain' ),
        'public'       => true,
        'rewrite'      => false,
        'hierarchical' => true
    );
    register_taxonomy( 'price', 'deals', $price );

    $type = array(
        'label'        => __( 'Type', 'textdomain' ),
        'public'       => true,
        'rewrite'      => false,
        'hierarchical' => true
    );
    register_taxonomy( 'type', 'deals', $type );
}
add_action( 'init', 'custom_register_taxonomy', 0 );