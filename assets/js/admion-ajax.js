
	
	//Whole block counter
	var item_number = 0;

	jQuery( document ).on( 'click', '#add-new-advantage-more', function() {

		var post_id = jQuery(this).data('id');

		var nonce = jQuery(this).data('nonce');


		// It mean the number will be grow, not depending were block removed or not.
		if( jQuery("#accordion .item").length < item_number){
			item_number++;
		}else{
			item_number = jQuery("#accordion .item").length;
		}

		jQuery.ajax({

			url : exteenal_html.ajax_url,
			type : 'post',
			data : {
				action 				: 'callback_function_html',
				post_id 			: post_id,
				item_number 		: item_number,
				rtrrubbery_nonce	: nonce
			},
			success : function( response ) {

					jQuery("#accordion").append( response );
			}

		});

		return false;

	});


	//AJAX for new iamge blick
	jQuery( document ).on( 'click', '#add-new-gallery-image', function() {

		var post_id = jQuery(this).data('id');

		var nonce = jQuery(this).data('nonce');

		var meta = jQuery(this).data('meta');


		jQuery.ajax({

			url : exteenal_html.ajax_url,
			type : 'post',
			data : {
				action 				: 'callback_function_image',
				post_id 			: post_id,
				rtrrubbery_nonce	: nonce,
				meta_option			: meta
			},
			success : function( responseI ) {

					jQuery("#images-block-wrapper").append( responseI );
			}

		});

		return false;

	});
