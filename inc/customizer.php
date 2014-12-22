<?php

/**
 * UU2014 Theme Customizer
 *
 * @package UU2014
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 * Add plugin integration section for UU2014
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function uu2014_customize_register($wp_customize) {

    /* Add postMessage support for site title and description for the Theme Customizer.
      ========================================================================== */
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';
    /* Widths
      ========================================================================== */
    $wp_customize->add_section('uu2014_width_section', array(
        'title' => __('UU 2014 - Widths', 'uu2014'),
        'priority' => 10010,
        'description' => __('You can customize the maximum widths for different sections of the theme below', 'uu2014')
    ));
    $wp_customize->add_setting('uu2014_page_width', array(
        'default' => '1200px', 
        'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control('uu2014_page_width_textfield', array(
        'label' => __('Maximum Page Width', 'uu2014'),
        'section' => 'uu2014_width_section',
        'settings' => 'uu2014_page_width'
            )
    );
    $wp_customize->add_setting('uu2014_header_width', array(
        'default' => '1200px', 
        'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control('uu2014_header_width_textfield', array(
        'label' => __('Maximum Header Width', 'uu2014'),
        'section' => 'uu2014_width_section',
        'settings' => 'uu2014_header_width'
            )
    );
    $wp_customize->add_setting('uu2014_menu_width', array(
        'default' => '1200px', 
        'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control('uu2014_menu_width_textfield', array(
        'label' => __('Maximum Menu Width', 'uu2014'),
        'section' => 'uu2014_width_section',
        'settings' => 'uu2014_menu_width'
            )
    );
    $wp_customize->add_setting('uu2014_footer_widget_width', array(
        'default' => '1200px', 
        'sanitize_callback' => 'sanitize_text_field'
        )
    );
    $wp_customize->add_control('uu2014_footer_widget_width_textfield', array(
        'label' => __('Maximum Footer Widget Area Width', 'uu2014'),
        'section' => 'uu2014_width_section',
        'settings' => 'uu2014_footer_widget_width'
            )
    );
    $wp_customize->add_setting('uu2014_floating_widgets_min_width', array(
        'default' => '1300', 
        'sanitize_callback' => 'is_int'
        )
    );
    $wp_customize->add_control('uu2014_floating_min_width_textfield', array(
        'label' => __('Minimum width in pixels required to show floating widget area?', 'uu2014'),
        'section' => 'uu2014_width_section',
        'settings' => 'uu2014_floating_widgets_min_width'
            )
    );
    $wp_customize->add_setting('uu2014_content_width', array(
        'default' => '720', 
        'sanitize_callback' => 'is_int'
        )
    );
    $wp_customize->add_control('uu2014_content_width_textfield', array(
        'label' => __('Maximum Content Width in pixels? The content width sets the maximum allowed width for any content in the theme, like oEmbeds and images added to posts.', 'uu2014'),
        'section' => 'uu2014_width_section',
        'settings' => 'uu2014_content_width'
            )
    );
    /* UU 2014 - Display And Hide Features
      ========================================================================== */
    $wp_customize->add_section('uu2014_display_features_section', array(
        'title' => __('UU 2014 - Display And Hide Features', 'uu2014'),
        'priority' => 10020,
        'description' => __('This theme has a number of features that you can choose to display or hide', 'uu2014')
    ));
    $wp_customize->add_setting('uu2014_display_title_image', array(
        'default' => '1', 
        'sanitize_callback' => 'is_int'
        )
    );
    $wp_customize->add_control('uu2014_display_title_image_dropdown', array(
        'label' => __('Display an image near the title?', 'uu2014'),
        'section' => 'uu2014_display_features_section',
        'settings' => 'uu2014_display_title_image',
        'type' => 'radio',
        'choices' => array(
            '1' => __('Display', 'uu2014'),
            '0' => __('Hide', 'uu2014'),
        ),
            )
    );
    $wp_customize->add_setting('uu2014_display_footer_image', array(
        'default' => '1', 
        'sanitize_callback' => 'is_int'
        )
    );
    $wp_customize->add_control('uu2014_display_footer_image_dropdown', array(
        'label' => __('Display an image in the footer?', 'uu2014'),
        'section' => 'uu2014_display_features_section',
        'settings' => 'uu2014_display_footer_image',
        'type' => 'radio',
        'choices' => array(
            '1' => __('Display', 'uu2014'),
            '0' => __('Hide', 'uu2014'),
        ),
            )
    );
    $wp_customize->add_setting('uu2014_display_favicon_image', array(
        'default' => '0', 
        'sanitize_callback' => 'is_int'
        )
    );
    $wp_customize->add_control('uu2014_display_favicon_image_dropdown', array(
        'label' => __('Display theme image for the website icon(favicon)?', 'uu2014'),
        'section' => 'uu2014_display_features_section',
        'settings' => 'uu2014_display_favicon_image',
        'type' => 'radio',
        'choices' => array(
            '1' => __('Display', 'uu2014'),
            '0' => __('Hide', 'uu2014'),
        ),
            )
    );
    $wp_customize->add_setting('uu2014_display_sidebar_widgets', array(
        'default' => '1', 
        'sanitize_callback' => 'is_int'
        )
    );
    $wp_customize->add_control('uu2014_display_sidebar_dropdown', array(
        'label' => __('Display primary sidebar widget area?', 'uu2014'),
        'section' => 'uu2014_display_features_section',
        'settings' => 'uu2014_display_sidebar_widgets',
        'type' => 'radio',
        'choices' => array(
            '1' => __('Display', 'uu2014'),
            '0' => __('Hide', 'uu2014'),
        ),
            )
    );
    $wp_customize->add_setting('uu2014_display_header_widgets', array(
        'default' => '1', 
        'sanitize_callback' => 'is_int'
        )
    );
    $wp_customize->add_control('uu2014_display_header_dropdown', array(
        'label' => __('Display header widget area?', 'uu2014'),
        'section' => 'uu2014_display_features_section',
        'settings' => 'uu2014_display_header_widgets',
        'type' => 'radio',
        'choices' => array(
            '1' => __('Display', 'uu2014'),
            '0' => __('Hide', 'uu2014'),
        ),
            )
    );
    $wp_customize->add_setting('uu2014_display_footer_widgets', array(
        'default' => '1', 
        'sanitize_callback' => 'is_int'
        )
    );
    $wp_customize->add_control('uu2014_display_footer_dropdown', array(
        'label' => __('Display footer widget area?', 'uu2014'),
        'section' => 'uu2014_display_features_section',
        'settings' => 'uu2014_display_footer_widgets',
        'type' => 'radio',
        'choices' => array(
            '1' => __('Display', 'uu2014'),
            '0' => __('Hide', 'uu2014'),
        ),
            )
    );
    $wp_customize->add_setting('uu2014_display_floating_widgets', array(
        'default' => '1', 
        'sanitize_callback' => 'is_int'
        )
    );
    $wp_customize->add_control('uu2014_display_floating_dropdown', array(
        'label' => __('Display floating widget area?', 'uu2014'),
        'section' => 'uu2014_display_features_section',
        'settings' => 'uu2014_display_floating_widgets',
        'type' => 'radio',
        'choices' => array(
            '1' => __('Display', 'uu2014'),
            '0' => __('Hide', 'uu2014'),
        ),
            )
    );
    $wp_customize->add_setting('uu2014_display_comments_pages', array(
        'default' => '1', 
        'sanitize_callback' => 'is_int'
        )
    );
    $wp_customize->add_control('uu2014_display_comments_pages_dropdown', array(
        'label' => __('Display comments on pages?', 'uu2014'),
        'section' => 'uu2014_display_features_section',
        'settings' => 'uu2014_display_comments_pages',
        'type' => 'radio',
        'choices' => array(
            '1' => __('Display', 'uu2014'),
            '0' => __('Hide', 'uu2014'),
        ),
            )
    );
    $wp_customize->add_setting('uu2014_display_comments_posts', array(
        'default' => '1', 
        'sanitize_callback' => 'is_int'
        )
    );
    $wp_customize->add_control('uu2014_display_comments_posts_dropdown', array(
        'label' => __('Display comments on posts?', 'uu2014'),
        'section' => 'uu2014_display_features_section',
        'settings' => 'uu2014_display_comments_posts',
        'type' => 'radio',
        'choices' => array(
            '1' => __('Display', 'uu2014'),
            '0' => __('Hide', 'uu2014'),
        ),
            )
    );
    $wp_customize->add_setting('uu2014_display_comments_images', array(
        'default' => '1', 
        'sanitize_callback' => 'is_int'
        )
    );
    $wp_customize->add_control('uu2014_display_comments_images_dropdown', array(
        'label' => __('Display comments on image pages?', 'uu2014'),
        'section' => 'uu2014_display_features_section',
        'settings' => 'uu2014_display_comments_images',
        'type' => 'radio',
        'choices' => array(
            '1' => __('Display', 'uu2014'),
            '0' => __('Hide', 'uu2014'),
        ),
            )
    );
    $wp_customize->add_setting('uu2014_display_bylines', array(
        'default' => '1', 
        'sanitize_callback' => 'is_int'
        )
    );
    $wp_customize->add_control('uu2014_display_bylines_dropdown', array(
        'label' => __('Display bylines on posts?', 'uu2014'),
        'section' => 'uu2014_display_features_section',
        'settings' => 'uu2014_display_bylines',
        'type' => 'radio',
        'choices' => array(
            '1' => __('Display', 'uu2014'),
            '0' => __('Hide', 'uu2014'),
        ),
            )
    );
    /* UU 2014 - Image Selection
      ========================================================================== */
    $wp_customize->add_section('uu2014_choose_images_section', array(
        'title' => __('UU 2014 - Image Selection', 'uu2014'),
        'priority' => 100030,
        'description' => __('You can choose what style of UU image to display in the theme.', 'uu2014')
    ));
    $wp_customize->add_setting('uu2014_title_image', array(
        'default' => 'chalice.png', 
        'sanitize_callback' => 'sanitize_file_name'
        )
    );
    $wp_customize->add_control('uu2014_title_image_dropdown', array(
        'label' => __('Which image should be displayed near the title?', 'uu2014'),
        'section' => 'uu2014_choose_images_section',
        'settings' => 'uu2014_title_image',
        'type' => 'select',
        'choices' => array(
            'chalice.png' => 'Silver Chalice',
            'Symbol_Metal_77_110.png' => __('Silver UUA Symbol', 'uu2014'),
            'Symbol_Metal_77_71.png' => __('Smaller Silver UUA Symbol', 'uu2014'),
            'Symbol_Gradient_77_110.png' => __('Red UUA Symbol', 'uu2014'),
            'Symbol_Gradient_77_71.png' => __('Smaller Red UUA Symbol', 'uu2014'),
        ),
            )
    );
    $wp_customize->add_setting('uu2014_footer_image', array(
        'default' => 'chalice-watermark-dark.gif', 
        'sanitize_callback' => 'sanitize_file_name'
        )
    );
    $wp_customize->add_control('uu2014_footer_image_dropdown', array(
        'label' => __('Which image should be displayed in the footer?', 'uu2014'),
        'section' => 'uu2014_choose_images_section',
        'settings' => 'uu2014_footer_image',
        'type' => 'select',
        'choices' => array(
            'chalice-watermark-dark.gif' => __('Dark Chalice', 'uu2014'),
            'UUA_Symbol_dark_148_200.png' => __('Dark UUA Symbol', 'uu2014'),
        ),
            )
    );
    $wp_customize->add_setting('uu2014_favicon', array(
        'default' => 'favicon.ico', 
        'sanitize_callback' => 'sanitize_file_name'
        )
    );
    $wp_customize->add_control('uu2014_favicon_dropdown', array(
        'label' => __('Which image should be used for the website icon(favicon)?', 'uu2014'),
        'section' => 'uu2014_choose_images_section',
        'settings' => 'uu2014_favicon',
        'type' => 'select',
        'choices' => array(
            'favicon.ico' => __('New Red UUA Symbol', 'uu2014'),
            'chalice-favicon.ico' => __('Previous Chalice UUA Symbol', 'uu2014'),
        ),
            )
    );
    /* ========================================================================== */
}

