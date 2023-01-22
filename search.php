<?php
/*
 *this template for displaying the header
 */
?>
<?php get_header();?>

<section id="body_area">
    <div class="container">
        <div id="search_title">
            <h1 class="py-2"> Search:
                <span><?php the_search_query();?></span>
            </h1>
        </div>
        <div class="row">
            <div class="col-md-9">
                <?php get_template_part( 'template_part/blog_setup' );?>

            </div>
            <div class="col-md-3">
                <?php get_sidebar()?>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>