<?php
	
	$bb_ecommerce_store_theme_color = get_theme_mod('bb_ecommerce_store_theme_color');

	$custom_css = '';

	if($bb_ecommerce_store_theme_color != false){
		$custom_css .='#slider .more-btn a, .topbar, form.woocommerce-product-search button[type="submit"],button.search-submit, #our-service,#comments a.comment-reply-link, #sidebar h3, #sidebar input[type="submit"], #sidebar .tagcloud a:hover,.copyright-wrapper .tagcloud a:hover, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .pagination a:hover, .pagination .current, .copyright, .toggle a,  input.search-submit, #our-products a.button, a.blogbutton-small:hover, .top-header,#menu-sidebar input[type="submit"],.tags p a:hover,.meta-nav:hover{';
			$custom_css .='background-color: '.esc_html($bb_ecommerce_store_theme_color).';';
		$custom_css .='}';
	}
	if($bb_ecommerce_store_theme_color != false){
		$custom_css .='#comments input[type="submit"].submit, nav.woocommerce-MyAccount-navigation ul li{';
			$custom_css .='background-color: '.esc_html($bb_ecommerce_store_theme_color).'!important;';
		$custom_css .='}';
	}
	if($bb_ecommerce_store_theme_color != false){
		$custom_css .='a,.woocommerce-message::before, .post-password-form input[type=password],.cart_icon i, .copyright-wrapper li a:hover, .primary-navigation ul ul a,.tags i,#sidebar ul li a:hover,.metabox a:hover{';
			$custom_css .='color: '.esc_html($bb_ecommerce_store_theme_color).';';
		$custom_css .='}';
	}
	if($bb_ecommerce_store_theme_color != false){
		$custom_css .='.primary-navigation ul ul{';
			$custom_css .='border-color: '.esc_html($bb_ecommerce_store_theme_color).';';
		$custom_css .='}';
	}
	if($bb_ecommerce_store_theme_color != false){
		$custom_css .='.inner-service, .woocommerce-message{';
			$custom_css .='border-top-color: '.esc_html($bb_ecommerce_store_theme_color).';';
		$custom_css .='}';
	}

	// media
	$custom_css .='@media screen and (max-width:1000px) {';
	if($bb_ecommerce_store_theme_color){
	$custom_css .='#contact-info, #menu-sidebar, .primary-navigation li a:hover, .primary-navigation li:hover a,.primary-navigation ul ul ul ul{
	background-image: linear-gradient(-90deg, #000 0%, '.esc_html($bb_ecommerce_store_theme_color).' 120%);
		}';
	}
	$custom_css .='}';

	/*---------------------------Width Layout -------------------*/

	$theme_lay = get_theme_mod( 'bb_ecommerce_store_width_theme_options','Default');
    if($theme_lay == 'Default'){
		$custom_css .='body{';
			$custom_css .='max-width: 100%;';
		$custom_css .='}';
	}else if($theme_lay == 'Container'){
		$custom_css .='body{';
			$custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$custom_css .='}';
	}else if($theme_lay == 'Box Container'){
		$custom_css .='body{';
			$custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$custom_css .='}';
		$custom_css .='.header .logo{';
			$custom_css .='padding-left:20px;';
		$custom_css .='}';
	}

	$show_header = get_theme_mod( 'bb_ecommerce_store_slider_hide_show', true);
	if($show_header == false){
		$custom_css .='#our-service{';
			$custom_css .='margin: 2% 0;';
		$custom_css .='}';
	}

	/*---------------------------Slider Content Layout -------------------*/

	$theme_lay = get_theme_mod( 'bb_ecommerce_store_slider_content_alignment','Right');
    if($theme_lay == 'Left'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$custom_css .='text-align:left; left:10%; right:40%;';
		$custom_css .='}';
	}else if($theme_lay == 'Center'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$custom_css .='text-align:center; left:20%; right:20%;';
		$custom_css .='}';
	}else if($theme_lay == 'Right'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel{';
			$custom_css .='left:40%; right:10%;';
		$custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$theme_lay = get_theme_mod( 'bb_ecommerce_store_slider_image_opacity','0.7');
	if($theme_lay == '0'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0';
		$custom_css .='}';
		}else if($theme_lay == '0.1'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.1';
		$custom_css .='}';
		}else if($theme_lay == '0.2'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.2';
		$custom_css .='}';
		}else if($theme_lay == '0.3'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.3';
		$custom_css .='}';
		}else if($theme_lay == '0.4'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.4';
		$custom_css .='}';
		}else if($theme_lay == '0.5'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.5';
		$custom_css .='}';
		}else if($theme_lay == '0.6'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.6';
		$custom_css .='}';
		}else if($theme_lay == '0.7'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.7';
		$custom_css .='}';
		}else if($theme_lay == '0.8'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.8';
		$custom_css .='}';
		}else if($theme_lay == '0.9'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.9';
		$custom_css .='}';
		}

	/*-------------------------- Button Settings option------------------*/

	$bb_ecommerce_store_button_padding_top_bottom = get_theme_mod('bb_ecommerce_store_button_padding_top_bottom');
	$bb_ecommerce_store_button_padding_left_right = get_theme_mod('bb_ecommerce_store_button_padding_left_right');
	if($bb_ecommerce_store_button_padding_top_bottom != false || $bb_ecommerce_store_button_padding_left_right != false){
		$custom_css .='#slider .more-btn a, #comments .form-submit input[type="submit"],.blogbutton-small{';
			$custom_css .='padding-top: '.esc_html($bb_ecommerce_store_button_padding_top_bottom).'px; padding-bottom: '.esc_html($bb_ecommerce_store_button_padding_top_bottom).'px; padding-left: '.esc_html($bb_ecommerce_store_button_padding_left_right).'px; padding-right: '.esc_html($bb_ecommerce_store_button_padding_left_right).'px; display:inline-block;';
		$custom_css .='}';
	}

	$bb_ecommerce_store_button_border_radius = get_theme_mod('bb_ecommerce_store_button_border_radius');
	if($bb_ecommerce_store_button_border_radius != false){
		$custom_css .='#slider .more-btn a, #comments .form-submit input[type="submit"], .blogbutton-small{';
			$custom_css .='border-radius: '.esc_html($bb_ecommerce_store_button_border_radius).'px;';
		$custom_css .='}';
	}

	/*-----------------------------Responsive Setting --------------------*/

	$stickyheader = get_theme_mod( 'bb_ecommerce_store_responsive_slider',true);
    if($stickyheader == true){
    	$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='#slider{';
			$custom_css .='display:block;';
		$custom_css .='} }';
	}else if($stickyheader == false){
		$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='#slider{';
			$custom_css .='display:none;';
		$custom_css .='} }';
	}

	$metabox = get_theme_mod( 'bb_ecommerce_store_responsive_metabox',true);
    if($metabox == true){
    	$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.metabox{';
			$custom_css .='display:block;';
		$custom_css .='} }';
	}else if($metabox == false){
		$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.metabox{';
			$custom_css .='display:none;';
		$custom_css .='} }';
	}

	$sidebar = get_theme_mod( 'bb_ecommerce_store_responsive_sidebar',true);
    if($sidebar == true){
    	$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='#sidebar{';
			$custom_css .='display:block;';
		$custom_css .='} }';
	}else if($sidebar == false){
		$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='#sidebar{';
			$custom_css .='display:none;';
		$custom_css .='} }';
	}

	/*------------------ Skin Option  -------------------*/

		$theme_lay = get_theme_mod( 'bb_ecommerce_store_background_skin_mode','Transparent Background');
	    if($theme_lay == 'With Background'){
			$custom_css .='.page-box,#sidebar .widget,.woocommerce ul.products li.product, .woocommerce-page ul.products li.product,.front-page-content,.background-img-skin{';
				$custom_css .='background-color: #fff;';
			$custom_css .='}';
			$custom_css .='#sidebar{';
				$custom_css .='background: none;';
			$custom_css .='}';
		}else if($theme_lay == 'Transparent Background'){
			$custom_css .='article.tag-sticky-2,#sidebar, .inner-service,.page-box-single{';
				$custom_css .='background-color: transparent;';
			$custom_css .='}';
		}

	/*------------ Woocommerce Settings  --------------*/

	$bb_ecommerce_store_top_bottom_product_button_padding = get_theme_mod('bb_ecommerce_store_top_bottom_product_button_padding', 10);
	if($bb_ecommerce_store_top_bottom_product_button_padding != false){
		$custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled], .woocommerce .cart .button, .woocommerce .cart input.button, .woocommerce div.product form.cart .button{';
			$custom_css .='padding-top: '.esc_html($bb_ecommerce_store_top_bottom_product_button_padding).'px; padding-bottom: '.esc_html($bb_ecommerce_store_top_bottom_product_button_padding).'px;';
		$custom_css .='}';
	}

	$bb_ecommerce_store_left_right_product_button_padding = get_theme_mod('bb_ecommerce_store_left_right_product_button_padding', 16);
	if($bb_ecommerce_store_left_right_product_button_padding != false){
		$custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled], .woocommerce .cart .button, .woocommerce .cart input.button, .woocommerce div.product form.cart .button{';
			$custom_css .='padding-left: '.esc_html($bb_ecommerce_store_left_right_product_button_padding).'px; padding-right: '.esc_html($bb_ecommerce_store_left_right_product_button_padding).'px;';
		$custom_css .='}';
	}

	$bb_ecommerce_store_product_button_border_radius = get_theme_mod('bb_ecommerce_store_product_button_border_radius', 0);
	if($bb_ecommerce_store_product_button_border_radius != false){
		$custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled], .woocommerce .cart .button, .woocommerce .cart input.button{';
			$custom_css .='border-radius: '.esc_html($bb_ecommerce_store_product_button_border_radius).'px;';
		$custom_css .='}';
	}

	$bb_ecommerce_store_show_related_products = get_theme_mod('bb_ecommerce_store_show_related_products',true);
	if($bb_ecommerce_store_show_related_products == false){
		$custom_css .='.related.products{';
			$custom_css .='display: none;';
		$custom_css .='}';
	}

	$bb_ecommerce_store_show_wooproducts_border = get_theme_mod('bb_ecommerce_store_show_wooproducts_border', false);
	if($bb_ecommerce_store_show_wooproducts_border == true){
		$custom_css .='.products li{';
			$custom_css .='border: 1px solid #cccccc;';
		$custom_css .='}';
	}

	$bb_ecommerce_store_top_bottom_wooproducts_padding = get_theme_mod('bb_ecommerce_store_top_bottom_wooproducts_padding',0);
	if($bb_ecommerce_store_top_bottom_wooproducts_padding != false){
		$custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$custom_css .='padding-top: '.esc_html($bb_ecommerce_store_top_bottom_wooproducts_padding).'px !important; padding-bottom: '.esc_html($bb_ecommerce_store_top_bottom_wooproducts_padding).'px !important;';
		$custom_css .='}';
	}

	$bb_ecommerce_store_left_right_wooproducts_padding = get_theme_mod('bb_ecommerce_store_left_right_wooproducts_padding',0);
	if($bb_ecommerce_store_left_right_wooproducts_padding != false){
		$custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$custom_css .='padding-left: '.esc_html($bb_ecommerce_store_left_right_wooproducts_padding).'px !important; padding-right: '.esc_html($bb_ecommerce_store_left_right_wooproducts_padding).'px !important;';
		$custom_css .='}';
	}

	$bb_ecommerce_store_wooproducts_border_radius = get_theme_mod('bb_ecommerce_store_wooproducts_border_radius',0);
	if($bb_ecommerce_store_wooproducts_border_radius != false){
		$custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$custom_css .='border-radius: '.esc_html($bb_ecommerce_store_wooproducts_border_radius).'px;';
		$custom_css .='}';
	}

	$bb_ecommerce_store_wooproducts_box_shadow = get_theme_mod('bb_ecommerce_store_wooproducts_box_shadow',0);
	if($bb_ecommerce_store_wooproducts_box_shadow != false){
		$custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$custom_css .='box-shadow: '.esc_html($bb_ecommerce_store_wooproducts_box_shadow).'px '.esc_html($bb_ecommerce_store_wooproducts_box_shadow).'px '.esc_html($bb_ecommerce_store_wooproducts_box_shadow).'px #eee;';
		$custom_css .='}';
	}


