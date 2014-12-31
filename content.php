<?php
/**
 * @package UU2014
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
		<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
			endif;
		?>

        <div class="entry-meta">
        <?php if ( get_post_format() ) : ?>
			<span class="post-format">
				<a class="entry-format" href="<?php echo esc_url( get_post_format_link( get_post_format() ) ); ?>"><?php echo get_post_format_string( get_post_format() ); ?></a> - 
			</span>
        <?php endif; ?>
            <?php uu2014_posted_on(); ?>
        </div><!-- .entry-meta -->
    </header><!-- .entry-header -->

    <?php if ( is_search() ) : // Only display Excerpts for Search ?>
    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div><!-- .entry-summary -->
    <?php else : ?>
    <div class="entry-content">
		<?php the_content( sprintf( __( 'Finish Reading: <em>%s</em>', 'uu2014' ), get_the_title() ) ); ?>
        <?php
            wp_link_pages( array(
                'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'uu2014' ) . '</span>',
                'after'  => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
            ) );
        ?>
    </div><!-- .entry-content -->
    <?php endif; ?>

    <footer class="entry-footer">
		<?php uu2014_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-## -->
