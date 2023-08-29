<?php

/* Function to enqueue stylesheet from parent theme */

function child_enqueue__parent_scripts() {

wp_enqueue_style( 'style-parent', get_template_directory_uri().'/style.css' );
wp_enqueue_style( 'style-child', get_stylesheet_directory_uri().'/style.css' );
wp_enqueue_script( 'script-gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js', array(), '1.0.0', true );
wp_enqueue_script( 'script-scroll', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/ScrollTrigger.min.js', array('script-gsap'), '1.0.0', true );
wp_enqueue_script( 'script-app', get_stylesheet_directory_uri() . '/js/app.js', array('jquery'), '1.0.0', true );


}

add_action( 'wp_enqueue_scripts', 'child_enqueue__parent_scripts');

//Konrad - disable WC zoom
if (!function_exists('k_disable_wc_zoom')):
add_action( 'wp', 'k_disable_wc_zoom', 99 );
function k_disable_wc_zoom() {
	remove_theme_support( 'wc-product-gallery-zoom' );
}
endif;


//Konrad: template file name - temp
if (!function_exists('k1')):
function k1($a)  {
	$cf = explode('/',$a); $cf2 = $cf[sizeof($cf)-1]; echo '<!-- kstart: '.$cf2.' -->'; 
}
endif;

if (!function_exists('k2')):
function k2($a)  {
	$cf = explode('/',$a); $cf2 = $cf[sizeof($cf)-1]; echo '<!-- kend: '.$cf2.' -->'; 
}
endif;


/* Konrad - enable custom fields in products after ACF */
add_filter('acf/settings/remove_wp_meta_box', '__return_false');


/* Konrad  - testing taxonomy routing - removed for now */



/* Konrad - new tabs */

if (!function_exists('k_woo_tabs')):
add_filter( 'woocommerce_product_tabs', 'k_woo_tabs', 98 );
function k_woo_tabs( $tabs ) {

	$tabs['additional_information']['title'] = __( 'Add. info' );	// Rename the additional information tab
	$tabs['description']['title'] = __( 'Details' );	// Rename the additional information tab

	
	$tabs['description']['priority'] = 10;			// Description first
	$tabs['shipping_tab']['priority'] = 20;	
	$tabs['artwork_tab']['priority'] = 30;	
	$tabs['additional_information']['priority'] = 40;	// Additional information 4th, if not hidden

	unset( $tabs['additional_information'] );  	// Remove the additional information

	// new shipping tab
	$tabs['shipping_tab'] = array(
		'title' 	=> __( 'Shipping & Delivery', 'woocommerce' ),
		'priority' 	=> 11,
		'callback' 	=> 'woo_new_product_tab_shipping_content'
	);

	// new artwork tab
	$tabs['artwork_tab'] = array(
		'title' 	=> __( 'Artwork', 'woocommerce' ),
		'priority' 	=> 12,
		'callback' 	=> 'woo_new_product_tab_artwork_content'
	);

	return $tabs;
}
endif;


/* Konrad - content for new product tabs */

function woo_new_product_tab_shipping_content() {

	// Load the template.
	get_template_part('woocommerce/single-product/tabs/dtlashipping');  
	
}


function woo_new_product_tab_artwork_content() {

	// Load the template.
	get_template_part('woocommerce/single-product/tabs/dtlaartwork');  
	
}




/* SANJA functions **** */




function reading_time_fun() {
	$content = get_post_field( 'post_content', $post->ID );
	$word_count = str_word_count( strip_tags( $content ) );
	$readingtime = ceil($word_count / 200);
	$timer = " min Read";
	$totalreadingtime = $readingtime . $timer;

	return $totalreadingtime;
}

add_shortcode('read-time-short', 'reading_time_fun');
//add_shortcode('dtla-color-short', 'k_colors');
add_shortcode('dtla-color-short', 'k_colors2'); //kg

// for colors in related products
function k_colors2() {
	global $product;
	$styles = '';

    if (null !== get_post_custom_values('sizes') && null !== get_post_custom_values('styles'))
        $styles = get_post_custom_values('styles')[0];
        
        //print_r(explode('##', $styles));echo ' <br />';
        if (strlen($styles)>2) {
			$t = explode('##', $styles);
			$t[0] = null;
			foreach($t as $tt) {
			if (isset($tt))
				list($style_id[], $color_name[], $color_html[]) = explode('|', $tt);
			}
			//print_r($style_id); print_r($color_name); print_r($color_html);
			
				foreach($color_html as $k=>$co) {
					$sel = '';
					
					echo '<span class="kcolor_box " style="background-color:#'. $co . '" data="'.$color_name[$k] .'" ></span>';
					if ($k>15) { 
						echo '<span class="kcolor_box_plus " style="width: 21px; line-height: 9px;font-size: 18px;"  title="and many more" > + </span>'; 
						break; 
					}
					
				}
		}
}



add_action( 'woocommerce_before_shop_loop_item_title', 'custom_after_title' );
function custom_after_title() {
	global $product;
	
	$product_id = $product->get_id();
	$cat = wp_get_post_terms($product_id, 'brands', array('fields' => 'names'));
	echo '<div class="dtla-meta-box">';
	// this causing error in the front end.. why it is here?
	//if( !empty($cat[0]) ){
    //   echo '<div class="dtla-cat-box">'.$cat[0].'</div>';
   // }
	echo '<div class="dtla-sku-box">'. $product->get_sku() .'</div>';
	echo '</div>';
	
}

add_action( 'woocommerce_after_shop_loop_item_title', 'pro_color_display_below_title', 2 );
function pro_color_display_below_title(){
    global $product;
	echo '<div class="dtla-color-box">';
	echo do_shortcode('[dtla-color-short]');
	echo '</div>';

}

function year_shortcode() {
	$year = date('Y');
	return $year;
}
add_shortcode('year_updated', 'year_shortcode');

add_shortcode('brand-sku-short', 'custom_after_title');







//change default search to product search

function my_search_filter($query) {
    if ( $query->is_search && ! is_admin() ) {
        $query->set( 'post_type', 'product' );
        $query->is_post_type_archive = true;
    }
}
add_filter('pre_get_posts','my_search_filter', 9);



// Shortcode to output custom PHP in Elementor
function dtla_logout( $atts ) {
	get_template_part('dtlalogout');      
}
add_shortcode( 'dtla_logout_link', 'dtla_logout');

// Shortcode to output custom PHP in Elementor - product faq
function product_faq( $atts ) {
	get_template_part('productfaq');      
}
add_shortcode( 'dtla_product_faq', 'product_faq');



add_filter( 'woocommerce_order_item_get_formatted_meta_data', 'unset_specific_order_item_meta_data', 10, 2);

function unset_specific_order_item_meta_data($formatted_meta, $item){
    // Only on emails notifications
    $is_resend = isset($_POST['wc_order_action']) ?  wc_clean( wp_unslash( $_POST['wc_order_action'] ) ) === 'send_order_details' : false;

    if ( !$is_resend && (is_admin() || is_wc_endpoint_url() ) ) {
      return $formatted_meta;
    }

    foreach( $formatted_meta as $key => $meta ){
        if( in_array( $meta->key, array('Artwork Positions', 'color 1 html', 'Artwork 1 preview', 'Artwork 1 files', 'user session' ) ) )
            unset($formatted_meta[$key]);
    }
    return $formatted_meta;
}


// In your custom plugin or child theme's functions.php or equivalent file
add_action('wp_ajax_send_email', 'send_email_callback');
add_action('wp_ajax_nopriv_send_email', 'send_email_callback');

function send_email_callback() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve the form data
        $sendName = sanitize_text_field($_POST['dataName']);
        $sendEmail = sanitize_text_field($_POST['dataEmail']);
        $sendPhone = sanitize_text_field($_POST['dataPhone']);
        $sendCompany = sanitize_text_field($_POST['dataCompany']);

        // Email configuration
        $to = 'sales@dtlaprint.com';
        $subject = 'Quote Form Submission';
        $message = "Name: $sendName\nEmail: $sendEmail\nPhone: $sendPhone\nCompany Name: $sendCompany";
        $headers = "From: sales@dtlaprint.com";

        // Send the email
        if (wp_mail($to, $subject, $message, $headers)) {
            echo "Email sent successfully";
        } else {
            echo "Error sending email";
        }
    }
    wp_die(); // Required to end the AJAX request
}


