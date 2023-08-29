<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php. - KG edited for DTLA, v. 0.86
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.9.0
 */

defined( 'ABSPATH' ) || exit;

//ob_start();



do_action( 'woocommerce_before_cart' ); ?>

<!-- TODO move to style.css -->
<style>

.page-content {
	max-width: 1440px;
	margin: 0 auto;

}

.entry-title {
	margin: 1em auto!important;
	max-width: 1440px!important;
}

	.awdr_cart_strikeout_line {
		float:left;
	}



.kwc-cart-form__cart-item {
	border:1px solid #ddd;
	border-radius: 10px;
	margin-bottom: 10px;
	float: left;
	width: 100%;
}

.kwc_cart_row1 {
	position: relative;
	width: 82%;
	float: right;
	margin-bottom: 24px;
}
.kwc_cart_row2 {
	width: 83%;
	float: right;
}

.kwc_meta {
  display: none; /* block */
}


.product-edit {
	position: absolute;
	top: 12px;
	right: 70px;
	/* if Edit as text */
	top: 10px;
	right: 95px;
    color: #aaa;
}

.product-edit .k_cart_edit_link {
	color: #aaa;
    }
    



.product-remove {
	position: absolute;
	top: 15px;
	right: 35px;
	/* if Delete as text */	
	right: 0px;
}
/* remove product text */
.woocommerce .product-remove a.remove {
	font-size:14px;
	font-weight: 400;
    color: #aaa !important;
    padding-right: 45px;
}

.woocommerce .product-remove a.remove:hover {
	background: transparent;	
	color: #F05C4E !important;
}

.woocommerce .product-remove a.remove:before {
	/* content: "\f182 ";
	font-family: Dashicons; 
    padding-right: 5px; */
}
	
.woocommerce .product-remove a {
	width:120px!important;
}


.row_expand {
	position: absolute;
	top: 12px;
	right: 25px;
	cursor:pointer;
	transition: 0.5s all;
	width: 10px;
    height: 20px;
}

.row_expand:hover {
 color: #F05C4E;
 }

.product-thumbnail {
  width: 160px;
  display: block;
  float: left;
  margin: 10px;
  border: 3px solid #eee;
  border-radius: 12px;
  padding: 4px;
}
.product-name {
	float:left;
	max-width:80%;
	font-family: 'Poppins';
	font-style: normal;
	font-weight: 600;
	font-size: 24px;
	line-height: 32px;
	margin:10px 0;
}
.product-name a {
	color:#222;
	text-decoration: none;
}


.k_cart_edit_link  {
	font-size:14px!important;
	color:#222;
	margin-left:40px;
	padding-right: 30px;
}
.k_cart_edit_link:before {
	/* content: "\f464 ";
	font-family: Dashicons; 
    padding-right: 5px; */
}
.k_cart_edit_link:hover {
	color: #F05C4E;
}

.product-price {
	float:left;
	clear:left;
	color:#0b2338;
}
.product-subtotal {
	float:right;
	font-weight: 600;
	font-size: 20px;
	line-height: 16px;
	padding-right: 70px;

	width: 350px;
text-align: right;
}
.product-quantity {
	max-width:300px;
	float: right;
	clear: both;
	display:none; /* show temporarily */
}

.kwc_cart_row1  input {
	width:6em!important;  
	padding: 0;
	text-align: right!important;
}


#coupon_code {
	width:160px;
}

.actions {
	float: left;
	height: 100px;
	background: #eee;
	border-radius: 10px;
	padding: 5px;
	display: block;
}
.ac_update {
	float:right;
}

.cart-collaterals {
	float:right;
}



#table_q .hidden {
	display:none;
}

#table_q thead td, #table_d thead td {
	height:10px;
	padding: 0;
}
#table_q tr td, #table_d tr td {
	border:0px solid red!important;
	background: transparent;
	padding: 2px 4px;
}


