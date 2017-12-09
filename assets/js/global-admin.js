	// 		DOM ready
jQuery( document ).ready(function($) {
	// Instantiates the variable that holds the media library frame.
	var file_frame, meta_image_preview, meta_image;
	$("#poststuff").on('click', '.image-upload', function( event ){

		meta_image_preview = $(this).parent().parent().children('.image-preview');
		meta_image = $(this).parent().children('.meta-image');
		event.preventDefault();

		// If the media frame already exists, reopen it.
		if ( file_frame ) {
			// Open frame
			file_frame.open();
			return;
		}

		// Create the media frame.
		file_frame = wp.media.frames.file_frame = wp.media({
			title: 'Select a image to upload',
			button: {
				text: 'Use this image',
			},
			multiple: false	// Set to true to allow multiple files to be selected
		});

		// When an image is selected, run a callback.
		file_frame.on( 'select', function() {

			// We set multiple to false so only get one image from the uploader
			media_attachment = file_frame.state().get('selection').first().toJSON();

			// Do something with attachment.id and/or attachment.url here
			// meta_image.val(media_attachment.url);
			meta_image.val(media_attachment.id);
			meta_image_preview.children('img').attr('src', media_attachment.url);
		});
			// Finally, open the modal
		file_frame.open();

	});

		//	Add event listener for remove button
	jQuery("#accordion").on( "click", ".close", function() {

		jQuery( this ).parents(".item").remove();
		
	});



	jQuery("#poststuff").on('click', '.remove-gallery-image', function(event) {

		event.preventDefault();
		jQuery( this ).parents(".image-section").remove(".image-section");

	});

});
//		Page ready
jQuery( window ).load(function() {

});
