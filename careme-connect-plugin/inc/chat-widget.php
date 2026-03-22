<?php
/**
 * CareMe Connect Chat Widget Injection
 *
 * @package CareMeConnect
 */

add_action( 'wp_footer', 'careme_connect_inject_chat_widget' );

function careme_connect_inject_chat_widget() {
	// Check if chat is enabled.
	$chat_enabled = get_option( 'careme_saas_chat_enabled' );
	$api_key      = get_option( 'careme_saas_api_key' );

	if ( ! $chat_enabled || empty( $api_key ) ) {
		return;
	}

	// The proprietary SaaS generic chat snippet.
	// In production, this URL will point to the user's actual SaaS domain.
	?>
	<!-- CareMe SaaS Chat Widget -->
	<script>
		window.CareMeChatConfig = {
			apiKey: "<?php echo esc_js( $api_key ); ?>",
			color: "#D6C9AD", // Inherit Pearl Luxe primary color
			position: "right"
		};
		(function(d, s, id){
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "https://app.caremesaas.com/widget.js"; // Placeholder URL
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'caremesaas-widget'));
	</script>
	<!-- End CareMe SaaS Chat Widget -->
	<?php
}
