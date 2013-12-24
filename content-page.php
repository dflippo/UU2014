<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package UU2014
 */
?>
<?php 
if (is_home() || is_front_page()) {
  $featured_articles_id = get_theme_mod('featured_articles_id', -1);
  if( function_exists('FA_display_slider') && $featured_articles_id ){ ?>
    <div id="homepage-slider">
    <?php FA_display_slider($featured_articles_id); ?>
    </div>
<?php } } ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
    <h1 class="entry-title"><?php the_title(); ?></h1>
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
	<?php edit_post_link( __( 'Edit', 'uu2014' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