// Enqueue JavaScript file and localize it
function enqueue_custom_script() {
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/js/custom-script.js', array('jquery'), '1.0', true);

    // Localize the script with the AJAX URL
    wp_localize_script('custom-script', 'custom_script_params', array(
        'ajax_url' => admin_url('admin-ajax.php')
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_custom_script');




//apply_filters( 'acf/format_value', $value, $post_id, $field );



add_action( 'woocommerce_view_order', 'order_pay_button' );
function order_pay_button( $order_id ){
    // Get an instance of the `WC_Order` Object
    $order = wc_get_order( $order_id );

    if ( $order->get_status() == "processing" ) {
        printf(
            '<a class="woocommerce-button button pay" href="%s/order-pay/%s/?pay_for_order=true&key=%s">%s</a>',
            wc_get_checkout_url(), $order_id, $order->get_order_key(), __("Pay for this order", "woocommerce")
        );
    }
}







	
//add_action( 'template_redirect', 'my_redirect_if_user_not_logged_in' );

function my_redirect_if_user_not_logged_in() {
    if ( ! is_user_logged_in() && is_page( 'account' ) && strpos( $_SERVER['REQUEST_URI'], 'lost-password' ) === false ) {
        wp_safe_redirect( '/login/' );
        exit;
    }
}



// Allow WooCommerce existing customers to checkout without being logged in (allow orders from existing customers in WooCommerce without logging in)
function your_custom_function_name( $allcaps, $caps, $args ) {
	if ( isset( $caps[0] ) ) {
		switch ( $caps[0] ) {
		case 'pay_for_order' :
		$order_id = isset( $args[2] ) ? $args[2] : null;
		$order = wc_get_order( $order_id );
		$user = $order->get_user();
		$user_id = $user->ID;
		if ( ! $order_id ) {
		  $allcaps['pay_for_order'] = true;
		  break;
		}

		$order = wc_get_order( $order_id );

		if ( $order && ( $user_id == $order->get_user_id() || ! $order->get_user_id() ) ) {
		  $allcaps['pay_for_order'] = true;
		}
		break;
		}
	}
	return $allcaps;
}
add_filter( 'user_has_cap', 'your_custom_function_name', 10, 3 );

add_filter( 'woocommerce_checkout_posted_data', 'ftm_filter_checkout_posted_data', 10, 1 );
function ftm_filter_checkout_posted_data( $data ) {
	$email = $data['billing_email'];	
	if ( is_user_logged_in() ) {
	} else {
		if (email_exists( $email)){
			$user = get_user_by( 'email', $email );
			if ($user){
				$user_id = $user->ID;
				wc_set_customer_auth_cookie($user_id);
				session_start();
				$_SESSION['p33'] = "133";			
				$_SESSION['u'] = $user_id;			
				
			} else {
				$user_id = false;
			}
		}
	}
    return $data;
}

add_action( 'woocommerce_new_order', 'clearuser' );
function clearuser($data) {
	
	if ($_SESSION['p33']==133){
		//WC()->session->set('pp1',"0");
		nocache_headers();
		wp_clear_auth_cookie();		
		
		$yourSession= WP_Session_Tokens::get_instance($_SESSION['u']);
		$yourSession->destroy_all();		
		
		$_SESSION['p33']='';
		$_SESSION['u']='';
	}
}

//End Allow Woocommerce Order Pay Without LogIn


add_filter( 'woocommerce_order_email_verification_required', '__return_false' );



//remove nofollow from add to cart

add_filter( 'woocommerce_loop_add_to_cart_args', 'remove_rel', 10, 2 );
function remove_rel( $args, $product ) {
   unset( $args['attributes']['rel'] );
   return $args;
}





//remove product pages from 'remove unused css'


/**
 * Disable RUCSS on WooCommerce product pages
 */
function custom_no_rucss_for_product_pages( $filter ) {
	if ( function_exists( 'is_product' ) && is_product() ) {
		return false;
	}
	return $filter;
}
//add_filter( 'pre_get_rocket_option_remove_unused_css', 'custom_no_rucss_for_product_pages' );