add_action('customize_register', 'uu2014_customize_register');

//We have a small amount of dynamic CSS that is output in the header
function uu2014_customize_css()
{ ?>
<style type="text/css" id="uu2014_customize_css">
.main-navigation  { max-width: <?php echo get_theme_mod('uu2014_menu_width', '1200px'); ?>; }
.site .site-header .site-branding  { max-width: <?php echo get_theme_mod('uu2014_header_width', '1200px'); ?>; }
.site .site-content { max-width: <?php echo get_theme_mod('uu2014_page_width', '1200px'); ?>; }
div.footer-widget-area { max-width: <?php echo get_theme_mod('uu2014_footer_widget_width', '1200px'); ?>; }
div.header-widget-area { max-width: <?php echo get_theme_mod('uu2014_header_width', '1200px'); ?>; }
.site .site-header {
  line-height: 0;
  color: #fff;
  }
.site .site-content { background-image: url(<?php echo get_template_directory_uri() . '/images/img-noise-500x500.png'; ?>); }
.site .site-content { background: rgb(255, 255, 255); background-color: rgba(255, 255, 255, .9); ?>); }
<?php if (!get_theme_mod('uu2014_display_title_image', 1)) : ?>
    #chalice { display: none; }
    .site .site-header .site-branding .site-title { padding: 0; }
    .site .site-header .site-branding .site-description { padding: 0; }
<?php endif; ?>
<?php if (get_theme_mod('uu2014_display_footer_image', 1)) : ?>
    .site .site-footer { background-image: url(<?php echo get_template_directory_uri() . '/images/' . get_theme_mod('uu2014_footer_image', 'chalice-watermark-dark.gif'); ?>); }
<?php else : ?>
    .site .site-footer { background-image: none; }
<?php endif; ?>
<?php if (!get_theme_mod('uu2014_display_sidebar_widgets', 1)) : ?>
    .site .site-content .content-area .site-main { margin: 0; }
    .site .site-content { background-size: 0%; }
    #secondary { display: none; }
<?php endif; ?>
</style>
<?php }
add_action( 'wp_head', 'uu2014_customize_css');

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function uu2014_customize_preview_js() {
    wp_enqueue_script('uu2014_customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), '20130508', true);
}

add_action('customize_preview_init', 'uu2014_customize_preview_js');
