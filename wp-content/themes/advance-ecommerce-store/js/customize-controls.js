( function( api ) {

	// Extends our custom "advance-ecommerce-store" section.
	api.sectionConstructor['advance-ecommerce-store'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );