<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package UU2014
 */
$uu2014_widget_default_args = array(
  'before_widget' => '<aside id="%1$s" class="widget %2$s">',
  'after_widget'  => '</aside>',
  'before_title'  => '<h1 class="widget-title">',
  'after_title'   => '</h1>',
);
?>
<div id="secondary" class="sidebar-widget-area widget-area" role="complementary">
	<nav role="navigation" class="navigation site-navigation secondary-navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
	</nav>
    <?php if (!dynamic_sidebar('home-widgets')) : ?>
		<?php the_widget( 'WP_Widget_Recent_Posts', null, $uu2014_widget_default_args ); ?>
		<?php the_widget( 'WP_Widget_Archives', null, $uu2014_widget_default_args ); ?>
		<?php the_widget( 'WP_Widget_Categories', 'hierarchical=1', $uu2014_widget_default_args ); ?>
    <?php endif; // end sidebar widget area  ?>
</div><!-- #secondary -->
