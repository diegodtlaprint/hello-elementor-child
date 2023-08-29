<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;
k1(__FILE__);
/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>

<?php
// konrad testing
// 
$product_id = get_post_custom_values('product_id')[0];
$styles = get_post_custom_values('styles')[0];
	
// echo ' ----- konrad testing Local ---- <br />';
// echo 'product_id='.$product_id; echo ' <br />';
// echo 'styles='.$styles; echo ' <br />';
// echo ' <br /><br />';

// echo 'price_table = '.get_post_custom_values('price_table')[0] .' <br />';

// echo 'print_options = '.get_post_custom_values('print_options')[0] .' <br />';
// echo 'decoration_locations = '.get_post_custom_values('decoration_locations')[0] .' <br />';

// echo 'leadtimestd = '.get_post_custom_values('leadtimestd')[0] .' <br />';
// echo 'leadtimerush = '.get_post_custom_values('leadtimerush')[0] .' <br />';


//print_r(explode('##', $styles));echo ' <br />';
$t = explode('##', $styles);
$t[0] = null;
foreach($t as $tt) {
  if (isset($tt))
    list($style_id[], $color_name[], $color_html[]) = explode('|', $tt);
}
//print_r($style_id); print_r($color_name);
/*
$cdn_url = 'https://cdn.dtlaprint.com/wp-content/uploads/local/products/'.substr($product_id,0,2).'/';

foreach ($style_id as $s){
  $photo_url = $cdn_url . $product_id . '-' . $s . '-front.jpg';  echo $photo_url ; echo ' <br />';
  $photo_url = $cdn_url . $product_id . '-' . $s . '-back.jpg';  echo $photo_url ; echo ' <br />';
  $photo_url = $cdn_url . $product_id . '-' . $s . '-side.jpg';  echo $photo_url ; echo ' <br />';
  $photo_url = $cdn_url . $product_id . '-' . $s . '-side-right.jpg';  echo $photo_url ; echo ' <br />';
  echo '<div style="position:relative">';
  $photo_url = $cdn_url . $product_id . '-' . $s . '-front.jpg';  echo '<img src="'.$photo_url.'" style="width:100px;float:left;" />';
  $photo_url = $cdn_url . $product_id . '-' . $s . '-back.jpg';  echo '<img src="'.$photo_url.'" style="width:100px;float:left;" />';
  $photo_url = $cdn_url . $product_id . '-' . $s . '-side.jpg';  echo '<img src="'.$photo_url.'" style="width:100px;float:left;" />';
  $photo_url = $cdn_url . $product_id . '-' . $s . '-side-right.jpg';  echo '<img src="'.$photo_url.'" style="width:100px;float:left;" />';
	echo '</div>';
	
  echo ' <br />';
}
*/

// echo ' <br /><br /><br />';
k2(__FILE__);
	?>



<style>
	.c {
		/* position:absolute;		left:0;		top:0; */
		position:relative;		left:0;		top:-600px;
		border-left:1px solid red;
	}
	.woocommerce-product-gallery__image {
		max-height:600px;

	}

#dropzone {
    display: none;
    /* height: 200px; */
    width: 70%;
    max-width: 790px;
    box-shadow: 0px 0px 7px 0px #a9a9a9;
    position: fixed;
    left: 50%;
    top: 50%;
    background: #FFFFFF;
    border-radius: 20px;
    z-index: 999;
    transform: translate(-50%, -50%);
    padding: 30px;
}

</style>

<div id="dropzone">

	<!-- <input type="checkbox" name="remove_bg" id="remove_bg" label="remove,, "  />  -->
	<!-- 	temp: <a href="#" id="download_b">download</a> <a href="#" id="link">link</a> <br /> -->

	<div class="kdtla-row">
		<div class="kdtla-col-md-6">
			<div class="artwork-img-box" id="artwork-img-prev">
				<!-- 	<img src="/wp-content/uploads/2023/02/Ellipse-67.png" alt="expert">	 -->
		    </div>
				
		</div>
		<div class="kdtla-col-md-6">
			<div class="dropzone-cntent">
				<h2>Upload Artwork</h2>
				<p>Acceptable file formats; .psd, .ai, .pdf, .tiff, .eps, .png Artwork should be expanded with all text converted to outlines and .psd files should be sent in 300 dpi to scale</p>
				<div class="dropzone-cntent-warn">
					<div class="warn-icon">
						<img src="/wp-content/uploads/2023/02/Frame-1.png" alt="" />
					</div>
					<div class="warn-icon-cntent">
						<p>
							Don’t worry! Every order is triple checked even if it does not look perfect in this demo.
						</p>
					</div>
				</div>
				<div class="dropzone-cntent-bg">
						<input type="checkbox" id="rebackground" name="rebackground" value="John">
						<label for="rebackground">Remove background <span>Remove backgrounds 100% automatically with one click</span></label>
				</div>
			</div>
		</div>
			
	</div>
	<div class="kdtla-row">
		<div class="kdtla-col-md-12">
			<span id="dropzone_close">Cancel</span>
			<label class="add-artwork-label"> Add Artwork
				<input type="file" accept="image/*"  id="upload_b" />
			</label>
			<span id="dropzone_save">Save & Close</span>
		</div>
	</div>
</div>


