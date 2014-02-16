<?php

/**
 * UU2014 functions and definitions
 *
 * @package UU2014
 * This theme uses the WP Customizer, make sure to go into Appearance -> Customize
 */
/**
 * The content width sets the maximum allowed width for any content in the theme, like oEmbeds and images added to posts
 * It is set to 720 pixels by default but you can change this in the customizer
 */
if (!isset($content_width)) {
    $content_width = get_theme_mod('uu2014_content_width', 720);
} /* pixels */

if (!function_exists('uu2014_setup')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which runs
     * before the init hook. The init hook is too late for some features, such as indicating
     * support post thumbnails.
     */
    function uu2014_setup() {

        /**
         * Make theme available for translation
         * Translations can be filed in the /languages/ directory
         * If you're building a theme based on UU2014, use a find and replace
         * to change 'uu2014' to the name of your theme in all the template files
         */
        load_theme_textdomain('uu2014', get_template_directory() . '/languages');

        /**
         * Add default posts and comments RSS feed links to head
         */
        add_theme_support('automatic-feed-links');

        /**
         * Enable support for Post Thumbnails on posts and pages
         *
         * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        add_theme_support('post-thumbnails');

        /**
         * This theme uses wp_nav_menu() in one location.
         */
        register_nav_menus(array(
          'primary' => __('Primary Menu', 'uu2014'),
        ));

        /**
         * Enable support for Post Formats
         */
        add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link'));

        /**
         * Setup the WordPress core custom background feature.
         */
        add_theme_support('custom-background', apply_filters('uu2014_custom_background_args', array(
          'default-color' => '6a8999',
          'default-image' => '',
        )));
        // Some custom headers packaged with the theme
        register_default_headers(array(
          'bowlinggreen'  => array(
            'url'           => '%s/images/headers/uubgr.jpg',
            'thumbnail_url' => '%s/images/headers/uubgr-thumbnail.jpg',
            'description'   => __('Bowling Green stained glass', 'uu2014')
          ),
          'goldenbridge'  => array(
            'url'           => '%s/images/headers/header.jpg',
            'thumbnail_url' => '%s/images/headers/header-thumbnail.jpg',
            'description'   => __('Golden Bridge', 'uu2014')
          ),
          'biblepew'      => array(
            'url'           => '%s/images/headers/bible-pew.jpg',
            'thumbnail_url' => '%s/images/headers/bible-pew-thumnail.jpg',
            'description'   => __('Bible on a Pew', 'uu2014')
          ),
          'candles'       => array(
            'url'           => '%s/images/headers/candles.jpg',
            'thumbnail_url' => '%s/images/headers/candles-thumbnail.jpg',
            'description'   => __('Candles', 'uu2014')
          ),
          'stainedglass2' => array(
            'url'           => '%s/images/headers/stained-glass2.jpg',
            'thumbnail_url' => '%s/images/headers/stained-glass2-thumbnail.jpg',
            'description'   => __('Stained Glass 2', 'uu2014')
          ),
          'stainedglass'  => array(
            'url'           => '%s/images/headers/stained-glass.jpg',
            'thumbnail_url' => '%s/images/headers/stained-glass-thumbnail.jpg',
            'description'   => __('Stained Glass 1', 'uu2014')
          ),
          'sky'           => array(
            'url'           => '%s/images/headers/sky.jpg',
            'thumbnail_url' => '%s/images/headers/sky-thumbnail.jpg',
            'description'   => __('Sky', 'uu2014')
          ),
          'grunge'        => array(
            'url'           => '%s/images/headers/grunge.jpg',
            'thumbnail_url' => '%s/images/headers/grunge-thumbnail.jpg',
            'description'   => __('Grunge', 'uu2014')
          ),
          'grunge2'       => array(
            'url'           => '%s/images/headers/grunge2.jpg',
            'thumbnail_url' => '%s/images/headers/grunge2-thumbnail.jpg',
            'description'   => __('Grunge 2', 'uu2014')
          ),
          'cherrypath'    => array(
            'url'           => '%s/images/headers/cherry-path.jpg',
            'thumbnail_url' => '%s/images/headers/cherry-path-thumbnail.jpg',
            'description'   => __('Cherry Tree Path', 'uu2014')
          ),
          'lotus'         => array(
            'url'           => '%s/images/headers/lotus.jpg',
            'thumbnail_url' => '%s/images/headers/lotus-thumbnail.jpg',
            'description'   => __('Lotus', 'uu2014')
          )
        ));
    }

endif; // uu2014_setup
add_action('after_setup_theme', 'uu2014_setup');

// Add dynamic sidebars to the widget areas
function uu2014_widgets_init() {
    register_sidebar(array(
      'name'          => __('Home Sidebar', 'uu2014'),
      'id'            => 'home-widgets',
      'description'   => __('Drag to create or update the sidebar for home page', 'uu2014'),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h1 class="widget-title">',
      'after_title'   => '</h1>',
    ));
    register_sidebar(array(
      'name'          => __('Footer Widget', 'uu2014'),
      'id'            => 'footer-widget',
      'description'   => __('The footer widget area', 'uu2014'),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h3 class="footer-widget-title">',
      'after_title'   => '</h3>',
    ));
    register_sidebar(array(
      'name'          => __('Floating Widget Area', 'uu2014'),
      'id'            => 'sharebar',
      'description'   => __('A floating widget area that appears to the right of pages and individual posts. Display is controlled in the WP theme customizer.', 'uu2014'),
      'before_widget' => '<li id="%1$s" class="widget %2$s">',
      'after_widget'  => '</li>',
      'before_title'  => '<h3 class="floating-widget-title">',
      'after_title'   => '</h3>',
    ));
}

add_action('widgets_init', 'uu2014_widgets_init');

/**
 * Enqueue scripts and styles
 */
function uu2014_scripts() {

    $protocol = is_ssl() ? 'https' : 'http';
    wp_enqueue_style('google-fonts-style', "$protocol://fonts.googleapis.com/css?family=Open+Sans");

    wp_enqueue_style('uu2014-style', get_stylesheet_uri(), array(), '20131229');

    wp_enqueue_script('uu2014-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115');

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    if (is_singular() && wp_attachment_is_image()) {
        wp_enqueue_script('uu2014-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array('jquery'), '20120202');
    }

    if ( get_theme_mod('uu2014_display_floating_widgets', 1) && ( is_single() || is_page() ) ) {
        wp_enqueue_script('uu2014-sharebar-script', get_template_directory_uri() . '/js/sharebar.js', array('jquery'), '20131229');
    }

}

add_action('wp_enqueue_scripts', 'uu2014_scripts');

/** 
 * The Recent Comments widget in core adds CSS with !important that interferes 
 * with the theme so we are going to remove those styles 
 */
function uu2014_remove_recent_comments_style() {
	global $wp_widget_factory;
	remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
}
add_action( 'widgets_init', 'uu2014_remove_recent_comments_style' );

function uu2014_add_editor_styles() {
    add_editor_style('editor-style.css');
}

add_action('init', 'uu2014_add_editor_styles');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load TGM_Plugin_Activation class.
 */
require get_template_directory() . '/inc/class-tgm-plugin-activation.php';
add_action('tgmpa_register', 'uu2014_register_required_plugins');

/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function uu2014_register_required_plugins() {
    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(
      array(
        'name'     => 'Meteor Slides',
        'slug'     => 'meteor-slides',
        'required' => false,
      ),
      array(
        'name'     => 'Featured articles Lite',
        'slug'     => 'featured-articles-lite',
        'required' => false,
      ),
    /*  array(
        'name'     => 'Sharebar',
        'slug'     => 'sharebar',
        'required' => false,
      ),*/
    );

    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
      'domain'           => 'uu2014', // Text domain - likely want to be the same as your theme.
      'default_path'     => '', // Default absolute path to pre-packaged plugins
      'parent_menu_slug' => 'themes.php', // Default parent menu slug
      'parent_url_slug'  => 'themes.php', // Default parent URL slug
      'menu'             => 'install-required-plugins', // Menu slug
      'has_notices'      => true, // Show admin notices or not
      'is_automatic'     => false, // Automatically activate plugins after installation or not
      'message'          => '', // Message to output right before the plugins table
      'strings'          => array(
        'page_title'                      => __('Install Required Plugins', 'uu2014'),
        'menu_title'                      => __('Install Plugins', 'uu2014'),
        'installing'                      => __('Installing Plugin: %s', 'uu2014'), // %1$s = plugin name
        'oops'                            => __('Something went wrong with the plugin API.', 'uu2014'),
        'notice_can_install_required'     => _n_noop('This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.'), // %1$s = plugin name(s)
        'notice_can_install_recommended'  => _n_noop('This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.'), // %1$s = plugin name(s)
        'notice_cannot_install'           => _n_noop('Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.'), // %1$s = plugin name(s)
        'notice_can_activate_required'    => _n_noop('The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.'), // %1$s = plugin name(s)
        'notice_can_activate_recommended' => _n_noop('The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.'), // %1$s = plugin name(s)
        'notice_cannot_activate'          => _n_noop('Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.'), // %1$s = plugin name(s)
        'notice_ask_to_update'            => _n_noop('The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.'), // %1$s = plugin name(s)
        'notice_cannot_update'            => _n_noop('Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.'), // %1$s = plugin name(s)
        'install_link'                    => _n_noop('Begin installing plugin', 'Begin installing plugins'),
        'activate_link'                   => _n_noop('Activate installed plugin', 'Activate installed plugins'),
        'return'                          => __('Return to Required Plugins Installer', 'uu2014'),
        'plugin_activated'                => __('Plugin activated successfully.', 'uu2014'),
        'complete'                        => __('All plugins installed and activated successfully. %s', 'uu2014'), // %1$s = dashboard link
        'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated' or 'error'
      )
    );

    tgmpa($plugins, $config);
}
