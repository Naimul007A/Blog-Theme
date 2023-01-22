<?php
/*
 *side-bar function here
 */
function wt_widgets_register() {
    register_sidebar( array(
        'name'          => __( 'Main Widgets Area', 'naimulislam' ),
        'id'            => 'sidebar_1',
        'description'   => __( 'You can change your site bar hear', 'naimulislam' ),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="sidebar_title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer 1 Area', 'naimulislam' ),
        'id'            => 'footer_1',
        'description'   => __( 'You can change your site bar hear', 'naimulislam' ),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="sidebar_title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer 2 Area', 'naimulislam' ),
        'id'            => 'footer_2',
        'description'   => __( 'You can change your site bar hear', 'naimulislam' ),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="sidebar_title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer 3 Area', 'naimulislam' ),
        'id'            => 'footer_3',
        'description'   => __( 'You can change your site bar hear', 'naimulislam' ),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="sidebar_title">',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'wt_widgets_register' );