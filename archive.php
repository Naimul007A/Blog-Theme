<?php
/*
 *this template for displaying the header
 */
?>
<?php get_header();?>

<section id="body_area">
    <div class="container">
        <div id="archive_title">
            <?php the_archive_title( '<h1>', '</h1>' );?>
            <?php the_archive_description();?>

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