<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content-ts">
 *
 * @package advance-ecommerce-store
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'advance-ecommerce-store' ) ); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
  } else {
    do_action( 'wp_body_open' );
  } ?>
  <header role="banner">
    <?php if(get_theme_mod('advance_ecommerce_store_preloader_option',true)){ ?>
      <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
      </div>
    <?php }?>
    <a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e( 'Skip to content', 'advance-ecommerce-store' ); ?></a>
      <div id="responsive-navbar" class="<?php if( get_theme_mod( 'advance_ecommerce_store_sticky_header', false) != '' || get_theme_mod( 'advance_ecommerce_store_responsive_sticky_header', false) != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
          <div class="container">
            <div class="toggle-menu mobile-menu">
              <button onclick="advance_ecommerce_store_resmenu_open()"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','advance-ecommerce-store'); ?></span></button>
            </div>
            <div id="res-sidebar" class="nav sidebar">
              <nav id="primary-site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Responsive Menu', 'advance-ecommerce-store' ); ?>">
                <?php 
                  wp_nav_menu( array( 
                    'theme_location' => 'resposive-menu',
                    'container_class' => 'main-menu-navigation clearfix' ,
                    'menu_class' => 'clearfix',
                    'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                    'fallback_cb' => 'wp_page_menu',
                  ) ); 
                ?>
                <div id="contact-info">
                  <?php get_search_form();?>
                  <?php dynamic_sidebar('social'); ?>
                </div>
                <a href="javascript:void(0)" class="closebtn mobile-menu" onclick="advance_ecommerce_store_resmenu_close()"><i class="far fa-times-circle"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','advance-ecommerce-store'); ?></span></a>
              </nav>
            </div>
          </div>
      </div>
    <div id="header">   
      <div class="top-menu">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-md-6">
              <?php dynamic_sidebar('social'); ?>
            </div>
            <div class="col-lg-7 col-md-6">
              <div id="woomenu-sidebar" class="nav sidebar">
                <nav id="primary-site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Woocommerce Menu', 'advance-ecommerce-store' ); ?>">
                  <?php 
                    wp_nav_menu( array( 
                      'theme_location' => 'woocommerce-menu',
                      'container_class' => 'main-menu-navigation clearfix' ,
                      'menu_class' => 'clearfix',
                      'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                      'fallback_cb' => 'wp_page_menu',
                    ) ); 
                  ?>
                </nav>
              </div>
            </div>
          </div>        
        </div>
      </div>
      <div class="middle-header">
        <div class="container">
          <div class="row">
            <div class="logo col-lg-3 col-md-3">
              <?php if ( has_custom_logo() ) : ?>
                <div class="site-logo"><?php the_custom_logo(); ?></div>
                <?php else: ?>
                <?php $blog_info = get_bloginfo( 'name' ); ?>
                <?php if ( ! empty( $blog_info ) ) : ?>
                  <?php if ( is_front_page() && is_home() ) : ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                  <?php else : ?>
                    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                  <?php endif; ?>
                <?php endif; ?>
                <?php
                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) :
                  ?>
                <p class="site-description">
                  <?php echo esc_html($description); ?>
                </p>
              <?php endif; ?>
              <?php endif; ?>
            </div>
            <div class="col-lg-6 col-md-6">
              <?php if(class_exists('woocommerce')){ ?>
                <?php get_product_search_form()?>
              <?php }?>
            </div>
            <div class="account col-lg-1 col-md-1 col-4">
              <?php if ( is_user_logged_in() ) { ?>
                <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>"><i class="fas fa-sign-in-alt"></i><span class="screen-reader-text"><?php esc_html_e('My Account','advance-ecommerce-store'); ?></span></a>
              <?php } 
              else { ?>
                <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>"><i class="fas fa-user"></i><span class="screen-reader-text"><?php esc_html(the_title()); ?></span></a>
              <?php } ?>
            </div>
            <div class="col-lg-2 col-md-2 col-6 cart_icon ">
              <?php if(class_exists('woocommerce')){ ?>
                <li class="cart_box">
                  <span class="cart-value"> <?php echo wp_kses_data( WC()->cart->get_cart_contents_count() );?></span>
                </li>
                <span class="cart_no">
                  <a class="cart-contents" href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" title="<?php esc_html_e( 'SHOPPING CART','advance-ecommerce-store' ); ?>"><?php esc_html_e( 'SHOPPING CART','advance-ecommerce-store' ); ?><span class="screen-reader-text"><?php esc_attr_e( 'SHOPPING CART','advance-ecommerce-store' );?></span></a>
                </span>
              <?php }?>
            </div>         
          </div>
        </div>
      </div>
      <div class="main-menu <?php if( get_theme_mod( 'advance_ecommerce_store_sticky_header', false) != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>" >
        <div class="container">
          <div id="menu-sidebar" class="nav sidebar">
            <nav id="primary-site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'advance-ecommerce-store' ); ?>">
              <?php 
                wp_nav_menu( array( 
                  'theme_location' => 'primary',
                  'container_class' => 'main-menu-navigation clearfix' ,
                  'menu_class' => 'clearfix',
                  'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                  'fallback_cb' => 'wp_page_menu',
                ) ); 
              ?>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>