
<?php

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_account_navigation' ); ?>



<div class="woocommerce-MyAccount-content">
	<?php
		/**
		 * My Account content.
		 *
		 * @since 2.6.0
		 */
		do_action( 'woocommerce_account_content' );
	?>
</div>
