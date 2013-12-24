<?php
if (!function_exists('redux_init')) :
	function redux_init() {
	/**
		UU2014 Config File for ReduxFramework
		For full documentation on Redux, please visit: https://github.com/ReduxFramework/ReduxFramework/wiki
	**/

	$args = array();
	$tabs = array();

	ob_start();

	$ct = wp_get_theme();
	$theme_data = $ct;
	$item_name = $theme_data->get('Name');
	$tags = $ct->Tags;
	$screenshot = $ct->get_screenshot();
	$class = $screenshot ? 'has-screenshot' : '';

	$customize_title = sprintf( __( 'Customize &#8220;%s&#8221;','uu2014' ), $ct->display('Name') );

	?>
	<div id="current-theme" class="<?php echo esc_attr( $class ); ?>">
		<?php if ( $screenshot ) : ?>
			<?php if ( current_user_can( 'edit_theme_options' ) ) : ?>
			<a href="<?php echo wp_customize_url(); ?>" class="load-customize hide-if-no-customize" title="<?php echo esc_attr( $customize_title ); ?>">
				<img src="<?php echo esc_url( $screenshot ); ?>" alt="<?php esc_attr_e( 'Current theme preview' ); ?>" />
			</a>
			<?php endif; ?>
			<img class="hide-if-customize" src="<?php echo esc_url( $screenshot ); ?>" alt="<?php esc_attr_e( 'Current theme preview' ); ?>" />
		<?php endif; ?>

		<h4>
			<?php echo $ct->display('Name'); ?>
		</h4>

		<div>
			<ul class="theme-info">
				<li><?php printf( __('By %s','uu2014'), $ct->display('Author') ); ?></li>
				<li><?php printf( __('Version %s','uu2014'), $ct->display('Version') ); ?></li>
				<li><?php echo '<strong>'.__('Tags', 'uu2014').':</strong> '; ?><?php printf( $ct->display('Tags') ); ?></li>
			</ul>
			<p class="theme-description"><?php echo $ct->display('Description'); ?></p>
			<?php if ( $ct->parent() ) {
				printf( ' <p class="howto">' . __( 'This <a href="%1$s">child theme</a> requires its parent theme, %2$s.' ) . '</p>',
					__( 'http://codex.wordpress.org/Child_Themes','uu2014' ),
					$ct->parent()->display( 'Name' ) );
			} ?>
			
		</div>

	</div>

	<?php
	$item_info = ob_get_contents();
	
	ob_end_clean();
  

	// Setting dev mode to true allows you to view the class settings/info in the panel.
	// Default: true
	$args['dev_mode'] = false;

	// Set uu2014 custom option name. This allows us to access options as $uu2014[setting_name]
	$args['opt_name'] = 'uu2014';

	// Setting system info to true allows you to view info useful for debugging.
	// Default: false
	//$args['system_info'] = true;

	$theme = wp_get_theme();

	$args['display_name'] = $theme->get('Name');
	//$args['database'] = "theme_mods_expanded";
	$args['display_version'] = $theme->get('Version');

	// If you want to use Google Webfonts, you MUST define the api key.
	$args['google_api_key'] = 'AIzaSyAX_2L_UzCDPEnAHTG7zhESRVpMPS4ssII';

	// Setup custom links in the footer for share icons
	$args['share_icons']['twitter'] = array(
	    'link' => 'http://twitter.com/Dan_Flippo',
	    'title' => 'Follow Dan Flippo on Twitter',
	    'img' => ReduxFramework::$_url . 'assets/img/social/Twitter.png'
	);
	$args['share_icons']['linked_in'] = array(
	    'link' => 'http://www.linkedin.com/in/danflippo/',
	    'title' => 'Find Dan Flippo on LinkedIn',
	    'img' => ReduxFramework::$_url . 'assets/img/social/LinkedIn.png'
	);

	// Set a custom title for the options page.
	// Default: Options
	$args['menu_title'] = __('UU2014 Theme Options', 'uu2014');

	// Set a custom page title for the options page.
	// Default: Options
	$args['page_title'] = __('UU2014 Theme Options', 'uu2014');

	// Set a custom page slug for options page (wp-admin/themes.php?page=***).
	// Default: UU2014_options
	$args['page_slug'] = 'UU2014_options';

	$args['default_show'] = true;
	$args['default_mark'] = '*';

	// Set the menu type. Set to "menu" for a top level menu, or "submenu" to add below an existing item.
	// Default: menu
	$args['page_type'] = 'submenu';

	// Set the parent menu.
	// Default: themes.php
	// A list of available parent menus is available at http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
	//$args['page_parent'] = 'options-general.php';

	// Disable the panel sections showing as submenu items.
	// Default: true
	//$args['allow_sub_menu'] = false;
	
	// Add HTML before the form.
	$args['intro_text'] = __('<p>These screens allow you to customize UU2014 theme options</p>', 'uu2014');

	// Add content after the form.
	$args['footer_text'] = __('<p>The latest information on the UU2014 theme is available at <a href="http://www.faithandreason.dreamhosters.com/" target="_blank">http://www.faithandreason.dreamhosters.com/</a> and on GitHub at <a href="https://github.com/dflippo/UU2014" target="_blank">https://github.com/dflippo/UU2014</a></p>', 'uu2014');

	$sections = array();

	$sections[] = array(
		'icon' => 'el-icon-website',
		'title' => __('Theme Plugin Integration', 'uu2014'),
		'desc' => __('The UU2014 theme is designed to integrate with several plugins.  These settings has no effect if the plugin is not activated.', 'uu2014'),
		'fields' => array(
      array(
        'id'=>'header_slideshow_id',
        'type' => 'select',
        'data' => 'terms',
        'args' => array('taxonomies'=>'slideshow', 'args'=>array()),
        'title' => __('Header Image Slideshow', 'uu2014'),
        'subtitle' => __('Please choose a header slideshow.', 'uu2014'),
        'desc' => __('You can choose a slideshow from the Meteor Slides plugin to display at the top of every page instead of a static header image.', 'uu2014'),
        ),
      array(
        'id'=>'featured_articles_id',
        'type' => 'select',
        'data' => 'posts',
        'args' => array('post_type'=>'fa_slider', 'args'=>array()),
        'title' => __('Front Page News Slideshow', 'uu2014'),
        'subtitle' => __('Please choose a news slideshow.', 'uu2014'),
        'desc' => __('You can choose a slideshow from the Featured Articles plugin to display on the front page of the of the website.', 'uu2014'),
        ),
			array(
        'id'=>'display_sharebar',
        'type' => 'switch',
        'title' => __('Display Sharebar', 'uu2014'),
        'subtitle' => __('Please choose whether to display the sidebar on posts and pages', 'uu2014'),
        'default'	=> true,
        'desc' => __('The theme can control the sidebar from the Sharebar plugin.  Without this integration the plugin would not consistently display the bar at the correct horizontal and vertical location.', 'uu2014'),
        ),
			)
		);
			
	$sections[] = array(
		'type' => 'divide',
	);		

	if (function_exists('wp_get_theme')){
    $theme_data = wp_get_theme();
    $theme_uri = $theme_data->get('ThemeURI');
    $description = $theme_data->get('Description');
    $author = $theme_data->get('Author');
    $version = $theme_data->get('Version');
    $tags = $theme_data->get('Tags');
	}else{
    $theme_data = wp_get_theme(trailingslashit(get_stylesheet_directory()).'style.css');
    $theme_uri = $theme_data['URI'];
    $description = $theme_data['Description'];
    $author = $theme_data['Author'];
    $version = $theme_data['Version'];
    $tags = $theme_data['Tags'];
	}	

	$theme_info = '<div class="redux-framework-section-desc">';
	$theme_info .= '<p class="redux-framework-theme-data description theme-uri">'.__('<strong>Theme URL:</strong> ', 'uu2014').'<a href="'.$theme_uri.'" target="_blank">'.$theme_uri.'</a></p>';
	$theme_info .= '<p class="redux-framework-theme-data description theme-author">'.__('<strong>Author:</strong> ', 'uu2014').$author.'</p>';
	$theme_info .= '<p class="redux-framework-theme-data description theme-version">'.__('<strong>Version:</strong> ', 'uu2014').$version.'</p>';
	$theme_info .= '<p class="redux-framework-theme-data description theme-description">'.$description.'</p>';
	if ( !empty( $tags ) ) {
		$theme_info .= '<p class="redux-framework-theme-data description theme-tags">'.__('<strong>Tags:</strong> ', 'uu2014').implode(', ', $tags).'</p>';	
	}
	$theme_info .= '</div>';

	$sections[] = array(
		'icon' => 'el-icon-info-sign',
		'title' => __('Theme Information', 'uu2014'),
		'desc' => __('<p class="description">This is the Description. Again HTML is allowed</p>', 'uu2014'),
		'fields' => array(
			array(
				'id'=>'raw_new_info',
				'type' => 'raw',
				'content' => $item_info,
				),
			),
		);

  $documentationText = '';
	if( file_exists(dirname(__FILE__).'/README.html') ){
		/** @global WP_Filesystem_Direct $wp_filesystem  */
		global $wp_filesystem;
		if (empty($wp_filesystem)) {
			require_once(ABSPATH .'/wp-admin/includes/file.php');
			WP_Filesystem();
		}  		
		$documentationText = $wp_filesystem->get_contents(dirname(__FILE__).'/README.html');
	}
	elseif( file_exists(dirname(__FILE__).'README.md') ) {
		/** @global WP_Filesystem_Direct $wp_filesystem  */
		global $wp_filesystem;
		if (empty($wp_filesystem)) {
			require_once(ABSPATH .'/wp-admin/includes/file.php');
			WP_Filesystem();
		}  		
		$documentationText = $wp_filesystem->get_contents(dirname(__FILE__).'/README.md');
	}
  $sections['theme_docs'] = array(
    'icon' => 'el-icon-book',
    'title' => __('Documentation', 'uu2014'),
    'fields' => array(
    array(
      'id'=>'theme_readme.md',
      'type' => 'raw',
      'title' => __('Theme Read Me', 'uu2014'),
      'content' => 	$documentationText
      ),			
    ),				
  );

	global $ReduxFramework;
	$ReduxFramework = new ReduxFramework($sections, $args, $tabs);

	}
	add_action('init', 'redux_init');
endif;

/**
	Remove all things related to the Redux Demo mode.
**/
if ( !function_exists( 'redux_remove_demo_options' ) ):
	function redux_remove_demo_options() {
		
		// Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
		if ( class_exists('ReduxFrameworkPlugin') ) {
			remove_filter( 'plugin_row_meta', array( ReduxFrameworkPlugin::get_instance(), 'plugin_meta_demo_mode_link'), null, 2 );
		}

		// Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
		remove_action('admin_notices', array( ReduxFrameworkPlugin::get_instance(), 'admin_notices' ) );	

	}
	//add_action( 'redux/plugin/hooks', 'redux_remove_demo_options' );	
endif;
