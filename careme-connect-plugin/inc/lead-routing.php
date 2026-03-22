<?php
/**
 * CareMe Connect Lead Routing (Form Integrations)
 *
 * @package CareMeConnect
 */

// Example: Hooking into a standard form submission (e.g., Contact Form 7, Elementor Forms, or custom POST)
// For this scaffolding, we use a generic custom action hook "careme_form_submission"
// This would be triggered in the theme when a form is processed.

add_action( 'careme_form_submission', 'careme_connect_route_lead_to_saas', 10, 1 );

/**
 * Sends lead data to the proprietary SaaS API.
 * 
 * @param array $lead_data Array containing 'name', 'email', 'phone', 'message', 'service'.
 */
function careme_connect_route_lead_to_saas( $lead_data ) {
	$api_key = get_option( 'careme_saas_api_key' );

	if ( empty( $api_key ) ) {
		return false; // Cannot sync without API key
	}

	// Prepare payload for SaaS REST API
	$payload = wp_json_encode( array(
		'patient_name' => sanitize_text_field( $lead_data['name'] ),
		'patient_email'=> sanitize_email( $lead_data['email'] ),
		'patient_phone'=> sanitize_text_field( $lead_data['phone'] ),
		'message'      => sanitize_textarea_field( $lead_data['message'] ),
		'service'      => sanitize_text_field( $lead_data['service'] ),
		'source_url'   => home_url(),
	) );

	// Proprietary SaaS API Endpoint (Placeholder)
	$api_url = 'https://api.caremesaas.com/v1/leads/incoming';

	// Send to SaaS
	$response = wp_remote_post( $api_url, array(
		'headers'     => array(
			'Content-Type'  => 'application/json',
			'Authorization' => 'Bearer ' . $api_key, // Standard secure bearer token
		),
		'body'        => $payload,
		'method'      => 'POST',
		'data_format' => 'body',
		'timeout'     => 15, // Don't hang WordPress if SaaS is slow
	) );

	// Error logging for debugging
	if ( is_wp_error( $response ) ) {
		error_log( 'CareMe Connect SaaS Sync Error: ' . $response->get_error_message() );
		return false;
	}

	$response_code = wp_remote_retrieve_response_code( $response );
	if ( $response_code !== 200 && $response_code !== 201 ) {
			error_log( 'CareMe Connect SaaS Sync Failed with Status: ' . $response_code );
			return false;
	}

	return true; // Lead successfully routed to SaaS
}
