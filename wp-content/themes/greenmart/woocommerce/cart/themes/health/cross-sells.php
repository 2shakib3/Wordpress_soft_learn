<?php
/**
 * Cross-sells
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product, $woocommerce_loop;

if ( sizeof( $crosssells ) == 0 ) return;

$args = array(
	'post_type'           => 'product',
	'ignore_sticky_posts' => 1,
	'no_found_rows'       => 1,
	'posts_per_page'      => apply_filters( 'woocommerce_cross_sells_total', $posts_per_page ),
	'orderby'             => $orderby,
	'post__in'            => $crosssells,
	'meta_query'          => $meta_query
);

$products = new WP_Query( $args );
$active_theme = greenmart_tbay_get_part_theme();
$woocommerce_loop['columns'] = apply_filters( 'woocommerce_cross_sells_columns', $columns );

if ( $products->have_posts() ) : ?>

	<div class="cross-sells related products widget ">
		<h3 class="widget-title"><span><?php esc_html_e( 'You may be interested in&hellip;', 'greenmart' ) ?></h3>

		<?php //woocommerce_product_loop_start(); ?>

			
			<?php wc_get_template( 'layout-products/'.$active_theme.'/carousel-related.php' , array( 'loop'=>$products,'rows' => '1', 'pagi_type' => 'yes', 'nav_type' => 'yes','columns'=>$woocommerce_loop['columns'],'posts_per_page'=>$products->post_count,'screen_desktop'=>'5','screen_desktopsmall'=>'4','screen_tablet'=>'2','screen_mobile'=>'2' ) ); ?>
			
		<?php //woocommerce_product_loop_end(); ?>

	</div>

<?php endif;

wp_reset_postdata();
