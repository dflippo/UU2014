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
    $wp_customize->get_setting('blogname')->transport         = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';
    /* Content Width
      ========================================================================== */
    $wp_customize->add_section('uu2014_content_width_section', array(
      'title'       => __('Content Width', 'uu2014'),
      'priority'    => 1001,
      'description' => __('The content width sets the maximum allowed width for any content in the theme, like oEmbeds and images added to posts', 'uu2014')
    ));
    $wp_customize->add_setting('uu2014_content_width', array('default' => '720'));
    $wp_customize->add_control('uu2014_content_width_textfield', array(
      'label'    => __('Content Width', 'uu2014'),
      'section'  => 'uu2014_content_width_section',
      'settings' => 'uu2014_content_width'
      )
    );
    /* Header Image Slideshow
      ========================================================================== */
    $wp_customize->add_section('meter_slides_section', array(
      'title'       => __('Header Image Slideshow', 'uu2014'),
      'priority'    => 1002,
      'description' => __('You can choose a slideshow from the Meteor Slides plugin to display at the top of every page instead of a static header image. This setting has no effect if the plugin is not activated.', 'uu2014')
    ));
    $wp_customize->add_setting('header_slideshow_id', array('default' => '-1'));
    $meter_slides_options                                     = array('-1' => 'None');
    $terms                                                    = get_terms('slideshow', '');
    foreach ($terms as $term) {
        $meter_slides_options[$term->term_id] = $term->name;
    }
    $wp_customize->add_control('meter_slides_dropdown', array(
      'label'    => __('Header Image Slideshow', 'uu2014'),
      'section'  => 'meter_slides_section',
      'settings' => 'header_slideshow_id',
      'type'     => 'select',
      'choices'  => $meter_slides_options,
      )
    );
    /* Front Page News Slideshow
      ========================================================================== */
    $wp_customize->add_section('fa_slides_section', array(
      'title'       => __('Front Page News Slideshow', 'uu2014'),
      'priority'    => 1003,
      'description' => __('You can choose a slideshow from the Featured Articles plugin to display on the front page of the of the website. This setting has no effect if the plugin is not activated.', 'uu2014')
    ));
    $wp_customize->add_setting('featured_articles_id', array('default' => '-1'));
    $fa_slides_options = array('-1' => 'None');
    $args              = array('numberposts' => '-1', 'post_type' => 'fa_slider');
    $posts             = get_posts($args);
    foreach ($posts as $post) {
        $fa_slides_options[$post->ID] = $post->post_title;
    }
    $wp_customize->add_control('fa_slides_dropdown', array(
      'label'    => __('Front Page News Slideshow', 'uu2014'),
      'section'  => 'fa_slides_section',
      'settings' => 'featured_articles_id',
      'type'     => 'select',
      'choices'  => $fa_slides_options,
      )
    );
    /* Display Floating Widget Area
      ========================================================================== */
    $wp_customize->add_section('uu2014_display_floating_widgets_section', array(
      'title'       => __('Floating Widget Area', 'uu2014'),
      'priority'    => 1004,
      'description' => __('The theme can display a floating widget area to the right of pages and individual posts. It will hide the widget area if the page is to narrow.', 'uu2014')
    ));
    $wp_customize->add_setting('uu2014_display_floating_widgets', array('default' => '1'));
    $wp_customize->add_control('uu2014_display_floating_dropdown', array(
      'label'    => __('Display floating sharing widgets?', 'uu2014'),
      'section'  => 'uu2014_display_floating_widgets_section',
      'settings' => 'uu2014_display_floating_widgets',
      'type'     => 'radio',
      'choices'  => array(
        '1' => 'Yes',
        '0' => 'No',
      ),
      )
    );
    $wp_customize->add_setting('uu2014_floating_widgets_min_width', array('default' => '1300'));
    $wp_customize->add_control('uu2014_floating_min_width_textfield', array(
      'label'    => __('Minimum width in pixels required to show floating widget area?', 'uu2014'),
      'section'  => 'uu2014_display_floating_widgets_section',
      'settings' => 'uu2014_floating_widgets_min_width'
      )
    );
    $wp_customize->add_setting('uu2014_floating_widgets_width', array('default' => '70'));
    $wp_customize->add_control('uu2014_floating_widgets_width_textfield', array(
      'label'    => __('Width in pixels for the floating widget area?', 'uu2014'),
      'section'  => 'uu2014_display_floating_widgets_section',
      'settings' => 'uu2014_floating_widgets_width'
      )
    );
    /* ========================================================================== */
}

add_action('customize_register', 'uu2014_customize_register');

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function uu2014_customize_preview_js() {
    wp_enqueue_script('uu2014_customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), '20130508', true);
}

add_action('customize_preview_init', 'uu2014_customize_preview_js');
