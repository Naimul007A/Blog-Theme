<?php
/*
 *this tamplate displaying of custom service
 */
get_header();

?>
<div id="headservice_area">
    <div class="container">
        <div class="row">
            <?php
query_posts( 'post_type=service&post_status=published&post_per_page=3&paged=' . get_query_var( 'post' ) );
if ( have_posts() ):
    while ( have_posts() ): the_post();
        ?>
            <div class="col-md-4">
                <div class="single-service">
                    <h1><?php the_title()?></h1>
                    <a href=" <?php the_permalink()?>">
                        <?php echo the_post_thumbnail( 'service' ) ?>
                    </a>
                    <?php the_excerpt()?>
                </div>
            </div>
            <?php
    endwhile;
endif;
?>
        </div>
    </div>
</div>

<?php
get_footer();
?>