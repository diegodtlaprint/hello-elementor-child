<?php
/**
 * Product loop sale flash
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/sale-flash.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $product;

?>

<div class="promo-space" >

<?php if ( $product->is_on_sale() ) : ?>

<?php echo apply_filters( 'woocommerce_sale_flash', '<span class="onsale">' . esc_html__( 'Sale!', 'woocommerce' ) . '</span>', $post, $product ); ?>

<?php endif; ?>

<?php if ( has_term( '1', 'product_tag', $product->get_id() ) ) : ?>

<img class="promo-icon" src="https://cdn-icons-png.flaticon.com/128/2111/2111463.png">

<?php endif; ?>

<?php if ( has_term( '2', 'product_tag', $product->get_id() ) ) : ?>

<img class="promo-icon" src="https://cdn-icons-png.flaticon.com/128/733/733585.png">

<?php endif; ?>

<?php if ( has_term( '3', 'product_tag', $product->get_id() ) ) : ?>

<img class="promo-icon" src="https://cdn-icons-png.flaticon.com/128/4494/4494485.png">

<?php endif; ?>

<?php if ( has_term( '4', 'product_tag', $product->get_id() ) ) : ?>

<img class="promo-icon" src="https://cdn-icons-png.flaticon.com/128/4494/4494475.png">

<?php endif; ?>

<?php if ( !$product->is_on_sale() && !has_term( array( '1', '2', '3', '4' ), 'product_tag', $product->get_id() ) ) : ?>

<div class="promo-icon"></div>

<?php endif;  ?>

</div> 

<?php


/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
