<?php
/**
 * CareMe Connect Admin Settings
 *
 * @package CareMeConnect
 */

// Register the settings page
add_action( 'admin_menu', 'careme_connect_add_settings_page' );
function careme_connect_add_settings_page() {
	add_options_page(
		'CareMe Forms',
		'CareMe Forms',
		'manage_options',
		'careme-forms-settings',
		'careme_connect_settings_html'
	);
}

// Register settings
add_action( 'admin_init', 'careme_connect_register_settings' );
function careme_connect_register_settings() {
	register_setting( 'careme_connect_options_group', 'careme_form_email_to' );
	register_setting( 'careme_connect_options_group', 'careme_saas_api_key' );
	register_setting( 'careme_connect_options_group', 'careme_saas_chat_enabled' );
}

// Render settings HTML
function careme_connect_settings_html() {
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}

	if ( isset( $_GET['settings-updated'] ) ) {
		add_settings_error( 'careme_connect_messages', 'careme_connect_message', __( 'Settings Saved', 'careme-connect' ), 'updated' );
	}

	settings_errors( 'careme_connect_messages' );
	?>
	<div class="wrap" style="max-width: 800px;">
		<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
		<p>Manage where your patient leads are sent when they fill out forms on your site.</p>
		
		<form action="options.php" method="post">
			<?php
			settings_fields( 'careme_connect_options_group' );
			do_settings_sections( 'careme_connect_options_group' );
			?>
			
			<div style="background: #fff; padding: 20px; border: 1px solid #ccd0d4; margin-top: 20px;">
                <h2 style="margin-top: 0; padding-bottom: 15px; border-bottom: 1px solid #eee;">Standard Email Routing</h2>
                <table class="form-table" role="presentation">
                    <tbody>
                        <tr>
                            <th scope="row"><label for="careme_form_email_to"><?php esc_html_e( 'Send Leads To (Email)', 'careme-connect' ); ?></label></th>
                            <td>
                                <input type="email" id="careme_form_email_to" name="careme_form_email_to" value="<?php echo esc_attr( get_option( 'careme_form_email_to', get_option('admin_email') ) ); ?>" class="regular-text" />
                                <p class="description"><?php esc_html_e( 'The email address that will receive new lead notifications when a patient submits a form.', 'careme-connect' ); ?></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div style="background: #f0f6fc; padding: 20px; border: 1px solid #c5d9ed; border-left: 4px solid #2271b1; margin-top: 30px;">
                <h2 style="margin-top: 0; display: flex; align-items: center; gap: 10px;">
                    <span style="font-size: 24px;">🚀</span> 
                    Premium SaaS Integration 
                    <span style="background: #d63638; color: white; padding: 3px 8px; border-radius: 4px; font-size: 12px; font-weight: normal;">PRO</span>
                </h2>
                <p style="font-size: 15px; margin-bottom: 20px;">Overwhelmed by messy email leads? <strong>Connect to CareMe Lead Management SaaS</strong> to get a beautiful dashboard, patient CRM, and live chat widget.</p>
                <p><a href="#" target="_blank" class="button button-secondary">Learn about CareMe SaaS</a></p>

                <table class="form-table" role="presentation">
                    <tbody>
                        <tr>
                            <th scope="row"><label for="careme_saas_api_key"><?php esc_html_e( 'SaaS API Key', 'careme-connect' ); ?></label></th>
                            <td>
                                <input type="text" id="careme_saas_api_key" name="careme_saas_api_key" value="<?php echo esc_attr( get_option( 'careme_saas_api_key' ) ); ?>" class="regular-text" placeholder="Paste generating key here..." />
                                <p class="description"><?php esc_html_e( 'Enter the unique API key provided by your SaaS dashboard to securely push leads to your CRM.', 'careme-connect' ); ?></p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="careme_saas_chat_enabled"><?php esc_html_e( 'Enable Patient Chat', 'careme-connect' ); ?></label></th>
                            <td>
                                <input type="checkbox" id="careme_saas_chat_enabled" name="careme_saas_chat_enabled" value="1" <?php checked( 1, get_option( 'careme_saas_chat_enabled' ), true ); ?> />
                                <p class="description"><?php esc_html_e( 'Automatically inject the SaaS Live Chat widget onto the frontend of the website.', 'careme-connect' ); ?></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

			<?php submit_button('Save Form Settings'); ?>
		</form>
	</div>
	<?php
}
