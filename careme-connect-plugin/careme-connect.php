<?php
/**
 * Plugin Name: CareMe Connect
 * Plugin URI: https://caremetheme.com/connect
 * Description: The official integration plugin connecting the CareMe WordPress theme to your proprietary Lead Management & Chat SaaS.
 * Version: 1.0.0
 * Author: Antigravity (Frontend Developer & PM)
 * Text Domain: careme-connect
 *
 * @package CareMeConnect
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Define plugin constants
define( 'CAREME_CONNECT_VERSION', '1.0.0' );
define( 'CAREME_CONNECT_DIR', plugin_dir_path( __FILE__ ) );
define( 'CAREME_CONNECT_URL', plugin_dir_url( __FILE__ ) );

/**
 * Main CareMe Connect Class
 */
class CareMe_Connect {

	private static $instance;

	public static function get_instance() {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	private function __construct() {
		$this->includes();
	}

	private function includes() {
		require_once CAREME_CONNECT_DIR . 'inc/admin-settings.php';
		require_once CAREME_CONNECT_DIR . 'inc/lead-routing.php';
		require_once CAREME_CONNECT_DIR . 'inc/chat-widget.php';
	}
}

/**
 * Initialize the plugin
 */
function careme_connect_init() {
	CareMe_Connect::get_instance();
}
add_action( 'plugins_loaded', 'careme_connect_init' );
