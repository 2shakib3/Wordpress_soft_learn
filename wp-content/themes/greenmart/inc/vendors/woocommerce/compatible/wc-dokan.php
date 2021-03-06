<?php

if(!class_exists('WeDevs_Dokan')) return;

/*Get title My Account in top bar mobile*/
if ( ! function_exists( 'greenmart_tbay_wc_dokan_get_title_mobile' ) ) {
    function greenmart_tbay_wc_dokan_get_title_mobile( $title = '') {

        if( dokan_is_store_page() ) {
            $store_user     = dokan()->vendor->get( get_query_var( 'author' ) );
            $title          = $store_user->get_shop_name();
        }

        return $title;
    }
    add_filter( 'greenmart_get_filter_title_mobile', 'greenmart_tbay_wc_dokan_get_title_mobile' );
}

/**
 * dashboard_nav_common_link
 *
 * @param $common_links
 */
if( ! function_exists( 'greenmart_dashboard_nav_common_link' ) ) {
    function greenmart_dashboard_nav_common_link( $common_links ) { 

        if ( ! function_exists( 'dokan_get_store_url' ) && ! function_exists( 'dokan_get_navigation_url' ) ) {
            return $common_links;
        }

        $common_links = sprintf(
            '<li class="dokan-common-links dokan-clearfix">' .
            '<a href="%s" >%s</a >' .
            '<a href="%s" >%s</a >' .
            '<a href="%s" >%s</a >' .
            '</li>',
            esc_url( dokan_get_store_url( get_current_user_id() ) ),
            esc_html__( 'Visit Store', 'greenmart' ),
            esc_url( dokan_get_navigation_url( 'edit-account' ) ),
            esc_html__( 'Edit Account', 'greenmart' ),
            esc_url( wp_logout_url( home_url() ) ),
            esc_html__( 'Log out', 'greenmart' )

        );

        return $common_links;
    }
    add_filter( 'dokan_dashboard_nav_common_link', 'greenmart_dashboard_nav_common_link', 10 );
}

if(!function_exists('greenmart_dokan_price_kses')){
    function greenmart_dokan_price_kses() {
        $array = array(
            'span' => array(
                'data-product-id' => array(),
                'class' => array(),
            ),
            'ins' => array(),
            'del' => array(),
        );

        return $array;
    }
    add_filter('dokan_price_kses', 'greenmart_dokan_price_kses', 100, 2);
}

if(!function_exists('greenmart_dokan_vendor_name')){
    function greenmart_dokan_vendor_name() {
        $active = greenmart_tbay_get_config('show_vendor_name', true);

        if( !$active && !is_singular( 'product' ) ) return;

        global $product;
        $author_id = get_post_field( 'post_author', $product->get_id() );
        $author    = get_user_by( 'id', $author_id );
        if ( empty( $author ) ) {
            return;
        }

        $shop_info = get_user_meta( $author_id, 'dokan_profile_settings', true );
        $shop_name = $author->display_name;
        if ( $shop_info && isset( $shop_info['store_name'] ) && $shop_info['store_name'] ) {
            $shop_name = $shop_info['store_name'];
        }

        $sold_by_text = apply_filters( 'vendor_sold_by_text', esc_html__( 'Sold by:', 'greenmart' ) );
        ?>
        <div class="sold-by-meta sold-dokan">
            <span class="sold-by-label"><?php echo trim($sold_by_text); ?> </span>
            <a href="<?php echo esc_url( dokan_get_store_url( $author_id ) ); ?>"><?php echo esc_html( $shop_name ); ?></a>
        </div>

        <?php
    }

    add_action( 'woocommerce_after_shop_loop_item_title', 'greenmart_dokan_vendor_name', 0 );
    add_action( 'woocommerce_single_product_summary', 'greenmart_dokan_vendor_name', 5 );
}

// Number of products per row
if ( !function_exists('greenmart_dokan_set_columns_more_from_seller_tab') ) {
    function greenmart_dokan_set_columns_more_from_seller_tab($number) {

        if( isset($_GET['seller_tab_columns']) && is_numeric($_GET['seller_tab_columns']) ) {
            $value = $_GET['seller_tab_columns']; 
        } else {
          $value = greenmart_tbay_get_config('seller_tab_columns');          
        }

        if ( in_array( $value, array(1, 2, 3, 4, 5, 6) ) ) {
            $number = $value;
        }
        return $number;
    }
}

if ( !function_exists('greenmart_dokan_set_per_page_more_from_seller_tab') ) {
    function greenmart_dokan_set_per_page_more_from_seller_tab($number) {

        if( isset($_GET['seller_tab_per_page']) && is_numeric($_GET['seller_tab_per_page']) ) {
            $value = $_GET['seller_tab_per_page']; 
        } else {
            $value = greenmart_tbay_get_config('seller_tab_per_page');          
        }

        if ( is_numeric( $value ) && $value ) {
            $number = absint( $value );
        }
        return $number;
    }
    add_filter('greenmart_dokan_set_per_page_seller_tab', 'greenmart_dokan_set_per_page_more_from_seller_tab', 10, 1);
}

