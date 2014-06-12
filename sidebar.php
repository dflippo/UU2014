<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package UU2014
 */
?>
<div id="secondary" class="widget-area" role="complementary">
	<?php if ( has_nav_menu( 'secondary' ) ) : ?>
	<nav role="navigation" class="navigation site-navigation secondary-navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
	</nav>
	<?php endif; ?>
    <?php if (!dynamic_sidebar('home-widgets')) : ?>
      <p>&nbsp;</p>
    <?php endif; // end sidebar widget area  ?>
</div><!-- #secondary -->
