<?php
/**
 * The template part for text after the primary content area.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package UU2014
 */
?>

<?php if ( is_active_sidebar( 'uu2014-content-footer' ) ) : ?>
	<div id="content-footer" class="content-footer widget-area" role="complementary">
		<?php dynamic_sidebar( 'uu2014-content-footer' ); ?>
	</div><!-- #content-footer -->
<?php endif; ?>
