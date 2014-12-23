<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @package UU2014
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<?php $uu2014_display_favicon_image = get_theme_mod('uu2014_display_favicon_image', false);
      $uu2014_favicon = get_theme_mod('uu2014_favicon', false);
      if($uu2014_display_favicon_image && $uu2014_favicon) {
        echo '<link rel="shortcut icon" href="' . get_template_directory_uri() . '/images/' . $uu2014_favicon . '">';
      } ?>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="hfeed site">
            <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'uu2014' ); ?></a>

            <header id="masthead" class="site-header" role="banner">
                <div class="site-branding">
					<div id="header-widget-area" class="header-widget-area">
					<?php $header_image = get_header_image();
					if (!get_theme_mod('uu2014_display_header_widgets', 1) || !dynamic_sidebar('header-widget')) {
						if (!empty($header_image)) { ?>
							<img src="<?php header_image(); ?>" width="100%" alt="">
					<?php } } ?>
					</div>
                    <div class="site-title-description">
                        <img id="chalice" alt="" src="<?php echo get_template_directory_uri() . '/images/' . get_theme_mod('uu2014_title_image', 'chalice.png'); ?>">
                        <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home" style="color:<?php get_header_textcolor() ?>;"><?php bloginfo('name'); ?></a></h1>
                        <?php if (get_bloginfo('description')) { ?>
                            <h2 class="site-description" style="color:<?php get_header_textcolor() ?>;"><?php bloginfo('description'); ?></h2>
                        <?php } // if (get_bloginfo('description'))   ?>
                    </div>
                </div>
                <div class="main-nav-menu">
                    <nav id="site-navigation" class="navigation site-navigation main-navigation" role="navigation">
                        <button class="menu-toggle"><?php _e('Primary Menu', 'uu2014'); ?></button>
                        <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'nav-menu', 'link_after' => '<span class="double-tap"></span>')); ?>
                    </nav><!-- #site-navigation -->
                </div>
            </header><!-- #masthead -->
            <div id="search-box" class="search-box"><?php echo get_search_form(); ?></div>
            <div id="content" class="site-content">
			<?php if ( get_theme_mod('uu2014_display_floating_widgets', 1) && ( is_single() || is_page() ) ) { ?>
				<ul id="sharebar"><?php dynamic_sidebar('sharebar'); ?></ul>
			<?php }