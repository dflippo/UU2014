<?php
/**
 * Prompts the user to disable incompatible plugins on admin screens
 */
?>

<?php
/* Display a notice that can be dismissed */
function uu2014_disable_plugin_admin_notice() {
	$plugins = array(
      array(
        'name'     => 'WPtouch Mobile Plugin',
        'slug'     => 'wptouch',
        'allowed' => false,
      ),
    );
	if ( ! current_user_can( 'activate_plugins' ) ){
        return;
	}
	// Condition with all the plugins we are checking for
	if ( is_plugin_active('wptouch/wptouch.php') ) {
		global $current_user ;
			$user_id = $current_user->ID;
			/* Check that the user hasn't already clicked to ignore the message */
		if ( ! get_user_meta($user_id, 'uu2014_disable_plugin_ignore_notice') ) { 
			echo '<div class="updated settings-error"><p><strong>';
			echo __('The following plugins are enabled but not compatible with the current WordPress theme: ', 'uu2014' ) . '</p>';
			// Condition for each plugin we are checking for
			if ( is_plugin_active('wptouch/wptouch.php') ) {
				printf(__('<p><em><a href="%1$s" class="thickbox" title="%2$s">%2$s</a></em></p>',
					esc_url( __( 'plugin-install.php?tab=plugin-information&amp;plugin=wptouch&amp;TB_iframe=true&amp;width=772&amp;height=580', 'uu2014' ) ), 
					esc_html(__( 'WPtouch Mobile Plugin', 'uu2014' ) );
			}
			printf(__('<p><a href="%1$s">%2$s</a> | <a href="%3$s">%4$s</a>'), 
				esc_url( __( 'plugins.php', 'uu2014' ) ), 
				esc_html( __( 'Begin deactivating plugins', 'uu2014' ) ), 
				esc_url( __( '?uu2014_disable_plugin_ignore=0', 'uu2014' ) ), 
				esc_html( __( 'Dismiss this notice', 'uu2014' ) );
			echo "</strong></p></div>";
		}
	}
}
add_action('admin_notices', 'uu2014_disable_plugin_admin_notice');

function uu2014_disable_plugin_ignore() {
    global $current_user;
        $user_id = $current_user->ID;
        /* If user clicks to ignore the notice, add that to their user meta */
        if ( isset($_GET['uu2014_disable_plugin_ignore']) && '0' == $_GET['uu2014_disable_plugin_ignore'] ) {
             add_user_meta($user_id, 'uu2014_disable_plugin_ignore_notice', 'true', true);
    }
}
add_action('admin_init', 'uu2014_disable_plugin_ignore');

