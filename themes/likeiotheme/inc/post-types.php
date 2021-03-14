<?php
/**
 * Register a custom post type called "Smarts"
 *
 * @see get_post_type_labels() for label keys.
 */

function likeiotheme_init_post_types() {
    /**
     * Smarts
     */
    $labels = array(
        'name'                  => esc_html_x( 'Smarts', 'Post type general name', 'likeiotheme' ),
        'singular_name'         => esc_html_x( 'Smart', 'Post type singular name', 'likeiotheme' ),
        'menu_name'             => esc_html_x( 'Smarts', 'Admin Menu text', 'likeiotheme' ),
        'name_admin_bar'        => esc_html_x( 'Smart', 'Add New on Toolbar', 'likeiotheme' ),
        'add_new'               => esc_html__( 'Add New', 'likeiotheme' ),
        'add_new_item'          => esc_html__( 'Add New Smart', 'likeiotheme' ),
        'new_item'              => esc_html__( 'New Smart', 'likeiotheme' ),
        'edit_item'             => esc_html__( 'Edit Smart', 'likeiotheme' ),
        'view_item'             => esc_html__( 'View Smart', 'likeiotheme' ),
        'all_items'             => esc_html__( 'All Smart', 'likeiotheme' ),
        'search_items'          => esc_html__( 'Search Smart', 'likeiotheme' ),
        'parent_item_colon'     => esc_html__( 'Parent Smart:', 'likeiotheme' ),
        'not_found'             => esc_html__( 'No Smart Found.', 'likeiotheme' ),
        'not_found_in_trash'    => esc_html__( 'No Smart Found In Trash.', 'likeiotheme' ),
        'featured_image'        => esc_html_x( 'Smart Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'likeiotheme' ),
        'set_featured_image'    => esc_html_x( 'Set Cover Image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'likeiotheme' ),
        'remove_featured_image' => esc_html_x( 'Remove Cover Image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'likeiotheme' ),
        'use_featured_image'    => esc_html_x( 'Use As Cover Image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'likeiotheme' ),
        'archives'              => esc_html_x( 'Smart Archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'likeiotheme' ),
        'insert_into_item'      => esc_html_x( 'Insert Into Festyle', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'likeiotheme' ),
        'uploaded_to_this_item' => esc_html_x( 'Uploaded To This Smart', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'likeiotheme' ),
        'filter_items_list'     => esc_html_x( 'Filter Smart List', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'likeiotheme' ),
        'items_list_navigation' => esc_html_x( 'Smart List Navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'likeiotheme' ),
        'items_list'            => esc_html_x( 'Smart List', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'likeiotheme' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'smarts' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-image-filter',
        'show_in_rest'       => true,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );

    register_post_type( 'likeio_sts', $args );
    
}

add_action( 'init', 'likeiotheme_init_post_types' );
