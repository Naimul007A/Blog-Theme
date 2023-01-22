<?php
//====header area====
function wt_customizar_register( $wp_customize ) {
    //header area add section
    $wp_customize->add_section( 'wt_header_area', array(
        'title'       => __( 'Header_area', 'naimulislam' ),
        'description' => 'if you intersted to update your header area ,you can do it here.',

    ) );
    //header area add setting
    $wp_customize->add_setting( 'wt_logo', array(
        'default' => get_bloginfo( 'template_directory' ) . '/img/logo.jpg',

    ) );
    //header area add control
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wt_logo', array(
        'label'       => 'logo upload',
        'description' => 'if you interested to change or update your logo you can do it .click the change image button.',
        'setting'     => 'wt_logo',
        'section'     => 'wt_header_area',

    ) ) );

    ////menu position
    //menu position add section
    $wp_customize->add_section( 'wt_menu_option', array(
        'title'       => __( 'Menu position', 'naimulislam' ),
        'description' => 'if you intersted to Change your menu Position.you can do it.',
    ) );
    //menu position add setting
    $wp_customize->add_setting( 'wt_menu_position', array(
        'default' => 'right_menu',
    ) );
    //menu position add control
    $wp_customize->add_control( 'wt_menu_position', array(
        'label'       => 'Change menu',
        'description' => 'select your menu position!.',
        'setting'     => 'wt_menu_position',
        'section'     => 'wt_menu_option',
        'type'        => 'radio',
        'choices'     => array(
            'right_menu'  => 'Right Menu',
            'left_menu'   => 'Left Menu',
            'center_menu' => 'Center Menu',
        ),
    ) );
    ////footer option
    //footer option add section
    $wp_customize->add_section( 'wt_footer', array(
        'title'       => __( 'Footer Option', 'naimulislam' ),
        'description' => 'if you intersted to change your footer text.You can do it!',
    ) );
    //footer option add setting
    $wp_customize->add_setting( 'wt_footer_option', array(
        'default' => '&copy; copyright 2022 | Naimul islam',
    ) );
    //footer option add control
    $wp_customize->add_control( 'wt_footer_option', array(
        'label'   => 'Copyright Text',
        'setting' => 'wt_footer_option',
        'section' => 'wt_footer',
    ) );
    ///theme color change
    ///theme background color change
    $wp_customize->add_section( 'wt_theme_color', array(
        'title'       => __( 'Theme Color', 'naimulislam' ),
        'description' => 'if you need you can change theme color.',
    ) );
    $wp_customize->add_setting( 'wt_bg_color', array(
        'default' => '#ffffff',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wt_bg_color', array(
        'label'   => 'Background Color:',
        'section' => 'wt_theme_color',
        'setting' => 'wt_bg_color',
    ) ) );
    ///theme text color change
    $wp_customize->add_setting( 'wt_text_color', array(
        'default' => '#000',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wt_text_color', array(
        'label'   => 'Text Color:',
        'section' => 'wt_theme_color',
        'setting' => 'wt_text_color',
    ) ) );
    ///theme primary color change
    $wp_customize->add_setting( 'wt_pry_color', array(
        'default' => '#ba2e1f',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wt_pry_color', array(
        'label'   => 'Primary Color:',
        'section' => 'wt_theme_color',
        'setting' => 'wt_pry_color',
    ) ) );

//end function
}
//wt_customizar_register action..
add_action( 'customize_register', 'wt_customizar_register' );
//menu register
register_nav_menu( 'main-menu', __( 'Main Menu', 'naimulislam' ) );

////theme color add action
function wt_theme_color_customize() {
    ?>
<style>
body {
    background: <?php echo get_theme_mod('wt_bg_color') ?>;
    color: <?php echo get_theme_mod('wt_text_color') ?>;
}

:root {
    --color: <?php echo get_theme_mod('wt_pry_color') ?>;
}
</style>
<?php

}
add_action( 'wp_head', 'wt_theme_color_customize' );