#table_d tr {
	display:none;
}
#table_d tr:first-child {
	display: block;
}
/* decoration table columns */
#table_d tr td:nth-child(1) {
width: 130px;
}
#table_d tr td:nth-child(2) {
width: 160px;
}
#table_d tr td:nth-child(3) {
width: 90px;
}
#table_d tr td:nth-child(4) {
width: 160px;
}

#table_d .preview {
	float:left;
}


.cart_totals h2, .shop_table, .shop_table_responsive {
	display:none;
}

.cart-collaterals {
	width:50%!important;
}
.wc-proceed-to-checkout  {
	float: right;
	 padding: 0!important;
	 margin:0;
	
}

.wc-proceed-to-checkout  .checkout-button {
  	background: #F05C4E!important;
	border-radius: 20px!important;
	font-size: 1em !important;
	padding:12px 20px!important;
    font-weight: 400 !important;
}



#table_q .q1,  #table_q .q2, #table_q .q3,  #table_q .q4,  #table_q .q5,
#table_d .q1 {
	border-radius: 5px;
	border-color:#ccc;
}

/* if spans instead of inputs */

#table_q tr:first-child td {
	width:70px;
}

#table_d .q1 {
	display:block;
	padding-left:10px;
	margin-bottom: 5px;
	border-radius: 5px;
	border:0px solid #ccc; 
	font-size:12px;
	float:left; /* filenames next to preview */
	max-width:85%;
}


/* hide arrow in numerical fields */
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}

#table_d thead td {
	font-size: 14px;
    font-weight: 600;
}


#k_cart_finishings {
	width:99%;
	float:left;
}

.fin_tile {
	border:1px solid #E5E7EB;
	border-radius: 8px;
	display:block;
	float:left;
	width:30%;
	padding:1%;
	margin: 1%;
	color: #6B7280;
}
.fin_tile_img {
	width:60px;
	float:left;
}
.fin_tile img {
	float: left;
	width: 54px;
	margin-right: 4%;
}

.fin_tile_cntent {
	width:75%;
	float:right;
}

#fin1, #fin2, #fin3, #fin4, #fin5, #fin6,
#fin1_days, #fin2_days, #fin3_days, #fin4_days, #fin5_days, #fin6_days {
	border:0px;
	padding: 0;
	width:35%;
	text-align: right;
	background: inherit;
	transition: all 0s;
}

#fin1_days, #fin2_days, #fin3_days, #fin4_days, #fin5_days, #fin6_days {
	text-align: left;
	width:8px;
}

.fin_tile_selected {
	background: #FEEFEE;
}

#k_cart_finishings  h3 {
  font-size: 1.25rem!important;;
}


#table_q .c_name_cart {
	margin: 0;
padding: 0;
border: 0;
font-size: 12px;
width: max-content;
display: block;
max-width: 150px;
}
.kcolor_box_cart {
	width: 30px;
display: block;
height: 30px;
	border:1px solid #eee;
}
	
.kstyle_cart {
	display:none;
}

/* saving amounts */
.product-subtotal-saving {
	float: right;
	font-weight:400;
	font-size: 16px;
	margin-top: 16px;
	
}

.product-subtotal-saving p {
	float:right;
}



#table_d tbody { display: grid; }

.design_notes_p {
	padding: 0 10px;
}



@media (max-width: 767px){

	.product-thumbnail {
		width: 30%;
	}

	.kwc_cart_row1 {
		width: 64%;
		margin-bottom: 10px;
	}

	.product-name {
		font-size: 20px;
		line-height: 26px;
		position: relative;
        top: 15px;
        margin: 20px 0;
	}

	.product-subtotal {
		padding-right: 10px;
	}
	
	#table_d tr {
		/*display: inline-table;*/
		width: 100%;
	}
	
	/* modify widths */
