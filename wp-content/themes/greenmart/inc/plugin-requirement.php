<?php 
/***** Active Plugin ********/
require_once( get_template_directory() . '/inc/plugins/class-tgm-plugin-activation.php' );

add_action( 'tgmpa_register', 'greenmart_register_required_plugins' );
function greenmart_register_required_plugins() {
  $plugins[] =(array(
    'name'                     => esc_html__( 'WooCommerce', 'greenmart' ),
      'slug'                     => 'woocommerce',
      'required'                 => true,
  ));

  $plugins[] =(array(
    'name'                     => esc_html__( 'MailChimp', 'greenmart' ),
      'slug'                     => 'mailchimp-for-wp',
      'required'                 =>  true
  ));

  $plugins[] =(array(
    'name'                     => esc_html__( 'Contact Form 7', 'greenmart' ),
      'slug'                     => 'contact-form-7',
      'required'                 => true,
  ));

  $plugins[] =(array(
    'name'                     => esc_html__( 'WPBakery Visual Composer', 'greenmart' ),
    'slug'                     => 'js_composer',
    'required'                 => true,
    'source'         		       => esc_url( 'https://bitbucket.org/devthembay/update-plugin/raw/master/plugins/js_composer.zip' ),
  ));

  $plugins[] =(array(
    'name'                     => esc_html__( 'Tbay Framework For Themes', 'greenmart' ),
    'slug'                     => 'tbay-framework',
    'required'                 => true ,
    'source'         		   => esc_url( 'https://bitbucket.org/devthembay/update-plugin/raw/master/plugins/tbay-framework.zip' ),
  ));

  $plugins[] =(array(
    'name'                     => esc_html__( 'WooCommerce Variation Swatches', 'greenmart' ),
      'slug'                     => 'woo-variation-swatches',
      'required'                 =>  true,
      'source'         		   => esc_url( 'https://downloads.wordpress.org/plugin/woo-variation-swatches.zip' ),
  ));	

  $plugins[] =(array(
    'name'                     => esc_html__( 'YITH WooCommerce Quick View', 'greenmart' ),
      'slug'                     => 'yith-woocommerce-quick-view',
      'required'                 =>  false
  ));	

  $plugins[] =(array(
    'name'                     => esc_html__( 'YITH WooCommerce Frequently Bought Together', 'greenmart' ),
      'slug'                     => 'yith-woocommerce-frequently-bought-together',
      'required'                 =>  false
  ));
  
  $plugins[] =(array(
    'name'                     => esc_html__( 'YITH WooCommerce Wishlist', 'greenmart' ),
      'slug'                     => 'yith-woocommerce-wishlist',
      'required'                 =>  false
  ));

  $plugins[] =(array(
    'name'                     => esc_html__( 'YITH Woocommerce Compare', 'greenmart' ),
        'slug'                     => 'yith-woocommerce-compare',
        'required'                 => false
  ));

  $plugins[] =(array(
    'name'                     => esc_html__( 'Revolution Slider', 'greenmart' ),
    'slug'                     => 'revslider',
    'required'                 => true ,
    'source'         		   => esc_url( 'https://bitbucket.org/devthembay/update-plugin/raw/master/plugins/revslider.zip' ),
  ));

  $config = array();

  tgmpa( $plugins, $config );
}