(function($) {
    "use strict";

    jQuery(window).on('load', function(){
	    jQuery("[name='update_cart']").removeAttr('disabled');
	});
	jQuery( document.body ).on( 'updated_cart_totals', function(){
	    jQuery("[name='update_cart']").removeAttr('disabled');
	});

    $( document ).on( 'change', '.woocommerce-cart-form input.qty', function() {

		if (greenmart_settings.ajax_update_quantity) { 
			$("[name='update_cart']").trigger('click')
		} 

    });

})(jQuery)