<?php 

add_action( 'init', 'register_cpt_tour' );

function register_cpt_tour() {

    $labels = array( 
        'name' => _x( 'tours', 'tour' ),
        'singular_name' => _x( 'tour', 'tour' ),
        'add_new' => _x( 'Add New', 'tour' ),
        'add_new_item' => _x( 'Add New tour', 'tour' ),
        'edit_item' => _x( 'Edit tour', 'tour' ),
        'new_item' => _x( 'New tour', 'tour' ),
        'view_item' => _x( 'View tour', 'tour' ),
        'search_items' => _x( 'Search tours', 'tour' ),
        'not_found' => _x( 'No tours found', 'tour' ),
        'not_found_in_trash' => _x( 'No tours found in Trash', 'tour' ),
        'parent_item_colon' => _x( 'Parent tour:', 'tour' ),
        'menu_name' => _x( 'tours', 'tour' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => '"featured product" post type for travelfilia website.',
        'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail' ),
        'taxonomies' => array( 'post_tag', 'page-category' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 20,
        'menu_icon' => 'icon-tour.png',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'tour', $args );
}