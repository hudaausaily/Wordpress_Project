( function( api ) {

	// Extends our custom "pet-food-shop" section.
	api.sectionConstructor['pet-food-shop'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );