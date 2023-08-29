<?php
/**
 * The Template for displaying products in a product attribute. Simply includes the archive template - KG edited
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/taxonomy-product-attribute.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     7.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}




wc_get_template( 'archive-product.php' );

/*
$taxonomy = get_taxonomy( 'pa_manufacturer' );
$taxonomy_name = $taxonomy->name;
echo ' t='.$taxonomy_name;
echo '<pre>';
//print_r($taxonomy);

$url = "$_SERVER[REQUEST_URI]";
$parsed_url = parse_url( $url );
$path = $parsed_url['path']; // "/brands/xxx/"
$query = $parsed_url['query']; // "s=aaa"
echo ' p='.$path.' q='.$query;
*/

$brand = get_query_var( 'term' );
$print_type = get_query_var( 'c' );

echo ' ====  brand='.$brand.' c='.$print_type;

?>



