<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package UU2014
 */
get_header();
?>
<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
	<?php get_template_part('content', 'header'); ?>

    <?php while (have_posts()) : the_post(); ?>

      <?php get_template_part('content', 'page'); ?>

            <?php
            // If the theme is set to display comments
            if (get_theme_mod('uu2014_display_comments_posts', 1)) {
                // If comments are open or we have at least one comment, load up the comment template
                if ( comments_open() || '0' != get_comments_number() ) {
                    comments_template();
                }
            } ?>

        <?php endwhile; // end of the loop. ?>

	<?php get_template_part('content', 'footer'); ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar('page'); ?>
<?php get_footer(); ?>