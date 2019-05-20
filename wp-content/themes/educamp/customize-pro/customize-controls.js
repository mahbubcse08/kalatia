( function( api ) {

	// Extends our custom "educamp" section.
	api.sectionConstructor['educamp'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );