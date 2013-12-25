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
function uu2014_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
  $wp_customize->add_section( 'uu2014_content_width_section' , array(
    'title'      => __( 'Content Width', 'uu2014' ),
    'priority'   => 35,
    'description' => __('The content width sets the maximum allowed width for any content in the theme, like oEmbeds and images added to posts', 'uu2014')
  ) );
  $wp_customize->add_setting( 'uu2014_content_width', array('default' => '720') );
  $wp_customize->add_control( 'uu2014_content_width_textfield', array(
      'label'    => __( 'Content Width', 'uu2014' ),
      'section'  => 'uu2014_content_width_section',
      'settings' => 'uu2014_content_width'
    ) 
  );
  $wp_customize->add_section( 'uu2014_plugin_integration' , array(
    'title'      => __( 'Plugin Integration', 'uu2014' ),
    'priority'   => 30,
    'description' => __('The UU2014 theme is designed to integrate with several plugins. These settings have no effect if the plugin is not activated.</p>
    <p class="description">You can choose a slideshow from the Meteor Slides plugin to display at the top of every page instead of a static header image.</p>
    <p class="description">You can choose a slideshow from the Featured Articles plugin to display on the front page of the of the website.</p>
    <p class="description">The theme can control the sidebar from the Sharebar plugin. Without this integration the plugin would not consistently display the bar at the correct horizontal and vertical location.', 'uu2014')
  ) );
  $wp_customize->add_setting( 'header_slideshow_id', array('default' => '-1') );
  $wp_customize->add_setting( 'featured_articles_id', array('default' => '-1') );
  $wp_customize->add_setting( 'display_sharebar', array('default' => '1') );
  //uu2014_content_width
  $options = array( '-1' => 'None' );
  $terms = get_terms('slideshow', '');
  foreach ( $terms as $term ) {
    $options[$term->term_id] = $term->name;
  }
  $wp_customize->add_control( 'meter_slides_dropdown', array(
      'label'    => __( 'Header Image Slideshow', 'uu2014' ),
      'section'  => 'uu2014_plugin_integration',
      'settings' => 'header_slideshow_id',
      'type'     => 'select',
      'choices'  => $options,
    ) 
  );
  $options = array( '-1' => 'None' );
  $args = array('numberposts' => '-1', 'post_type' => 'fa_slider');
  $posts = get_posts($args);
  foreach ( $posts as $post ) {
    $options[$post->ID] = $post->post_title;
  }
  $wp_customize->add_control( 'fa_slides_dropdown', array(
      'label'    => __( 'Front Page News Slideshow', 'uu2014' ),
      'section'  => 'uu2014_plugin_integration',
      'settings' => 'featured_articles_id',
      'type'     => 'select',
      'choices'  => $options,
    ) 
  );
  $wp_customize->add_control( 'display_sharebar_dropdown', array(
    'label'    => __( 'Display Sharebar', 'uu2014' ),
    'section'  => 'uu2014_plugin_integration',
    'settings' => 'display_sharebar',
    'type'     => 'radio',
    'choices'  => array(
        '1' => 'Yes',
        '0' => 'No',
      ),
    ) 
  );
}
add_action( 'customize_register', 'uu2014_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function uu2014_customize_preview_js() {
	wp_enqueue_script( 'uu2014_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'uu2014_customize_preview_js' );
