<?php
/**
 * My Account Dashboard
 *
 * Shows the first intro screen on the account dashboard.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/dashboard.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$allowed_html = array(
	'a' => array(
		'href' => array(),
	),
);


$customer_id = get_current_user_id();

if ( ! wc_ship_to_billing_address_only() && wc_shipping_enabled() ) {
	$get_addresses = apply_filters(
		'woocommerce_my_account_get_addresses',
		array(
			'billing'  => __( 'Billing address', 'woocommerce' ),
			'shipping' => __( 'Shipping address', 'woocommerce' ),
		),
		$customer_id
	);
} else {
	$get_addresses = apply_filters(
		'woocommerce_my_account_get_addresses',
		array(
			'billing' => __( 'Billing address', 'woocommerce' ),
		),
		$customer_id
	);
}

$oldcol = 1;
$col    = 1;



add_shortcode('user_total_spent', 'get_user_total_spent');

function get_user_total_spent( $atts ) {
    extract( shortcode_atts( array(
        'user_id' => get_current_user_id(),
    ), $atts, 'user_total_spent' ) );

    if( $user_id > 0 ) {
        $customer = new WC_Customer( $user_id ); // Get WC_Customer Object

        $total_spent = $customer->get_total_spent(); // Get total spent amount

        return wc_price( $total_spent ); // return formatted total spent amount
    }
}

?>


<div class="items_container--3">
	<div class="box_with__icon link">
	<div class="box_right">
		<div class="icon_container">
		<i class="iconly-Activity"></i>
		</div>
		<div class="box_right__text">
         
		<p class="text_darkgray">
		<?php
    // GET USER ORDERS (COMPLETED + PROCESSING)
    $customer_orders = get_posts( array(
        'numberposts' => -1,
        'meta_key'    => '_customer_user',
        'meta_value'  => $current_user->ID,
        'post_type'   => wc_get_order_types(),
		'post_status' => array('wc-completed'),
    ) );


    // LOOP THROUGH ORDERS AND GET PRODUCT IDS
    $product_ids = array();
    foreach ( $customer_orders as $customer_order ) {
        $order = new WC_Order( $customer_order->ID );
        $items = $order->get_items();
        foreach ( $items as $item ) {
            $product_id = $item->get_product_id();
            $product_ids[] = $product_id;
        }
    }
    $product_ids = array_unique( $product_ids );

    // QUERY PRODUCTS
    $args = array(
       'post_type' => 'product',
       'post__in' => $product_ids,
    );

		echo count( $product_ids );
	?>
	سفارش
		</p>
		<p class="text_gray"><?php esc_html_e('تکمیل شده','woodmartplus'); ?></p>
		</div>
	</div>
	<a href="<?php echo esc_url( wc_get_endpoint_url( 'orders' ) );  ?>" class="box_left">
		<i class="iconly-Arrow-Left icli"></i>
	</a>
	</div>
	<div class="box_with__icon link">
	<div class="box_right">
		<div class="icon_container">
		<i class="iconly-Bag"></i>
		</div>
		<div class="box_right__text">
         <p class="text_darkgray">
		 	<?php echo WC()->cart->get_cart_contents_count(); ?> محصول
         </p>
		   <p class="text_gray"><?php esc_html_e('منتظر پرداخت در سبد خرید','woodmart-farsi'); ?></p>
		</div>
	</div>
	<a href="<?php echo esc_url( wc_get_page_permalink( 'cart' ) ); ?>" class="box_left">
		<i class="iconly-Arrow-Left icli"></i>
	</a>
	</div>

	<div class="box_with__icon link">
	<div class="box_right">
		<div class="icon_container red">
		<i class="iconly-Wallet"></i>
		</div>
		<div class="box_right__text">
		<p class="text_darkgray">
			
		<?php


if ( is_plugin_active( 'woo-wallet/woo-wallet.php' ) ) {

	$title  = __( 'Current wallet balance', 'woo-wallet' );
	$menu_item  = '<a class="woo-wallet-menu-contents" href="' . esc_url( wc_get_account_endpoint_url( get_option( 'woocommerce_woo_wallet_endpoint', 'woo-wallet' ) ) ) . '" title="' . $title . '">';
	$menu_item .= woo_wallet()->wallet->get_wallet_balance( get_current_user_id() );
	$menu_item .= '</a>';

	echo $menu_item;
	} else {
		echo '<span class="wc-Symbol">0 تومان</span>';
	}


?>
		</p>
		<p class="text_gray"><?php esc_html_e( 'موجودی کیف پول','woodmart-farsi' ); ?></p>
		</div>
	</div>
	<a href="<?php echo esc_url( wc_get_endpoint_url( 'woo-wallet' ) );  ?>" class="box_left">
		<i class="iconly-Arrow-Left icli"></i>
	</a>
	</div>
</div>


<div class="items_container--2">	
	
	<div class="white_card">
	<div class="card_header">
         <div class="title">
		 <i class="iconly-Profile icli"></i>
            <p>اطلاعات کاربری</p>
         </div>
         <hr>
         <a href="<?php echo esc_url( wc_get_endpoint_url( 'edit-account' ) );  ?>" class="btn link_primary">
				ویرایش اطلاعات
				<i class="iconly-Edit-Square"></i>
         </a>
      </div>


<div class="outline_card--border_2">
         <div class="item">
            <p class="text_gray">نام:</p>
            <p class="text_darkgray"><?php echo $current_user->user_firstname; ?></p>
         </div>
         <div class="item">
            <p class="text_gray">نام خانوادگی:</p>
            <p class="text_darkgray"><?php echo $current_user->user_lastname; ?></p>
         </div>
         <div class="item">
            <p class="text_gray">تاریخ عضویت:</p>
            <p class="text_darkgray">
			<?php
				$user_id = get_current_user_id();
				$user = get_userdata($user_id);
				$registered_date = $user->user_registered;
				
				$jalali_date = date_i18n('Y/m/d', strtotime($registered_date));
				echo "{$jalali_date}";
			?>
			</p>
         </div>
         <div class="item">
            <p class="text_gray">آدرس ایمیل:</p>
            <p class="text_darkgray"><?php echo $current_user->user_email; ?></p>
         </div>
</div>

	  <div class="card_header">
         <div class="title">
		 <i class="iconly-Location"></i>
            <p>آدرس ها</p>
         </div>
         <hr>
         <a href="<?php echo esc_url( wc_get_endpoint_url( 'edit-address' ) );  ?>" class="btn link_primary">
				ویرایش آدرس ها
				<i class="iconly-Edit-Square"></i>
         </a>
      </div>


	  <p>
	<?php echo apply_filters( 'woocommerce_my_account_my_address_description', esc_html__( 'The following addresses will be used on the checkout page by default.', 'woocommerce' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
</p>

<?php if ( ! wc_ship_to_billing_address_only() && wc_shipping_enabled() ) : ?>
	<div class="u-columns woocommerce-Addresses col2-set addresses">
<?php endif; ?>

<?php foreach ( $get_addresses as $name => $address_title ) : ?>
	<?php
		$address = wc_get_account_formatted_address( $name );
		$col     = $col * -1;
		$oldcol  = $oldcol * -1;
	?>

	<div class="u-column<?php echo $col < 0 ? 1 : 2; ?> col-<?php echo $oldcol < 0 ? 1 : 2; ?> woocommerce-Address">
		<header class="woocommerce-Address-title title">
			<h5><?php echo esc_html( $address_title ); ?></h5>
			<a href="<?php echo esc_url( wc_get_endpoint_url( 'edit-address', $name ) ); ?>" class="edit"><?php echo $address ? esc_html__( 'Edit', 'woocommerce' ) : esc_html__( 'Add', 'woocommerce' ); ?></a>
		</header>
		<address>
			<?php
				echo $address ? wp_kses_post( $address ) : esc_html_e( 'You have not set up this type of address yet.', 'woocommerce' );
			?>
		</address>
	</div>

<?php endforeach; ?>

<?php if ( ! wc_ship_to_billing_address_only() && wc_shipping_enabled() ) : ?>
	</div>
	<?php
endif;
?>


    </div> 

	<div class="white_card">

	<div class="card_header">
         <div class="title">
		 <i class="iconly-Buy"></i>
            <p>جدیدترین محصولات فروشگاه</p>
         </div>
         <hr>
         <a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>" class="btn link_primary">
            بیشتر
            <i class="iconly-Arrow-Left"></i>
         </a>
      </div>

	  <div class="gap-y-2">	
	<?php 

$args = array(
	'posts_per_page' => '4',
	'post_status'    => 'publish',
	'post_type'      => 'product',
	'no_found_rows'  => 1,
	'order'          => 'DESC',
	'meta_query'     => array(),
	'tax_query'      => array(
		'relation' => 'AND',
	),
); // WPCS: slow query ok.

		$products = new \WP_Query($args);
		/* Start the Loop */
		while ( $products->have_posts() ) : $products->the_post(); ?>

              <div class="product_card inline_box transparent align_right">
                <div class="product_cover">
                  <div class="product_cover__image">
				  	<a href="<?php the_permalink() ?>">
				  		<?php woocommerce_template_loop_product_thumbnail(); ?>
					</a>
                  </div>
                </div>
                <div class="product_body">
                  <div class="product_text">
                    <h3 class="product_title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                    <div class="product_price">
						<?php woocommerce_template_loop_price(); ?>
                    </div>
                  </div>
                  <a href="<?php the_permalink() ?>" class="btn solid small">
				  <i class="iconly-Arrow-Left-2"></i>
                  </a>
                </div>
        </div>

		<?php
		endwhile;
		wp_reset_postdata();
	?>
	</div>

	</div> 

</div>


<?php
	/**
	 * My Account dashboard.
	 *
	 * @since 2.6.0
	 */
	/**
	 * Deprecated woocommerce_before_my_account action.
	 *
	 * @deprecated 2.6.0
	 */

	do_action( 'woocommerce_before_my_account' );

	/**
	 * Deprecated woocommerce_after_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_after_my_account' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
