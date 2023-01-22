<?php if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        ?>
<div class="post_area">
    <div class="post_thum">
        <?php the_post_thumbnail( 'post-thumbnails' )?>
    </div>
    <div class="post_details">
        <h2> <?php the_title()?></h2>
        <?php the_content()?>
    </div>

</div>
<?php }} else {
    echo "No post found";}?>