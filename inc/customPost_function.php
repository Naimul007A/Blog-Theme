<?php
////custom service post optoin register
function custom_service() {
    register_post_type( 'service',
        array(
            'labels'              => array(
                'name'          => ( 'Service' ),
                'singular_name' => ( 'Service' ),
                'add_new'       => ( 'Add New Service' ),
                'add_new_item'  => ( 'Add New Service' ),
                'edit_item'     => ( 'Edit Service' ),
                'new_item'      => ( 'New Service' ),
                'view_item'     => ( 'View Service' ),
                'not_found'     => ( 'No post found' ),
            ),
            'menu_icon'           => 'dashicons-admin-site',
            'public'              => true,
            'hierarchical'        => true,
            'publicly_queryable'  => true,
            'exclude_form_search' => true,
            'menu_position'       => 5,
            'has_archive'         => true,
            'show_ui'             => true,
            'capability_type'     => 'post',
            'rewrite'             => array( 'slag' => 'service' ),
            'supports'            => array( 'title', 'thumbnail', 'editor' ),
            'taxonomies'          => array( 'category', 'tags', 'author' ),

        ) );
}
add_action( 'init', 'custom_service' );