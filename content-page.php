<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package UU2014
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

        <div class="entry-meta">
            <?php uu2014_posted_on(); ?>
        </div><!-- .entry-meta -->
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php the_content(); ?>
        <?php
            wp_link_pages( array(
                'before' => '<div class="page-links">' . __( 'Pages:', 'uu2014' ),
                'after'  => '</div>',
            ) );
        ?>
    </div><!-- .entry-content -->
    <footer class="entry-footer">
        <?php edit_post_link( sprintf( __( 'Edit: <em>%s</em>', 'uu2014' ), get_the_title() ), '<span class="edit-link">', '</span>' ); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-## -->