/*	#table_d tr td:nth-child(1) { width:20%; }
	#table_d tr td:nth-child(2) { width:20%; }
	#table_d tr td:nth-child(3) { width:10%; }
	#table_d tr td:nth-child(4) { width:20%; }
	#table_d tbody tr td:nth-child(1) { width:20%;  }
	#table_d tbody tr td:nth-child(5) { width:30%;  }
    
    */
    
    
    #table_d tr td.col-pos { width: 20%; }
    #table_d tr td.col-print { width: 20% }
    #table_d tr td.col-colors { width: 10% }
    #table_d tr td.col-ink { width: 20% }
    
    #table_d .q1 { padding-left: unset; }
    
    
    
	
	.fin_tile {
		width:48%;
	}
	.fin_tile_cntent {
		width:60%;
	}
	
	/* hide file names */
	#table_d .q1f {
		display:none;
	}
	
}

@media (min-width: 768px) and (max-width: 1024px){
	.kwc_cart_row1 {
		width: 75%;
		margin-bottom: 20px;
	}
}

@media (max-width: 1024px){
	.kwc_cart_row2 {
		width: 99%;
	}
}

.elementor-10 .elementor-element.elementor-element-8a9155d .elementor-icon-list-icon i {
  color: #F05C4E;
}
.elementor-element-8a9155d li.elementor-icon-list-item.elementor-inline-item:nth-child(1) .elementor-icon-list-icon {
	background: #F05C4E;
}
.elementor-element-8a9155d li.elementor-icon-list-item.elementor-inline-item:nth-child(1) .elementor-icon-list-icon i.fas.fa-check::before {
	content: '1';
	color:#fff;
    font-family: Poppins;
    font-weight: 600;
}

.elementor-element-8a9155d li.elementor-icon-list-item.elementor-inline-item:nth-child(1) .elementor-icon-list-text {	
    font-weight: 600;
}

.elementor-element-8a9155d li.elementor-icon-list-item.elementor-inline-item:nth-child(3) .elementor-icon-list-icon, .elementor-element-8a9155d li.elementor-icon-list-item.elementor-inline-item:nth-child(2) .elementor-icon-list-icon {
	background: transparent;
	border:1px solid #D1D5DB;
}
.elementor-element-8a9155d li.elementor-icon-list-item.elementor-inline-item:nth-child(3) .elementor-icon-list-icon i.fas.fa-check, .elementor-element-8a9155d li.elementor-icon-list-item.elementor-inline-item:nth-child(2) .elementor-icon-list-icon i.fas.fa-check {
	color:#9CA3AF;
}

.elementor-element-8a9155d li.elementor-icon-list-item.elementor-inline-item:nth-child(2) .elementor-icon-list-icon i.fas.fa-check::before {
	content: '2';
    font-family: Poppins;
    font-weight: 600;
}


.elementor-element-8a9155d li.elementor-icon-list-item.elementor-inline-item:nth-child(3) .elementor-icon-list-icon i.fas.fa-check::before {
	content: '3';
    font-family: Poppins;
    font-weight: 600;
}

.elementor-element-8a9155d {
	/* hack to show above Cart */
	/*
margin-bottom: 90px;
margin-top: -125px;
	*/
}


	/* points plugin */
#wps_wpr_order_notice {
  display: none;
}
	
	/* no CART title, now in cart-top */
.page-header .entry-title {
	display: none;	
}
	
	/* margin from Steps */
	.woocommerce-cart-form {
		margin-top: 70px;
	}

	/* My Cart title */
.top_title {
width: 50%;
float: left;
display: block;
margin-bottom: 20px;
margin-top: -15px;
}

.top_title h1 {
font-family: 'Poppins';
font-style: normal;
font-weight: 600;
font-size: 36px;
color:#111;
}

	/* cont shopping button */
.continue_shopping {
	float:right;
	border-radius: 20px !important;
	padding: 12px 20px !important;
	background: #fff !important;
	border: 1px solid #ccc;
}
.continue_shopping:hover {
	background: #fff;
}
	
	/* to Checkout button */
.cart-collaterals {
  	width: 200px !important;
}
	/* to Checkout button inside collaterals */
	.woocommerce .cart-collaterals .cart_totals, .woocommerce-page .cart-collaterals .cart_totals { width:98% }

