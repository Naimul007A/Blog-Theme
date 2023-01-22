<!DOCTYPE html>
<html <?php language_attributes();?> class="no-js">

<head>
    <meta charset="<?php bloginfo( 'charset' )?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>

<body <?php body_class();?>>
    <header id="header_area" class="<?php echo get_theme_mod( 'wt_menu_position' ); ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="site_logo">
                        <a href="<?php echo home_url(); ?>">
                            <img class="img-fuild" src="<?php echo get_theme_mod( 'wt_logo' ); ?>" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-9">
                    <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_id' => 'nav' ) )?>
                </div>
            </div>
        </div>
    </header>