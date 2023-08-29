<?php
/**
 * Single Product Image - modified for DTLAPRINT
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.8.0
 */

defined( 'ABSPATH' ) || exit;
k1(__FILE__);
// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$post_thumbnail_id = $product->get_image_id();
$wrapper_classes   = apply_filters(
	'woocommerce_single_product_image_gallery_classes',
	array(
		'woocommerce-product-gallery',
		'woocommerce-product-gallery--' . ( $post_thumbnail_id ? 'with-images' : 'without-images' ),
		'woocommerce-product-gallery--columns-' . absint( $columns ),
		'images',
		'kdtla_images' //kg
	)
);
// kg
$product_id = get_post_custom_values('product_id')[0];
$styles = get_post_custom_values('styles')[0];

//da
$product_title = $product->get_title();

 

$html = '';

$t = explode('##', $styles);
$t[0] = null;
foreach($t as $tt) {
  if (isset($tt))
    list($style_id[], $color_name[], $color_html[]) = explode('|', $tt);
}

$cdn_url = 'https://cdn.dtlaprint.com/wp-content/uploads/local/products/'.substr($product_id,0,2).'/';

foreach ($style_id as $s){
	/*
  $photo_url = $cdn_url . $product_id . '-' . $s . '-front.jpg';  echo $photo_url ; echo ' <br />';
  $photo_url = $cdn_url . $product_id . '-' . $s . '-back.jpg';  echo $photo_url ; echo ' <br />';
  $photo_url = $cdn_url . $product_id . '-' . $s . '-side.jpg';  echo $photo_url ; echo ' <br />';
  $photo_url = $cdn_url . $product_id . '-' . $s . '-side-right.jpg';  echo $photo_url ; echo ' <br />';
  //echo '<div style="position:relative">';
  $photo_url = $cdn_url . $product_id . '-' . $s . '-front.jpg';  echo '<img src="'.$photo_url.'" style="width:100px;float:left;" />';
  $photo_url = $cdn_url . $product_id . '-' . $s . '-back.jpg';  echo '<img src="'.$photo_url.'" style="width:100px;float:left;" />';
  $photo_url = $cdn_url . $product_id . '-' . $s . '-side.jpg';  echo '<img src="'.$photo_url.'" style="width:100px;float:left;" />';
  $photo_url = $cdn_url . $product_id . '-' . $s . '-side-right.jpg';  echo '<img src="'.$photo_url.'" style="width:100px;float:left;" />';
  */
	//echo '</div>';
	
  //echo ' <br />';
}
$m1 = $cdn_url . $product_id . '-1-model.jpg'; 
$p1 = $cdn_url . $product_id . '-' . $style_id[0] . '-front.jpg'; 
$p2 = $cdn_url . $product_id . '-' . $style_id[0] . '-back.jpg';
$p3 = $cdn_url . $product_id . '-' . $style_id[0] . '-side.jpg'; 
$p4 = $cdn_url . $product_id . '-' . $style_id[0] . '-side-right.jpg';


?>
<script>
var kcolors_images = [];
	<?php
	foreach ($style_id as $k=>$s){
		echo "kcolors_images['$color_name[$k]'] = [";
		echo "'$cdn_url$product_id-$s-front.jpg',";
		echo "'$cdn_url$product_id-$s-back.jpg',";
		echo "'$cdn_url$product_id-$s-side.jpg',";
		echo "'$cdn_url$product_id-$s-side-right.jpg' ";
		echo " ]; \r\n";
	}
	?>

</script>

<div class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', $wrapper_classes ) ) ); ?>" data-columns="<?php echo esc_attr( $columns ); ?>" style="opacity: 0; transition: opacity .25s ease-in-out;">
	<figure class="woocommerce-product-gallery__wrapper">
		<?php
		if ( $post_thumbnail_id ) {
			//$html = wc_get_gallery_image_html( $post_thumbnail_id, true );
			// kg
			$html .= '<div data-thumb="' . esc_url( $m1 ) . '" data-thumb-alt="' . esc_attr( 'image' ) . '" class="woocommerce-product-gallery__image"><img src="/wp-content/uploads/upload_artwork.png" class="upload_artwork" alt="DTLA Print" /> <img src="'. esc_url( $m1 ) .'" class="dtla-model" alt="' . esc_attr( $product_title ) . '" /></div>';

			$html .= '<div data-thumb="' . esc_url( $p1 ) . '" data-thumb-alt="' . esc_attr( 'image' ) . '" class="woocommerce-product-gallery__image"> <img src="' . esc_url( $p1 ) . '" alt="' . esc_attr( $product_title ) . '" /></div>';
			$html .= '<div data-thumb="' . esc_url( $p2 ) . '" data-thumb-alt="' . esc_attr( 'image' ) . '" class="woocommerce-product-gallery__image"> <img src="' . esc_url( $p2 ) . '" alt="' . esc_attr( $product_title ) . '" /></div>';
			$html .= '<div data-thumb="' . esc_url( $p3 ) . '" data-thumb-alt="' . esc_attr( 'image' ) . '" class="woocommerce-product-gallery__image"> <img src="' . esc_url( $p3 ) . '" alt="' . esc_attr( $product_title ) . '" /></div>';
			$html .= '<div data-thumb="' . esc_url( $p4 ) . '" data-thumb-alt="' . esc_attr( 'image' ) . '" class="woocommerce-product-gallery__image"> <img src="' . esc_url( $p4 ) . '" alt="' . esc_attr( $product_title ) . '" /></div>';

		} else {
			$html  = '<div class="woocommerce-product-gallery__image--placeholder">';
			$html .= sprintf( '<img src="%s" alt="%s" class="wp-post-image" alt="' . esc_attr( $product_id ) . '" />', esc_url( wc_placeholder_img_src( 'woocommerce_single' ) ), esc_html__( 'Awaiting product image', 'woocommerce' ) );
			$html .= '</div>';
		}

		echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id ); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped

		//do_action( 'woocommerce_product_thumbnails' ); // kg: it was showing model image as last (it was in product gallery)

		// JS color switch: $('.kdtla_images li img')[1].src=' url '

		?>
	</figure>
</div>
<?php k2(__FILE__); ?>