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
    /* Content Width
      ========================================================================== */
    $wp_customize->add_section('uu2014_content_width_section', array(
        'title' => __('Content Width', 'uu2014'),
        'priority' => 1001,
        'description' => __('The content width sets the maximum allowed width for any content in the theme, like oEmbeds and images added to posts', 'uu2014')
    ));
    $wp_customize->add_setting('uu2014_content_width', array('default' => '720'));
    $wp_customize->add_control('uu2014_content_width_textfield', array(
        'label' => __('Content Width', 'uu2014'),
        'section' => 'uu2014_content_width_section',
        'settings' => 'uu2014_content_width'
            )
    );
    /* Header Image Slideshow
      ========================================================================== */
    $terms = get_terms('slideshow', '');
    if (!is_wp_error($terms)) {
        $wp_customize->add_section('meter_slides_section', array(
            'title' => __('Header Image Slideshow', 'uu2014'),
            'priority' => 1002,
            'description' => __('You can choose a slideshow from the Meteor Slides plugin to display at the top of every page instead of a static header image. This setting has no effect if the plugin is not activated.', 'uu2014')
        ));
        $wp_customize->add_setting('header_slideshow_id', array('default' => '-1'));
        $meter_slides_options = array('-1' => 'None');
        foreach ($terms as $term) {
            $meter_slides_options[$term->term_id] = $term->name;
        }
        $wp_customize->add_control('meter_slides_dropdown', array(
            'label' => __('Header Image Slideshow', 'uu2014'),
            'section' => 'meter_slides_section',
            'settings' => 'header_slideshow_id',
            'type' => 'select',
            'choices' => $meter_slides_options,
                )
        );
    }
    /* Front Page News Slideshow
      ========================================================================== */
    $wp_customize->add_section('fa_slides_section', array(
        'title' => __('Front Page News Slideshow', 'uu2014'),
        'priority' => 1003,
        'description' => __('You can choose a slideshow from the Featured Articles plugin to display on the front page of the of the website. This setting has no effect if the plugin is not activated.', 'uu2014')
    ));
    $wp_customize->add_setting('featured_articles_id', array('default' => '-1'));
    $fa_slides_options = array('-1' => 'None');
    $args = array('numberposts' => '-1', 'post_type' => 'fa_slider');
    $posts = get_posts($args);
    foreach ($posts as $post) {
        $fa_slides_options[$post->ID] = $post->post_title;
    }
    $wp_customize->add_control('fa_slides_dropdown', array(
        'label' => __('Front Page News Slideshow', 'uu2014'),
        'section' => 'fa_slides_section',
        'settings' => 'featured_articles_id',
        'type' => 'select',
        'choices' => $fa_slides_options,
            )
    );
    /* Display Floating Widget Area
      ========================================================================== */
    $wp_customize->add_section('uu2014_display_floating_widgets_section', array(
        'title' => __('Floating Widget Area', 'uu2014'),
        'priority' => 1004,
        'description' => __('The theme can display a floating widget area to the right of pages and individual posts. It will hide the widget area if the page is to narrow.', 'uu2014')
    ));
    $wp_customize->add_setting('uu2014_display_floating_widgets', array('default' => '1'));
    $wp_customize->add_control('uu2014_display_floating_dropdown', array(
        'label' => __('Display floating sharing widgets?', 'uu2014'),
        'section' => 'uu2014_display_floating_widgets_section',
        'settings' => 'uu2014_display_floating_widgets',
        'type' => 'radio',
        'choices' => array(
            '1' => 'Yes',
            '0' => 'No',
        ),
            )
    );
    $wp_customize->add_setting('uu2014_floating_widgets_min_width', array('default' => '1300'));
    $wp_customize->add_control('uu2014_floating_min_width_textfield', array(
        'label' => __('Minimum width in pixels required to show floating widget area?', 'uu2014'),
        'section' => 'uu2014_display_floating_widgets_section',
        'settings' => 'uu2014_floating_widgets_min_width'
            )
    );
    /* Display Comments
      ========================================================================== */
    $wp_customize->add_section('uu2014_display_comments_section', array(
        'title' => __('Comments', 'uu2014'),
        'priority' => 1005,
        'description' => __('The theme can globally hide all visual traces of comments.  WordPress normally allows comments to be disabled per page/post.  If you disable comments here the "Comments are disabled" messages will not be displayed.', 'uu2014')
    ));
    $wp_customize->add_setting('uu2014_display_comments_pages', array('default' => '1'));
    $wp_customize->add_control('uu2014_display_comments_pages_dropdown', array(
        'label' => __('Display comments on pages?', 'uu2014'),
        'section' => 'uu2014_display_comments_section',
        'settings' => 'uu2014_display_comments_pages',
        'type' => 'radio',
        'choices' => array(
            '1' => 'Yes',
            '0' => 'No',
        ),
            )
    );
    $wp_customize->add_setting('uu2014_display_comments_posts', array('default' => '1'));
    $wp_customize->add_control('uu2014_display_comments_posts_dropdown', array(
        'label' => __('Display comments on posts?', 'uu2014'),
        'section' => 'uu2014_display_comments_section',
        'settings' => 'uu2014_display_comments_posts',
        'type' => 'radio',
        'choices' => array(
            '1' => 'Yes',
            '0' => 'No',
        ),
            )
    );
    $wp_customize->add_setting('uu2014_display_comments_images', array('default' => '1'));
    $wp_customize->add_control('uu2014_display_comments_images_dropdown', array(
        'label' => __('Display comments on image pages?', 'uu2014'),
        'section' => 'uu2014_display_comments_section',
        'settings' => 'uu2014_display_comments_images',
        'type' => 'radio',
        'choices' => array(
            '1' => 'Yes',
            '0' => 'No',
        ),
            )
    );
    /* Display By-Lines
      ========================================================================== */
    $wp_customize->add_section('uu2014_display_bylines_section', array(
        'title' => __('By-Lines', 'uu2014'),
        'priority' => 1005,
        'description' => __('You can choose whether to display a byline for the author of each post.', 'uu2014')
    ));
    $wp_customize->add_setting('uu2014_display_bylines', array('default' => '1'));
    $wp_customize->add_control('uu2014_display_bylines_dropdown', array(
        'label' => __('Display bylines on posts?', 'uu2014'),
        'section' => 'uu2014_display_bylines_section',
        'settings' => 'uu2014_display_bylines',
        'type' => 'radio',
        'choices' => array(
            '1' => 'Yes',
            '0' => 'No',
        ),
            )
    );
    /* UU Image Selection
      ========================================================================== */
    $wp_customize->add_section('uu2014_choose_images_section', array(
        'title' => __('UU Images', 'uu2014'),
        'priority' => 1006,
        'description' => __('You can choose what style of UU image to display in the theme.', 'uu2014')
    ));
    $wp_customize->add_setting('uu2014_title_image', array('default' => 'chalice.png'));
    $wp_customize->add_control('uu2014_title_image_dropdown', array(
        'label' => __('Which image should be displayed near the title?', 'uu2014'),
        'section' => 'uu2014_choose_images_section',
        'settings' => 'uu2014_title_image',
        'type' => 'select',
        'choices' => array(
            'chalice.png' => 'Silver Chalice',
            'Symbol_Metal_77_110.png' => 'Silver UUA Symbol',
      'Symbol_Metal_77_71.png' => 'Smaller Silver UUA Symbol',
            'Symbol_Gradient_77_110.png' => 'Red UUA Symbol',
      'Symbol_Gradient_77_71.png' => 'Smaller Red UUA Symbol',
        ),
            )
    );
    $wp_customize->add_setting('uu2014_footer_image', array('default' => 'chalice-watermark-dark.gif'));
    $wp_customize->add_control('uu2014_footer_image_dropdown', array(
        'label' => __('Which image should be displayed in the footer?', 'uu2014'),
        'section' => 'uu2014_choose_images_section',
        'settings' => 'uu2014_footer_image',
        'type' => 'select',
        'choices' => array(
            'chalice-watermark-dark.gif' => 'Dark Chalice',
            'UUA_Symbol_dark_148_200.png' => 'Dark UUA Symbol',
        ),
            )
    );
    $wp_customize->add_setting('uu2014_favicon', array('default' => false));
    $wp_customize->add_control('uu2014_favicon_dropdown', array(
        'label' => __('Which image should be used for the website icon? (favicon)', 'uu2014'),
        'section' => 'uu2014_choose_images_section',
        'settings' => 'uu2014_favicon',
        'type' => 'select',
        'choices' => array(
            false => 'Use the default image at /favicon.ico',
            'favicon.ico' => 'New Red UUA Symbol',
            'chalice-favicon.ico' => 'Previous Chalice UUA Symbol',
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
.site .site-content { background-image: url(<?php echo apply_filters('jetpack_photon_url', get_template_directory_uri() . '/images/img-noise-500x500.png'); ?>); }
.site .site-footer { background-image: url(<?php echo apply_filters('jetpack_photon_url', get_template_directory_uri() . '/images/' . get_theme_mod('uu2014_footer_image', 'chalice-watermark-dark.gif') ); ?>); }
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