/**
 * Set More products from seller tab
 *
 * on Single Product Page
 *
 * @since 2.5
 * @param array $tabs
 * @return int
 */
if ( function_exists('dokan_set_more_from_seller_tab') &&  !function_exists('greenmart_dokan_set_more_from_seller_tab') ) {
    function greenmart_dokan_set_more_from_seller_tab( $tabs ) {
        if ( check_more_seller_product_tab() ) {
            $tabs['more_seller_product'] = array(
                'title'     => esc_html__( 'More Products', 'greenmart' ),
                'priority'  => 99,
                'callback'  => 'greenmart_dokan_get_more_products_from_seller',
            );
        }

        return $tabs;
    }
    remove_action( 'woocommerce_product_tabs', 'dokan_set_more_from_seller_tab', 10 );
    add_action( 'woocommerce_product_tabs', 'greenmart_dokan_set_more_from_seller_tab', 10 );

}

if ( !function_exists('greenmart_dokan_get_more_products_from_seller') ) {
    function greenmart_dokan_get_more_products_from_seller( $seller_id = 0, $posts_per_page = 6 ) {
        global $product, $post;

        if ( $seller_id == 0 ) {
            $seller_id = $post->post_author;
        }

        if ( ! abs( $posts_per_page ) ) {
            $posts_per_page = apply_filters( 'greenmart_dokan_set_per_page_seller_tab', 4 );
        }

        $args = array(
            'post_type'      => 'product',
            'posts_per_page' => $posts_per_page,
            'orderby'        => 'rand',
            'post__not_in'   => array( $post->ID ),
            'author'         => $seller_id,
        );

        $products = new WP_Query( $args );

        if ( $products->have_posts() ) {

            add_filter('loop_shop_columns', 'greenmart_dokan_set_columns_more_from_seller_tab', 10, 1);
            woocommerce_product_loop_start();

            while ( $products->have_posts() ) {
                $products->the_post();
                wc_get_template_part( 'content', 'product' );
            }

            woocommerce_product_loop_end();
        } else {
            esc_html_e( 'No product has been found!', 'greenmart' );
        }

        wp_reset_postdata();
    }
}


if(!function_exists('greenmart_dokan_get_number_of_products_of_vendor')){
    function greenmart_dokan_get_number_of_products_of_vendor() {

        if( !greenmart_woo_is_vendor_page() ) return;

        $author_id = get_post_field( 'post_author', get_the_id() );
        $author    = get_user_by( 'id', $author_id );
        if ( empty( $author ) ) {
            return;
        }

        $vendor          = dokan()->vendor->get( $author_id );
        $vendor_products = $vendor->get_products();

        $total = $vendor_products->found_posts;

        $per_page   = intval( get_query_var( 'posts_per_page' ) );
        $current    = (get_query_var('paged')) ? intval( get_query_var('paged') ) : 1;

        echo '<p class="woocommerce-result-count result-vendor">';

        if ( $total <= $per_page || -1 === $per_page ) {
            /* translators: %d: total results */
            printf( _n( 'Showing the single result', 'Showing all %d results', $total, 'greenmart' ), $total );
        } else {
            $first = ( $per_page * $current ) - $per_page + 1;
            $last  = min( $total, $per_page * $current );
            /* translators: 1: first result 2: last result 3: total results */
            printf( _nx( 'Showing the single result', 'Showing %1$d&ndash;%2$d of %3$d results', $total, 'with first and last result', 'greenmart' ), $first, $last, $total );
        }

        echo '</p>';
    }
    add_action( 'woocommerce_before_shop_loop', 'greenmart_dokan_get_number_of_products_of_vendor' , 20 );
}


if(!function_exists('greenmart_dokan_add_breadcrumb_vendor_page')){
    function greenmart_dokan_add_breadcrumb_vendor_page() {
        

        if( !greenmart_woo_is_vendor_page() ) return;

        if( !greenmart_tbay_get_config('show_product_breadcrumbs', true) ) {
            remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
        } else {
            add_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 30 );
        }

        
    }
    add_action( 'woocommerce_before_main_content', 'greenmart_dokan_add_breadcrumb_vendor_page' , 5 );
}


/*Fix dokan pro review*/
if(!function_exists('greenmart_dokan_pro_add_clearfix')){
    function greenmart_dokan_pro_add_clearfix( ) {
        if( get_query_var( 'store_review' )  ) {
            echo '<div class="dokan-clearfix"></div>';
        }
    }
    add_action( 'woocommerce_after_main_content', 'greenmart_dokan_pro_add_clearfix' , 10 );
}
