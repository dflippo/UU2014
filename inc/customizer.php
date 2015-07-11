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

    /* Theme Reset
      ========================================================================== */
    $wp_customize->add_section('uu2014_theme_reset_section', array(
        'title' => __('UU 2014 - Reset Theme', 'uu2014'),
        'priority' => 10007,
        'description' => __('You can reset all the customization settings for the UU2014 theme sections below but this will not reset standard WordPress settings such as your title or widget areas.  Please note that you must exit and re-enter the customizer after making this change before you will be able to change other settings.', 'uu2014')
    ));
	// It is important that the default is false or you would reset every time
    $wp_customize->add_setting('uu2014_theme_reset_setting', array(
        'default' => '0', 
        'sanitize_callback' => 'uu2014_sanitize_true_false'
        )
    );
    $wp_customize->add_control('uu2014_theme_reset_button', array(
        'label' => __('Reset all customizations for the UU2014 theme?', 'uu2014'),
        'section' => 'uu2014_theme_reset_section',
        'settings' => 'uu2014_theme_reset_setting',
        'type' => 'radio',
        'choices' => array(
				'1' => __('Yes, please reset immediately', 'uu2014'),
				'0' => __('Not right now', 'uu2014'),
			),
        )
    );


    /* Font Sizes
      ========================================================================== */
    $wp_customize->add_section('uu2014_font_size_section', array(
        'title' => __('UU 2014 - Font Sizes', 'uu2014'),
        'priority' => 10008,
        'description' => __('You can customize the font sizes for different sections of the theme below', 'uu2014')
    ));
    $uu2014_font_size_settings = uu2014_get_font_size_settings();
    foreach ( $uu2014_font_size_settings as $font_size_setting => $value ) {
        $wp_customize->add_setting($font_size_setting, array(
            'default' => $value['font-size-default'], 
            'sanitize_callback' => 'uu2014_sanitize_font_size'
            )
        );
        $wp_customize->add_control($font_size_setting . '_dropdown', array(
            'label' => $value['label'],
            'section' => 'uu2014_font_size_section',
            'settings' => $font_size_setting,
            'type' => 'select',
            'choices' => uu2014_get_font_size_choices()
        ));
    }

    /* Mobile Font Sizes
      ========================================================================== */
    $wp_customize->add_section('uu2014_mobile_font_size_section', array(
        'title' => __('UU 2014 - Smaller Device Font Sizes', 'uu2014'),
        'priority' => 10009,
        'description' => __('The sizes below take effect on any screen with up to 782 pixels width', 'uu2014')
    ));
    foreach ( $uu2014_font_size_settings as $font_size_setting => $value ) {
        $wp_customize->add_setting($font_size_setting . '_mobile', array(
            'default' => $value['mobile-font-size-default'], 
            'sanitize_callback' => 'uu2014_sanitize_font_size'
            )
        );
        $wp_customize->add_control($font_size_setting . '_mobile_dropdown', array(
            'label' => $value['label'],
            'section' => 'uu2014_mobile_font_size_section',
            'settings' => $font_size_setting . '_mobile',
            'type' => 'select',
            'choices' => uu2014_get_font_size_choices()
        ));
    }

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
        'sanitize_callback' => 'sanitize_text_field'
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
        'sanitize_callback' => 'sanitize_text_field'
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
        'sanitize_callback' => 'uu2014_sanitize_true_false'
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
        'sanitize_callback' => 'uu2014_sanitize_true_false'
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
        'sanitize_callback' => 'uu2014_sanitize_true_false'
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
        'sanitize_callback' => 'uu2014_sanitize_true_false'
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
        'sanitize_callback' => 'uu2014_sanitize_true_false'
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
        'sanitize_callback' => 'uu2014_sanitize_true_false'
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
        'sanitize_callback' => 'uu2014_sanitize_true_false'
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
        'sanitize_callback' => 'uu2014_sanitize_true_false'
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
        'sanitize_callback' => 'uu2014_sanitize_true_false'
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
        'sanitize_callback' => 'uu2014_sanitize_true_false'
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
        'sanitize_callback' => 'uu2014_sanitize_true_false'
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
    $wp_customize->add_setting('uu2014_display_posted_on', array(
        'default' => '1', 
        'sanitize_callback' => 'uu2014_sanitize_true_false'
        )
    );
    $wp_customize->add_control('uu2014_display_posted_on_dropdown', array(
        'label' => __('Display "Posted on ____" on posts?', 'uu2014'),
        'section' => 'uu2014_display_features_section',
        'settings' => 'uu2014_display_posted_on',
        'type' => 'radio',
        'choices' => array(
            '1' => __('Display', 'uu2014'),
            '0' => __('Hide', 'uu2014'),
        ),
            )
    );
    $wp_customize->add_setting('uu2014_display_post_format', array(
        'default' => '1', 
        'sanitize_callback' => 'uu2014_sanitize_true_false'
        )
    );
    $wp_customize->add_control('uu2014_display_post_format_dropdown', array(
        'label' => __('Display post format name on posts?  (Aside, Image, Video, Quote, Link)', 'uu2014'),
        'section' => 'uu2014_display_features_section',
        'settings' => 'uu2014_display_post_format',
        'type' => 'radio',
        'choices' => array(
            '1' => __('Display', 'uu2014'),
            '0' => __('Hide', 'uu2014'),
        ),
            )
    );
    $wp_customize->add_setting('uu2014_display_categories', array(
        'default' => '1', 
        'sanitize_callback' => 'uu2014_sanitize_true_false'
        )
    );
    $wp_customize->add_control('uu2014_display_categories_dropdown', array(
        'label' => __('Display categories on posts?', 'uu2014'),
        'section' => 'uu2014_display_features_section',
        'settings' => 'uu2014_display_categories',
        'type' => 'radio',
        'choices' => array(
            '1' => __('Display', 'uu2014'),
            '0' => __('Hide', 'uu2014'),
        ),
            )
    );
    $wp_customize->add_setting('uu2014_display_tags', array(
        'default' => '1', 
        'sanitize_callback' => 'uu2014_sanitize_true_false'
        )
    );
    $wp_customize->add_control('uu2014_display_tags_dropdown', array(
        'label' => __('Display tags on posts?', 'uu2014'),
        'section' => 'uu2014_display_features_section',
        'settings' => 'uu2014_display_tags',
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
        'default' => 'Symbol_Gradient_77_110.png', 
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
        'default' => 'UUA_Symbol_dark_148_200.png', 
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


// If the user clicked the reset button, remove all theme modifications
// It is important that the default is false or you would reset every time
if (get_theme_mod('uu2014_theme_reset_setting', 0)){
	remove_theme_mods();
}

//We have a small amount of dynamic CSS that is output in the header
function uu2014_customize_css()
{ ?>
<style type="text/css" id="uu2014_customize_css">
<?php 
$uu2014_font_size_settings = uu2014_get_font_size_settings();  
foreach ( $uu2014_font_size_settings as $font_size_setting => $value ) { ?>
	<?php echo $value['selector']; ?> { <?php echo get_theme_mod($font_size_setting, $value['font-size-default']); ?> }
<?php } ?>
@media screen and (max-width: 782px) {
<?php foreach ( $uu2014_font_size_settings as $font_size_setting => $value ) { ?>
	<?php echo $value['selector']; ?> { <?php echo get_theme_mod($font_size_setting . '_mobile', $value['mobile-font-size-default']); ?> }
<?php } ?>
}
div.main-nav-menu { max-width: <?php echo get_theme_mod('uu2014_menu_width', '1200px'); ?>; }
div.site-branding { max-width: <?php echo get_theme_mod('uu2014_header_width', '1200px'); ?>; }
div.site-content { max-width: <?php echo get_theme_mod('uu2014_page_width', '1200px'); ?>; }
div.footer-widget-area { max-width: <?php echo get_theme_mod('uu2014_footer_widget_width', '1200px'); ?>; }
.header-widget-area { max-width: <?php echo get_theme_mod('uu2014_header_width', '1200px'); ?>; }
<?php if (!get_theme_mod('uu2014_display_title_image', 1)) : ?>
#site-title-image { display: none; }
.site-title { padding: 0; }
.site-description { padding: 0; }
<?php endif; ?>
<?php if (get_theme_mod('uu2014_display_footer_image', 1)) : ?>
.site-footer { background-image: url(<?php echo get_template_directory_uri() . '/images/' . get_theme_mod('uu2014_footer_image', 'UUA_Symbol_dark_148_200.png'); ?>); }
<?php else : ?>
.site-footer { background-image: none; }
<?php endif; ?>
<?php if (!get_theme_mod('uu2014_display_sidebar_widgets', 1)) : ?>
.site-main { margin: 0; }
.site-content { background-size: 0%; }
#secondary { display: none; }
<?php endif; ?>
<?php if (!get_theme_mod('uu2014_display_bylines', 1)) : ?>
.byline { display: none !important; }
<?php endif; ?>
<?php if (!get_theme_mod('uu2014_display_posted_on', 1)) : ?>
.posted-on { display: none !important; }
<?php endif; ?>
<?php if (!get_theme_mod('uu2014_display_post_format', 1)) : ?>
.post-format { display: none !important; }
<?php endif; ?>
<?php if (!get_theme_mod('uu2014_display_categories', 1)) : ?>
.cat-links { display: none !important; }
<?php endif; ?>
<?php if (!get_theme_mod('uu2014_display_tags', 1)) : ?>
.tags-links { display: none !important; }
<?php endif; ?>
@media print {
	.site-branding:before {
		content: url(https://chart.googleapis.com/chart?cht=qr&chs=150x150&chl=http://<?php the_permalink(); ?>&choe=UTF-8);
		position: absolute;
		z-index: 9999;
		top: 0;
		right: 0;
		width: 150px;
		margin: 0;
   }
}
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

function uu2014_get_font_size_choices() {
    return array(
        'font-size: 0px; font-size: 0.0rem;'  => '0',
        'font-size: 1px; font-size: 0.1rem;'  => '1',
        'font-size: 2px; font-size: 0.2rem;'  => '2',
        'font-size: 3px; font-size: 0.3rem;'  => '3',
        'font-size: 4px; font-size: 0.4rem;'  => '4',
        'font-size: 5px; font-size: 0.5rem;'  => '5',
        'font-size: 6px; font-size: 0.6rem;'  => '6',
        'font-size: 7px; font-size: 0.7rem;'  => '7',
        'font-size: 8px; font-size: 0.8rem;'  => '8',
        'font-size: 9px; font-size: 0.9rem;'  => '9',
        'font-size: 10px; font-size: 1.0rem;' => '10',
        'font-size: 11px; font-size: 1.1rem;' => '11',
        'font-size: 12px; font-size: 1.2rem;' => '12',
        'font-size: 13px; font-size: 1.3rem;' => '13',
        'font-size: 14px; font-size: 1.4rem;' => '14',
        'font-size: 15px; font-size: 1.5rem;' => '15',
        'font-size: 16px; font-size: 1.6rem;' => '16',
        'font-size: 17px; font-size: 1.7rem;' => '17',
        'font-size: 18px; font-size: 1.8rem;' => '18',
        'font-size: 19px; font-size: 1.9rem;' => '19',
        'font-size: 20px; font-size: 2.0rem;' => '20',
        'font-size: 21px; font-size: 2.1rem;' => '21',
        'font-size: 22px; font-size: 2.2rem;' => '22',
        'font-size: 23px; font-size: 2.3rem;' => '23',
        'font-size: 24px; font-size: 2.4rem;' => '24',
        'font-size: 25px; font-size: 2.5rem;' => '25',
        'font-size: 26px; font-size: 2.6rem;' => '26',
        'font-size: 27px; font-size: 2.7rem;' => '27',
        'font-size: 28px; font-size: 2.8rem;' => '28',
        'font-size: 29px; font-size: 2.9rem;' => '29',
        'font-size: 30px; font-size: 3.0rem;' => '30',
        'font-size: 31px; font-size: 3.1rem;' => '31',
        'font-size: 32px; font-size: 3.2rem;' => '32',
        'font-size: 33px; font-size: 3.3rem;' => '33',
        'font-size: 34px; font-size: 3.4rem;' => '34',
        'font-size: 35px; font-size: 3.5rem;' => '35',
        'font-size: 36px; font-size: 3.6rem;' => '36',
        'font-size: 37px; font-size: 3.7rem;' => '37',
        'font-size: 38px; font-size: 3.8rem;' => '38',
        'font-size: 39px; font-size: 3.9rem;' => '39',
        'font-size: 40px; font-size: 4.0rem;' => '40',
        'font-size: 41px; font-size: 4.1rem;' => '41',
        'font-size: 42px; font-size: 4.2rem;' => '42',
        'font-size: 43px; font-size: 4.3rem;' => '43',
        'font-size: 44px; font-size: 4.4rem;' => '44',
        'font-size: 45px; font-size: 4.5rem;' => '45',
        'font-size: 46px; font-size: 4.6rem;' => '46',
        'font-size: 47px; font-size: 4.7rem;' => '47',
        'font-size: 48px; font-size: 4.8rem;' => '48',
        'font-size: 49px; font-size: 4.9rem;' => '49',
        'font-size: 50px; font-size: 5.0rem;' => '50',
    );
}
if ( ! function_exists( 'uu2014_sanitize_font_size' ) ) :
/**
 * Sanitization callback for font sizes.
 *
 * @param string $value Font Size value.
 * @return string Font Size.
 */
function uu2014_sanitize_font_size( $value ) {
	$font_sizes = uu2014_get_font_size_choices();

	if ( ! array_key_exists( $value, $font_sizes ) ) {
		return 'font-size: 16px; font-size: 1.6rem;';
	}
	return $value;
}
endif;

if ( ! function_exists( 'uu2014_sanitize_true_false' ) ) :
/**
 * Sanitization callback for font sizes.
 *
 * @param string $value Font Size value.
 * @return string Font Size.
 */
function uu2014_sanitize_true_false( $value ) {
	if ( $value == 1 ) {
		return 1;
	} 
	return 0;
}
endif;

if ( ! function_exists( 'uu2014_get_font_size_settings' ) ) :
/**
 * List of default font size settings for theme
 *
 * @return Array of font_setting -> value['selector', 'font-size-default', 'label']
 */
function uu2014_get_font_size_settings() {
    $uu2014_font_size_settings = array(
        'uu2014_default_font_size' => array(
            'label' => __('Default', 'uu2014'),
            'selector' => 'body, button, input, select, textarea, p', 
            'font-size-default' => 'font-size: 15px; font-size: 1.5rem;', 
            'mobile-font-size-default' => 'font-size: 14px; font-size: 1.4rem;', 
            'font-family-default' => 'Open Sans', 
        ),
        'uu2014_site_title_font_size' => array(
            'label' => __('Site Title', 'uu2014'),
            'selector' => '.site-title a', 
            'font-size-default' => 'font-size: 30px; font-size: 3.0rem;', 
            'mobile-font-size-default' => 'font-size: 20px; font-size: 2.0rem;', 
            'font-family-default' => 'Georgia', 
        ),
        'uu2014_site_description_font_size' => array(
            'label' => __('Site Description', 'uu2014'),
            'selector' => '.site-description', 
            'font-size-default' => 'font-size: 16px; font-size: 1.6rem;', 
            'mobile-font-size-default' => 'font-size: 15px; font-size: 1.5rem;', 
            'font-family-default' => 'Georgia', 
        ),
        'uu2014_main_menu_font_size' => array(
            'label' => __('Main Menu', 'uu2014'),
            'selector' => 'div.main-nav-menu', 
            'font-size-default' => 'font-size: 16px; font-size: 1.6rem;', 
            'mobile-font-size-default' => 'font-size: 15px; font-size: 1.5rem;', 
            'font-family-default' => 'Open Sans', 
        ),
        'uu2014_h1_font_size' => array(
            'label' => __('Heading 1', 'uu2014'),
            'selector' => 'h1', 
            'font-size-default' => 'font-size: 25px; font-size: 2.5rem;', 
            'mobile-font-size-default' => 'font-size: 20px; font-size: 2.0rem;', 
            'font-family-default' => 'Open Sans', 
        ),
        'uu2014_h2_font_size' => array(
            'label' => __('Heading 2', 'uu2014'),
            'selector' => 'h2', 
            'font-size-default' => 'font-size: 20px; font-size: 2.0rem;', 
            'mobile-font-size-default' => 'font-size: 19px; font-size: 1.9rem;', 
            'font-family-default' => 'Open Sans', 
        ),
        'uu2014_h3_font_size' => array(
            'label' => __('Heading 3', 'uu2014'),
            'selector' => 'h3', 
            'font-size-default' => 'font-size: 18px; font-size: 1.8rem;', 
            'mobile-font-size-default' => 'font-size: 18px; font-size: 1.8rem;', 
            'font-family-default' => 'Open Sans', 
        ),
        'uu2014_h4_font_size' => array(
            'label' => __('Heading 4', 'uu2014'),
            'selector' => 'h4', 
            'font-size-default' => 'font-size: 17px; font-size: 1.7rem;', 
            'mobile-font-size-default' => 'font-size: 17px; font-size: 1.7rem;', 
            'font-family-default' => 'Open Sans', 
        ),
        'uu2014_h5_font_size' => array(
            'label' => __('Heading 5', 'uu2014'),
            'selector' => 'h5', 
            'font-size-default' => 'font-size: 16px; font-size: 1.6rem;', 
            'mobile-font-size-default' => 'font-size: 16px; font-size: 1.6rem;', 
            'font-family-default' => 'Open Sans', 
        ),
        'uu2014_h6_font_size' => array(
            'label' => __('Heading 6', 'uu2014'),
            'selector' => 'h6', 
            'font-size-default' => 'font-size: 15px; font-size: 1.5rem;', 
            'mobile-font-size-default' => 'font-size: 15px; font-size: 1.5rem;', 
            'font-family-default' => 'Open Sans', 
        ),
        'uu2014_widget_h1_font_size' => array(
            'label' => __('Widget Heading 1', 'uu2014'),
            'selector' => '.widget-area h1', 
            'font-size-default' => 'font-size: 18px; font-size: 1.8rem;', 
            'mobile-font-size-default' => 'font-size: 15px; font-size: 1.5rem;', 
            'font-family-default' => 'Open Sans', 
        ),
        'uu2014_widget_list_item_font_size' => array(
            'label' => __('Widget List Item', 'uu2014'),
            'selector' => '.widget-area ul a', 
            'font-size-default' => 'font-size: 14px; font-size: 1.4rem;', 
            'mobile-font-size-default' => 'font-size: 14px; font-size: 1.4rem;', 
            'font-family-default' => 'Open Sans', 
        ),
        'uu2014_footer_widget_h1_font_size' => array(
            'label' => __('Footer Widget Heading 1', 'uu2014'),
            'selector' => '.footer-widget-area h1', 
            'font-size-default' => 'font-size: 14px; font-size: 1.4rem;', 
            'mobile-font-size-default' => 'font-size: 14px; font-size: 1.4rem;', 
            'font-family-default' => 'Open Sans', 
        ),
        'uu2014_site_footer_font_size' => array(
            'label' => __('Site Footer', 'uu2014'),
            'selector' => '.site-footer', 
            'font-size-default' => 'font-size: 14px; font-size: 1.4rem;', 
            'mobile-font-size-default' => 'font-size: 14px; font-size: 1.4rem;', 
            'font-family-default' => 'Open Sans', 
        ),
        'uu2014_footer_widget_list_item_font_size' => array(
            'label' => __('Footer Widget List Item', 'uu2014'),
            'selector' => '.footer-widget-area ul ul a, .footer-widget-area ul ul a:link, .footer-widget-area ul ul a:visited', 
            'font-size-default' => 'font-size: 14px; font-size: 1.4rem;', 
            'mobile-font-size-default' => 'font-size: 14px; font-size: 1.4rem;', 
            'font-family-default' => 'Open Sans', 
        ),
        'uu2014_header_widget_h1_font_size' => array(
            'label' => __('Header Widget Heading 1', 'uu2014'),
            'selector' => '.header-widget-area h1', 
            'font-size-default' => 'font-size: 18px; font-size: 1.8rem;', 
            'mobile-font-size-default' => 'font-size: 18px; font-size: 1.8rem;', 
            'font-family-default' => 'Open Sans', 
        ),
        'uu2014_header_widget_list_item_font_size' => array(
            'label' => __('Header Widget List Item', 'uu2014'),
            'selector' => '.header-widget-area ul ul a', 
            'font-size-default' => 'font-size: 14px; font-size: 1.4rem;', 
            'mobile-font-size-default' => 'font-size: 14px; font-size: 1.4rem;', 
            'font-family-default' => 'Open Sans', 
        ),
        'uu2014_featured_articles_title_font_size' => array(
            'label' => __('Featured Articles Lite Slide Title', 'uu2014'),
            'selector' => '.site .FA_overall_container_classic .FA_featured_articles .FA_article .FA_wrap h2 a, .site .fa_slider_simple.default .fa_slide_content h2 a', 
            'font-size-default' => 'font-size: 20px; font-size: 2.0rem;', 
            'mobile-font-size-default' => 'font-size: 16px; font-size: 1.6rem;', 
            'font-family-default' => 'Open Sans', 
        ),
        'uu2014_featured_articles_text_font_size' => array(
            'label' => __('Featured Articles Lite Slide Text', 'uu2014'),
            'selector' => '.site .FA_overall_container_classic .FA_featured_articles .FA_article .FA_wrap p, .site .fa_slider_simple.default .fa_slide_content p', 
            'font-size-default' => 'font-size: 15px; font-size: 1.5rem;', 
            'mobile-font-size-default' => 'font-size: 12px; font-size: 1.2rem;', 
            'font-family-default' => 'Open Sans', 
        ),
    );
    return $uu2014_font_size_settings;
}
endif;

/**
 *  Add theme support for users of the Typecase plugin in the customizer
 */
function uu2014_typecase_theme_support() {
    $uu2014_font_size_settings = uu2014_get_font_size_settings();  
    $uu2014_simple_font_sections = array();
    $uu2014_adv_font_sections = array();
    foreach ( $uu2014_font_size_settings as $font_size_setting => $value ) {
        if(in_array($value['label'], array('Default', 'Site Title', 'Site Description'))){
            $uu2014_simple_font_sections[$font_size_setting] = array(
                'label' => $value['label'],
                'selector' => $value['selector'],
                'default' => $value['font-family-default'],
            );
        } else {
            $uu2014_adv_font_sections[$font_size_setting] = array(
                'label' => $value['label'],
                'selector' => $value['selector'],
                'default' => $value['font-family-default'],
            );
        }
    } 
    add_theme_support( 'typecase', array(
        // array of simple options
        'simple' => $uu2014_simple_font_sections,
        // array of advanced options
        // hidden by default, can be enabled by the user
        'advanced' => array(
            // each array is a customizer section in the theme fonts panel
            'Advanced Font Locations' => $uu2014_adv_font_sections,
        ),
    ) );
}
//'after_setup_theme' is too late so we are calling this now
uu2014_typecase_theme_support();