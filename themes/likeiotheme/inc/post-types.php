<?php
/**
 * Register a custom post type called "Smartlife"
 *
 * @see get_post_type_labels() for label keys.
 */

function likeiotheme_init_post_types() {
    /**
     * Smartlife 
     */
    $labels = array(
        'name'                  => esc_html_x( 'Smartlifes', 'Post type general name', 'likeio-theme' ),
        'singular_name'         => esc_html_x( 'Smartlife', 'Post type singular name', 'likeio-theme' ),
        'menu_name'             => esc_html_x( 'Smartlifes', 'Admin Menu text', 'likeio-theme' ),
        'name_admin_bar'        => esc_html_x( 'Smartlife', 'Add New on Toolbar', 'likeio-theme' ),
        'add_new'               => esc_html__( 'Add New', 'likeio-theme' ),
        'add_new_item'          => esc_html__( 'Add New Smartlife', 'likeio-theme' ),
        'new_item'              => esc_html__( 'New Smartlife', 'likeio-theme' ),
        'edit_item'             => esc_html__( 'Edit Smartlife', 'likeio-theme' ),
        'view_item'             => esc_html__( 'View Smartlife', 'likeio-theme' ),
        'all_items'             => esc_html__( 'All Smartlifes', 'likeio-theme' ),
        'search_items'          => esc_html__( 'Search Smartlifes', 'likeio-theme' ),
        'parent_item_colon'     => esc_html__( 'Parent Smartlifes:', 'likeio-theme' ),
        'not_found'             => esc_html__( 'No Smartlifes Found.', 'likeio-theme' ),
        'not_found_in_trash'    => esc_html__( 'No Smartlifes Found In Trash.', 'likeio-theme' ),
        'featured_image'        => esc_html_x( 'Smartlife Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'likeio-theme' ),
        'set_featured_image'    => esc_html_x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'likeio-theme' ),
        'remove_featured_image' => esc_html_x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'likeio-theme' ),
        'use_featured_image'    => esc_html_x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'likeio-theme' ),
        'archives'              => esc_html_x( 'Smartlife archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'likeio-theme' ),
        'insert_into_item'      => esc_html_x( 'Insert into festyle', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'likeio-theme' ),
        'uploaded_to_this_item' => esc_html_x( 'Uploaded to this Smartlife', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'likeio-theme' ),
        'filter_items_list'     => esc_html_x( 'Filter Smartlifes list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'likeio-theme' ),
        'items_list_navigation' => esc_html_x( 'Smartlifes list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'likeio-theme' ),
        'items_list'            => esc_html_x( 'Smartlifes list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'likeio-theme' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'smartlifes' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-image-filter',
        'show_in_rest'       => true,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'likeio_Smartlifes', $args );
    
}

add_action( 'init', 'likeiotheme_init_post_types' );
