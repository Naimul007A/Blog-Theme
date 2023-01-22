<footer id="footer_area">
    <section id="main_footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <?php dynamic_sidebar( 'footer_1' )?>
                </div>
                <div class="col-md-4">
                    <?php dynamic_sidebar( 'footer_2' )?>
                </div>
                <div class="col-md-4">
                    <?php dynamic_sidebar( 'footer_3' )?>
                </div>
            </div>
        </div>
    </section>
    <div class="copyright-are">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <p>
                        <?php echo get_theme_mod( 'wt_footer_option' ); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

</footer>
<?php wp_footer();?>
</body>

</html>