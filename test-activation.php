<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once "../../../wp-load.php";
require_once "../../../wp-admin/includes/plugin.php";

$plugin = "careme-connect/careme-connect.php";

echo "Attempting to activate: " . $plugin . "\n";

$result = activate_plugin( $plugin );

if ( is_wp_error( $result ) ) {
	echo "Activation failed!\n";
	echo $result->get_error_message();
} else {
	echo "Activation successful!";
}
