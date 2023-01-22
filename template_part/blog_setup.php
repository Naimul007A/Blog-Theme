<?php if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        ?>
<div class="post_area">
    <div class="post_thum">
        <a href=" <?php the_permalink()?>">
            <?php the_post_thumbnail( 'post-thumbnails' )?>
        </a>
    </div>
    <div class="post_details">
        <a href=" <?php the_permalink()?>">
            <h2> <?php the_title()?></h2>
        </a>
        <?php the_excerpt()?>
    </div>

</div>
<?php }} else {
    echo "No post found";}?>

<?php if ( 'wt_pagination' ) {
    wt_pagination();
} else {?>
<?php next_posts_link();?>
<?php previous_posts_link();?>
<?php }?>