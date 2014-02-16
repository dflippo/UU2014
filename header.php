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
        <title><?php wp_title('|', true, 'right'); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <?php wp_head(); ?>
        <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="hfeed site">
            <?php do_action('before'); ?>
            <div id="search-box" class="search-box"><?php echo get_search_form(); ?></div>
            <header id="masthead" class="site-header" role="banner">
                <?php
                $slideshow    = get_term_by('id', get_theme_mod('header_slideshow_id', -1), 'slideshow');
                $header_image = get_header_image();
                if (function_exists('meteor_slideshow') && $slideshow) {
                    ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                        <div id="header-slideshow">
                            <?php meteor_slideshow($slideshow->name, "random: 1"); ?>
                        </div>
                    </a>
                    <?php
                } // if ( function_exists( 'meteor_slideshow' ) )
                elseif (!empty($header_image)) {
                    ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                        <img src="<?php header_image(); ?>" width="100%" alt="Header Image">
                    </a>
                <?php } // elseif ( ! empty( $header_image ) )   ?>
                <div class="site-branding">
                    <div class="site-title-description">
                        <img id="chalice" alt="Flaming Chalice" src="<?php echo apply_filters('jetpack_photon_url', get_template_directory_uri() . '/images/chalice.png'); ?>" />
                        <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" style="color:<?php get_header_textcolor() ?>;" rel="home"><?php bloginfo('name'); ?></a></h1>
                        <?php if (get_bloginfo('description')) { ?>
                            <h2 class="site-description"><?php bloginfo('description'); ?></h2>
                        <?php } // if (get_bloginfo('description'))   ?>
                    </div>
                </div>

                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <h1 class="menu-toggle"><?php _e('Menu', 'uu2014'); ?></h1>
                    <div class="skip-link"><a class="screen-reader-text" href="#content"><?php _e('Skip to content', 'uu2014'); ?></a></div>

                    <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
                </nav><!-- #site-navigation -->
            </header><!-- #masthead -->

            <div id="content" class="site-content">
			<?php if ( get_theme_mod('uu2014_display_floating_widgets', 1) && ( is_single() || is_page() ) ) { ?>
			<ul id="sharebar"><?php if(dynamic_sidebar('sharebar')){ 
				?><script>jQuery(document).ready(function($) { $('.sharebar').sharebar({horizontal: false, swidth: 70, minwidth: <?php echo get_theme_mod('uu2014_floating_widgets_min_width', 1300); ?>, position: 'right', leftOffset: 0, rightOffset: 0}); });</script><?php } ?></ul><?php }