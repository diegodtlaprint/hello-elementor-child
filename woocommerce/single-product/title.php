<?php
/**
 * Single Product title
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/title.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @package    WooCommerce\Templates
 * @version    1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
k1(__FILE__);

//kg
global $product;
$brand = '';
//print_r($product);
//print_r( get_the_terms($product->get_id(),'pa_manufacturer') );

//$brand = get_the_terms($product->get_id(),'pa_manufacturer')[0]->name;
if ( !is_wp_error( get_the_terms($product->get_id(),'brand') ))
	//$brand = get_the_terms($product->get_id(),'brand')[0]->name;
	$brand = get_the_terms($product->get_id(),'brand')[0]->slug;
else
	$brand = get_post_custom_values('brand')[0]; // if manufacturer in custom fields as brand

$brand = strtolower(str_replace(' ','-',$brand));
$brand = strtolower(str_replace('-+-','-',$brand)); // for bella + canvas
$brand = strtolower(str_replace('-&-','-',$brand)); // for &
$brand_logo = 'https://s3.us-west-1.amazonaws.com/dtlaprint.com/wp-content/images/brands/color/' . $brand .'-color.png';
//https://cdn.dtlaprint.com/wp-content/images/brands/logobar/bella-canvas-bar.png
$brand_url = '/brand/' . $brand . '/';
//$brand_url = '/brands/' . $brand . '/';
?>


<div style="display: flex;">
<a href="<?php echo $brand_url; ?>" >
	<img src="<?php echo $brand_logo; ?>" alt="<?php echo $brand; ?>" id="brand_logo" />
</a>

<div style="max-width: 700px;display: inline-block;">

<?php
the_title( '<h1 class="product_title entry-title">', '</h1>' );
?>
</div>

</div>
<?php
if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>

	<span class="sku_wrapper"><?php echo $brand; echo ' - '; esc_html_e( 'SKU:', 'woocommerce' ); ?> <span class="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?></span></span>

<?php endif;

$pr_url = 'https://www.dtlaprint.com/' . $product->get_slug(); //home_url() ?
$pr = $product->get_name();
$pr_d = strip_tags($product->get_description()); // or $product->get_short_description();

// SHARING below
?>
<span class="share_wrapper">
| &nbsp;&nbsp;&nbsp; Share: &nbsp;&nbsp;
<ul class="share-buttons" data-source="">
  <li><a href="https://twitter.com/intent/tweet?source=<?php echo $pr_url; ?>&text=<?php echo $pr; ?>:%20<?php echo $pr_url; ?>" target="_blank" title="Tweet"><i class="fa fa-twitter" aria-hidden="true"></i><span class="sr-only">Tweet</span></a></li>
  &nbsp;
  <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $pr_url; ?>&quote=<?php echo $pr; ?>" target="_blank" title="Share on Facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span class="sr-only">Share on Facebook</span></a></li>
  &nbsp;
  <li><a href="http://pinterest.com/pin/create/button/?url=<?php echo $pr_url; ?>&description=<?php echo $pr_d; ?>" target="_blank" title="Pin it"><i class="fa fa-pinterest" aria-hidden="true"></i><span class="sr-only">Pin it</span></a></li>
  &nbsp;
  <li><a href="mailto:?subject=<?php echo $pr; ?>&body=<?php echo $pr_d; ?>:%20<?php echo $pr_url; ?>" target="_blank" title="Send email"><i class="fa fa-envelope" aria-hidden="true"></i><span class="sr-only">Send email</span></a></li>
</ul>
</span>

<style>
	/* css to be moved to main css file ... */

#brand_logo {
	max-width:160px;
	max-height:60px;
    margin: 0 20px 0 0;
}

.single-product #primary .type-product .sku_wrapper {
	/* width:30%; */
	float:left;
}
.share_wrapper {
	display: inline;
	font-family: 'Rubik';
	font-style: normal;
	font-weight: 400;
	font-size: 14px;
	line-height: 22px;
	color: #6B7280;
	margin-bottom: 0px;
	vertical-align: top;
}

ul.share-buttons {
  list-style: none;
  padding: 0;
  display: inline;
}

ul.share-buttons li {
  display: inline;
}

ul.share-buttons a {
  color: #333;
}

</style>



<?php


k2(__FILE__);