<?php
/**
 * The template part for text before the primary content area.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package UU2014
 */
?>

<?php if ( is_active_sidebar( 'content-header-widget' ) ) : ?>
	<div id="content-header-widget" class="content-header-widget widget-area" role="complementary">
		<?php dynamic_sidebar( 'content-header-widget' ); ?>
	</div><!-- #content-header -->
<?php endif; ?>
