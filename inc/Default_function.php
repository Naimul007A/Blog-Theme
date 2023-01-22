<?php
//Theme Title
add_theme_support( 'title-tag' );
//POst thumbnail image
add_theme_support( 'post-thumbnails', array( 'page', 'post', 'service' ) );
add_image_size( 'post-thumbnails', 966, 350, true );

//excerpt more
function wt_excerpt_more( $more ) {
    return '<br> <br><a class="readmore" href="' . get_permalink() . '">' . 'Read More' . '</a>';

}
function wt_excerpt_length( $length ) {
    return 40;
}
add_filter( 'excerpt_more', 'wt_excerpt_more' );
add_filter( 'excerpt_length', 'wt_excerpt_length', 999 );

//pagination function
function wt_pagination() {
    global $wp_query, $wp_rewrite;
    $pages = '';
    $max   = $wp_query->max_num_pages;
    if ( !$current = get_query_var( 'paged' ) ) {
        $current = 1;
    }
    $agrs['base']      = str_replace( 999999, '%#%', get_pagenum_link( 999999 ) );
    $agrs['total']     = $max;
    $agrs['current']   = $current;
    $total             = 1;
    $agrs['prev_text'] = 'Prev';
    $agrs['next_text'] = 'next';
    if ( $max > 1 ) {
        $pag = '</pre>
        <div class="wp-pagenav">';
        if ( $total == 1 && $max > 1 ) {
            $pages = '<p class="pages">page' . $current . ' <span>of</span>' . $max . '</p>';
        }

        $pag .= $pages . paginate_links( $agrs );

        $pag .= '
        </div>
        <pre>';
        echo $pag;

    }
}