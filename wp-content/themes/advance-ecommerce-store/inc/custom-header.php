<?php
/**
 * @package advance-ecommerce-store
 * @subpackage advance-ecommerce-store
 * @since advance-ecommerce-store 1.0
 * Setup the WordPress core custom header feature.
 *
 * @uses advance_ecommerce_store_header_style()
*/

function advance_ecommerce_store_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'advance_ecommerce_store_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1600,
		'height'                 => 400,
		'wp-head-callback'       => 'advance_ecommerce_store_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'advance_ecommerce_store_custom_header_setup' );

if ( ! function_exists( 'advance_ecommerce_store_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see advance_ecommerce_store_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'advance_ecommerce_store_header_style' );
function advance_ecommerce_store_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$custom_css = "
        #header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center;
		}";
	   	wp_add_inline_style( 'advance-ecommerce-store-basic-style', $custom_css );
	endif;
}
endif; // advance_ecommerce_store_header_style