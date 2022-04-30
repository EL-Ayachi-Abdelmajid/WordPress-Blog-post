<div class="entry-content">
    <?php
    the_content( sprintf(
        wp_kses(
        /* translators: %s: Name of current post. Only visible to screen readers */
            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'blogtory' ),
            array(
                'span' => array(
                    'class' => array(),
                ),
            )
        ),
        get_the_title()
    ) );

    wp_link_pages( array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blogtory' ),
        'after'  => '</div>',
    ) );
    ?>
</div><!-- .entry-content -->
<footer class="entry-footer">
    <?php blogtory_entry_footer(false,true,false); ?>
</footer><!-- .entry-footer -->