<?php 

//Call Latest jQuery from Wordpress
function bwqs_setup_functions() {
	wp_enqueue_script('jquery');
	
	add_theme_support( 'woocommerce' );
	
	
}
add_action('init', 'bwqs_setup_functions');




/**
 * Enqueue scripts and styles
 */
 
 function bwqs_quickstart_scripts_and_styles() {
 
 /*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).*/
	 
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );	
		
//load active js
	
	wp_enqueue_script('bwqs_quickstart_active_js', get_template_directory_uri().'/js/active.js', array('jquery') );
	
	
	// load normalize css
	wp_enqueue_style( 'bwqs_quickstart_normalize_css', get_template_directory_uri() . '/css/normalize.css', false );
	
	
	// load custom css
	wp_enqueue_style( 'bwqs_quickstart_custom_css', get_template_directory_uri() . '/css/custom.css', false );
	
	// load responsive css
	wp_enqueue_style( 'bwqs_quickstart_responsive_css', get_template_directory_uri() . '/css/responsive.css', false );
	
	
	
	
}
add_action( 'wp_enqueue_scripts', 'bwqs_quickstart_scripts_and_styles' );

//Set up theme defaults and register support for various WordPress features

/* Enable support for post-thumbnails */
    add_theme_support( 'post-thumbnails'); // Add it for posts
    
    //load widgets
include_once('inc/menus.php');

include_once('inc/feature_images.php');
include_once('inc/widgets.php');


include_once('inc/wp_bootstrap_navwalker.php');

//for comment 


	
	// Handle cart in header fragment for ajax add to cart
	add_filter('add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');
	
	function woocommerce_header_add_to_cart_fragment( $fragments ) {
		global $woocommerce;
	
		ob_start();
	
		echo '<span class="cart-contents">'.sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> - <?php echo $woocommerce->cart->get_cart_total().'</span>'; 
		$fragments['.cart-contents'] = ob_get_clean();
	
		return $fragments;
	}

	
	





//NUMBER OF PRODICTS TO DISPLAY ON SHOP PAGE

add_filter('loop_shop_per_page', create_function('$cols', 'return 16;'));

// Customize Woocommerce Related Products Output
 function woocommerce_output_related_products() {
 woocommerce_related_products(6,3);       // Display 6 products in 3 columns
 }


 