@media (max-width: 767px){
	.top_title { width:96%; }	
	/*.cart-collaterals {  margin-right: -20px; }*/
	.continue_shopping { /* width:155px; padding: 10px 0 !important; float:left; */ margin-bottom: 20px; }
    
    
    
}
	
	
</style>

<!-- elementor template steps ... -->


<div class="elementor-widget-wrap elementor-element-populated">
			<div class="elementor-element elementor-element-8a9155d elementor-icon-list--layout-inline elementor-align-center elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="8a9155d" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items elementor-inline-items">
							<li class="elementor-icon-list-item elementor-inline-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-check"></i>						</span>
										<span class="elementor-icon-list-text">My Cart</span>
									</li>
								
								<li class="elementor-icon-list-item elementor-inline-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-check"></i>						</span>
										<span class="elementor-icon-list-text">Checkout</span>
									</li>
								<li class="elementor-icon-list-item elementor-inline-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-check"></i>						</span>
										<span class="elementor-icon-list-text">Confirmation</span>
									</li>
						</ul>
				</div>
			</div>
</div>
<!-- end of elementor template steps ... -->


<form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">

	<div class="top_title">
		<h1>
		My Cart 
		</h1>
		<p>
		Complete your purchase - proceed to checkout
		</p>
        <?php echo do_shortcode("[WPS_CART_PAGE_SECTION]"); ?>
	</div>
    
    
	


	<?php do_action( 'woocommerce_before_cart_collaterals' ); ?>

	<div class="cart-collaterals">
		<?php
			/**
			 * Cart collaterals hook.
			 *
			 * @hooked woocommerce_cross_sell_display
			 * @hooked woocommerce_cart_totals - 10
			 */
			do_action( 'woocommerce_cart_collaterals' );
		?>
	</div>

	<div class="elementor-button elementor-size-md continue_shopping">
		<span>
			<span class=" elementor-button-icon"></span>
			<a href="/products/" style="text-decoration:none;color:#111;">
			<span class="elementor-button-text">Continue shopping</span>
			</a>
		</span>
	</div>

	<br /><br /><br />

	

	<?php do_action( 'woocommerce_before_cart_table' );  // loads /1_templates/dtla_template_cart_top.php , defined in _wc1  ?>

	
			<?php do_action( 'woocommerce_before_cart_contents' ); ?>

			<?php
			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
				$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
				$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

				/**
				 * Filter the product name.
				 *
				 * @since 7.8.0
				 * @param string $product_name Name of the product in the cart.
				 */
				$product_name = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key );


				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
					$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
					?>
					<div class="kwc-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">

						

						<span class="product-thumbnail">
						<?php
						$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

						if ( ! $product_permalink ) {
							echo $thumbnail; // PHPCS: XSS ok.
						} else {
							printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
						}
						?>
						</span>

						<div class="kwc_cart_row1">

							<span class="product-name" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>">
							<?php
							if ( ! $product_permalink ) {
								/**
							 * Filter the product name.
							 *
							 * @since 7.8.0
							 * @param string $product_name Name of the product in the cart.
							 * @param array $cart_item The product in the cart.
							 * @param string $cart_item_key Key for the product in the cart.
							 */
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $product_name, $cart_item, $cart_item_key ) . '&nbsp;' );
							} else {
								/**
							 * Filter the product name.
							 *
							 * @since 7.8.0
							 * @param string $product_url URL the product in the cart.
							 */
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $product_name ), $cart_item, $cart_item_key ) );
							}
							
							do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key, $product_permalink ); //kg added $product_permalink
							
							// Backorder notification.
							if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
								echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
							}
							?>
							</span>

							<span class="product-price" data-title="<?php esc_attr_e( 'Price', 'woocommerce' ); ?>">
								<?php
									echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
								?>
								/ pc @ <?php echo $cart_item['quantity_total2']; ?> units

								<!-- <br /> Product id = <?php echo get_post_meta( $product_id, 'product_id', true ); // product_id from custom field	?> -->
								<!-- <br />
								SKU = <?php echo $_product->get_sku(); ?> -->
							</span>


							<span class="product-subtotal" data-title="<?php esc_attr_e( 'Subtotal', 'woocommerce' ); ?>">
								<?php
									echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
								?>
							</span>

							<span class="product-edit">
								<?php
									//TODO changed to Font Awesome
									// no Edit word so &nbsp; - or Edit
									if (isset($product_permalink)) {
										
										echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s?item='. $cart_item_key .'" class="k_cart_edit_link" title="Edit"><i class="fa fa-edit"></i> Edit</a>', esc_url( $product_permalink ) ), $cart_item, $cart_item_key ) );
									}
									?>

							</span>
							
							<span class="product-remove">
								<?php
								//TODO changed to Font Awesome

									echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
										'woocommerce_cart_item_remove_link',
										sprintf(
											'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s"><i class="fa fa-trash"></i> Delete</a>',
											esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
											esc_html__( 'Remove this item', 'woocommerce' ),
											esc_attr( $product_id ),
											esc_attr( $_product->get_sku() )
										),
										$cart_item_key
									);
								?>
							</span>

							<i class="fa fa-chevron-right row_expand"></i>

							<!--  WC quantity hidden via css -->
							<span class="product-quantity" data-title="<?php esc_attr_e( 'Quantity', 'woocommerce' ); ?>">
							<?php
							if ( $_product->is_sold_individually() ) {
								$min_quantity = 1;
								$max_quantity = 1;
							} else {
								$min_quantity = 0;
								$max_quantity = $_product->get_max_purchase_quantity();
							}

							$product_quantity = woocommerce_quantity_input(
								array(
									'input_name'   => "cart[{$cart_item_key}][quantity_total2]", //qty  ??? TODO
									'input_value'  => $cart_item['quantity_total2'], //quantity
									'max_value'    => $max_quantity,
									'min_value'    => $min_quantity,
									'product_name' => $product_name //$_product->get_name(),
								),
								$_product,
								false
							);

							echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
							?>
							</span>



						</div>
						<br /><br /><br />
						<div class="kwc_cart_row2">
						
							<span class="kwc_meta">
								

								<?php //k_quantities(); ?>

							
								
								<?php 
								do_action( 'wc_k_cart_row_info' , $cart_item ); // loads /1_templates/dtla_template_cart_row.php , defined in _wc1 
								
								//require( KDTLA_PATH . '1_templates/dtla_template_cart_row.php'); //1_templates since v 0.6
								?>

							</span>

						</div>

					</div>
					<?php
				}
			}
			?>

			<?php do_action( 'woocommerce_cart_contents' ); ?>
            

			<div>
            
				<!-- coupon - moved to checkout -->
				<span colspan="6" class="actions" style="display:none;">
					
					<?php if ( wc_coupons_enabled() ) { ?>
						<div class="coupon">
							<label for="coupon_code"><strong><?php esc_html_e( 'Coupon:', 'woocommerce' ); ?></strong></label> 
							<br />
							<input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" /> <button type="submit" class="button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"><?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?></button>
							<?php do_action( 'woocommerce_cart_coupon' ); ?>
						</div>
					<?php } ?>

					

					
				</span>

				<!-- cart update - after quantity change -->
				<span class="ac_update">
					<button type="submit" class="button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>"><?php esc_html_e( 'Update cart', 'woocommerce' ); ?></button>
				</span>

			</div>
            
            

			<?php do_action( 'woocommerce_cart_actions' ); ?>
            <div class="wc-proceed-to-checkout">
		
