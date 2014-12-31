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
			<span class="post-format">
				<a class="entry-format" href="<?php echo esc_url( get_post_format_link( 'image' ) ); ?>"><?php echo get_post_format_string( 'image' ); ?></a> - 
			</span>
			
			<?php uu2014_posted_on(); ?>
		<?php
		if ( is_attachment() ) :
			$metadata = wp_get_attachment_metadata();
			printf(
				__(' at <a href="%1$s" title="Link to full-size image">%2$s &times; %3$s</a> in <a href="%4$s" title="Return to %5$s" rel="gallery">%6$s</a>', 'uu2014'), 
				esc_url(wp_get_attachment_url()), 
				$metadata['width'], 
				$metadata['height'], 
				esc_url(get_permalink($post->post_parent)), 
				esc_attr(strip_tags(get_the_title($post->post_parent))), 
				get_the_title($post->post_parent)
			);
		endif;
		?>
		</div><!-- .entry-meta -->
    </header><!-- .entry-header -->

    <div class="entry-content">
		<div class="entry-attachment">
			<div class="attachment">
				<?php uu2014_the_attached_image(); ?>
			</div><!-- .attachment -->

			<?php if (has_excerpt()) : ?>
			<div class="entry-caption">
				<?php the_excerpt(); ?>
			</div><!-- .entry-caption -->
			<?php endif; ?>
		</div><!-- .entry-attachment -->
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

    <footer class="entry-footer">
		<?php uu2014_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-## -->
