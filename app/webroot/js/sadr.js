$(document).ready(function() {

	$( "#SadrCountyId" ).combobox();

	var cache2 = {},	lastXhr;
	$( "#SadrInstitutionCode" ).autocomplete({
		source: function( request, response ) {
			var term = request.term;
			if ( term in cache2 ) {
				response( cache2[ term ] );
				return;
			}

			lastXhr = $.getJSON( "/facility_codes/autocomplete.json", request, function( data, status, xhr ) {
				cache2[ term ] = data;
				if ( xhr === lastXhr ) {
					response( data );
				}
			});
		},
		select: function( event, ui ) {
			$( "#SadrNameOfInstitution" ).val( ui.item.label );
			$( "#SadrInstitutionCode" ).val( ui.item.value );
			$( "#SadrAddress" ).val( ui.item.addr );
      $( "#SadrInstitutionContact" ).val( ui.item.phone );
			return false;
		}
	});

	var cache3 = {},	lastXhr;
	$( "#SadrNameOfInstitution" ).autocomplete({
		source: function( request, response ) {
			var term = request.term;
			if ( term in cache3 ) {
				response( cache3[ term ] );
				return;
			}

			lastXhr = $.getJSON( "/facility_codes/autocomplete.json", request, function( data, status, xhr ) {
				cache3[ term ] = data;
				if ( xhr === lastXhr ) {
					response( data );
				}
			});
		},
		select: function( event, ui ) {
			$( "#SadrNameOfInstitution" ).val( ui.item.label );
			$( "#SadrInstitutionCode" ).val( ui.item.value );
      		$( "#SadrAddress" ).val( ui.item.addr );
			$( "#SadrInstitutionContact" ).val( ui.item.phone );
			return false;
		}
	})
});