<a href="/checkout/" class="checkout-button button alt wc-forward">
	Proceed to checkout</a>
	</div>

			<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
            

			<?php do_action( 'woocommerce_after_cart_contents' ); ?>

	<?php do_action( 'woocommerce_after_cart_table' ); ?>
</form>

<!-- collaterals moved to the top -->



<?php do_action( 'woocommerce_after_cart' ); ?>




<script type="text/javascript">

//$($('.woocommerce-cart-form__cart-item')[0]).show('slow')

// $('.row_expand').click(function(){ $(this).parent().parent().find('.kwc_cart_row2 .kwc_meta')[0].show() } ) 


( function ( $ ) {
var debug = 1;

console.log('kdtla cart start ...');


	// start, on load
	window.addEventListener('load', function() {
		if (debug) console.log('cart loaded');

		do_row_expand();

		// price discount
		k_price_discount();

		// expand rows by default
		$('.kwc_cart_row2 .kwc_meta').show();
		
		// product count in title
		$('#title_q').text('('+$('.kwc_cart_row1').length+')');
		

	}) //end load
	
	
	// product count in title - update after removal (not removed_from_cart)
	$( document.body ).on( 'updated_wc_div', function() {
		setTimeout(() => { 
			$('#title_q').text('('+$('.kwc_cart_row1').length+')');
			do_row_expand(); //?
		}, 500); 
	} );

	
	$( document.body ).on( 'updated_wc_div', k_price_discount );
	$( document.body ).on( 'updated_wc_div', do_row_expand );
	$( document.body ).on( 'updated_cart_totals', do_row_expand ); // to expand after removal or undo

	
	function do_row_expand() {
		
		$('.row_expand').click(function(){
			
			console.log(' cart - row expand');

			if ( $(this).parent().parent().find('.kwc_cart_row2 .kwc_meta:visible').length ) {
				$(this).css('transform','rotate(0deg)');
				$(this).parent().parent().find('.kwc_cart_row2 .kwc_meta').hide();
			}
			else {
				$(this).css('transform','rotate(-90deg)');
				$(this).parent().parent().find('.kwc_cart_row2 .kwc_meta').show();
			}	
			
		});
	}

	// price discount
	function k_price_discount() {
		const k_price = new Intl.NumberFormat("en-US", {
			style: "currency",
			currency: "USD",
			minimumFractionDigits: 2
		});

		$('.product-price .woocommerce-Price-amount').each(function() { 
			$(this).prepend('<span style="text-decoration: line-through; color: #aaa">'+ k_price.format( $(this).text().substr(1,10)*1.2 ) +'</span>  &nbsp;'); 
		});

		$('.product-subtotal .woocommerce-Price-amount').each(function() { 	
			var pr = $(this).text().substr(1,10).replace(',','');
			$(this).prepend('<span style="text-decoration: line-through; color: #aaa">'+ k_price.format( pr *1.2 ) +'</span>  &nbsp;');
			$(this).append('<br /><span class="product-subtotal-saving">You are saving: &nbsp; <p>'+ k_price.format( pr *0.2 ) +'</p></span>  ');
			
		});

	}

	

}( jQuery ) );


