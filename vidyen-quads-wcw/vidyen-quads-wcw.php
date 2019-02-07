<?php
 /*
Plugin Name:  VidYen Quads for WC Wallet
Plugin URI:   https://wordpress.org/plugins/vidyen-quads-wcw/
Description:  VidYen match four of a kink game for WooCommerce Wallet
Version:      1.0.0
Author:       VidYen, LLC
Author URI:   https://vidyen.com/
License:      GPLv3
License URI:  https://www.gnu.org/licenses/gpl-3.0.html
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

register_activation_hook(__FILE__, 'vy_quads_wcw_install');

//adding menus
add_action('admin_menu', 'vy_quads_wcw_menu');

function vy_quads_wcw_menu()
{
    $parent_page_title = "VidYen Quads for WC Wallet";
    $parent_menu_title = 'Quads';
    $capability = 'manage_options';
    $parent_menu_slug = 'vy_quads_wcw';
    $parent_function = 'vy_quads_wcw_parent_menu_page';
    add_menu_page($parent_page_title, $parent_menu_title, $capability, $parent_menu_slug, $parent_function);
}

function vy_quads_wcw_parent_menu_page()
{
	//It's possible we don't use the VYPS logo since no points.
  $vyps_logo_url = plugins_url( 'includes/images/logo.png', __FILE__ );
	//Logo from base. If a plugin is installed not on the menu they can't see it not showing.
	echo '<br><br><img src="' . $vyps_logo_url . '" > ';

	//Static text for the base plugin
	echo
	"<h1>VidYen Point System Base Plugin</h1>
	<p>VYPS allows you to gamify monetization by giving your users a reason to turn off adblockers in return for rewards and recognition.</p>
	<p>This is a multi-part system, similar to WooCommerce, that allows WordPress administrators to track points for rewards using monetization systems.</p>
	<p>To prevent catastrophic data loss, uninstalling this plugin will no longer automatically delete the VYPS user data. To drop your VYPS tables from the WPDB, use the VYPS Uninstall plugin to do a clean install.</p>
	<br>
	<h2>Base Plugin Instructions</h2>
	<p>Navigate to the Add Points menu to add points.</p>
	<p>Go to the Users panel and use the context menu by Edit User Information under Edit Points to modify or see a user’s current point balance.</p>
	<p>Go to Point Log in the VidYen Points menu to see a log of all user transactions.</p>
	<p>See the shortcode menus on how to integrate this on your WordPress site.</p>
	";

	include( plugin_dir_path( __FILE__ ) . 'includes/menus/credits.php');
}

/*** SHORTCODE INCLUDES IN BASE ***/

include( plugin_dir_path( __FILE__ ) . 'includes/shortcodes/vy-quads-wcw.php'); //QUADS the game. Moving to a new tomorrow!

/*** End of Shortcode Includes ***/

/*** FUNCTION INCLUDES***/

/*** WW ***/
include( plugin_dir_path( __FILE__ ) . 'includes/functions/ww/vy_quads_wcw_credit_func.php'); //Function to credit the WooWallet.
include( plugin_dir_path( __FILE__ ) . 'includes/functions/ww/vy_quads_wcw_debit_func.php'); //Function to debit the WooWallet.
include( plugin_dir_path( __FILE__ ) . 'includes/functions/ww/vy_quads_wcw_bal_func.php'); //Function to check bal the WooWallet.

/*** AJAX ***/
include( plugin_dir_path( __FILE__ ) . 'includes/functions/ajax/vy-quads-wcw-ajaxurl.php'); //Forces ajax to be called regardless of installation

/*** End of Function Includes ***/