</script>

<?php //kg




// DEBUG

if (isset($_GET['d']))
if (@$_GET['d']==1) {

	$session_id = null;
	$values = null;

	foreach( $_COOKIE as $key => $value ) {

		if( stripos( $key, 'wp_woocommerce_session_' ) === false ) {
			continue;
		}

		$values = explode( '||', $value );
		//echo ' key='.$key;
	}

	$session_id = $values[0];
	$session = new WC_Session_Handler();
	$session_data = $session->get_session( $session_id );

	// Contains array of items in cart including product ids, quantities, totals, etc.
	$cart_data = unserialize( $session_data['cart'] );

	//print_r($cart_data);
	echo '<br /><br />';
	echo 'WC session = '. $session_id;
	echo '<br /><br />';
	foreach($cart_data as $k=>$v ) {
		echo ' key1 = '.$k . ' prod_id='.$v['product_id'] . '<br />';
		$product = wc_get_product( $v['product_id'] ); //print_r($product);
		//$pr_url = 'https://www.dtlaprint.com/' . $product->get_slug();	echo $pr_url;

	}

	//print_r($session_data);

	// if registered user
	
	//$customer = WC()->session->get('customer');
		//$is_vat_exempt = $customer['$is_vat_exempt'];
	//echo '<br /><br />';
	//print_r($customer);
	

}



//ob_end_flush();