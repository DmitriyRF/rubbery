<?php

//control access by the way

add_action( 'wp_ajax_nopriv_callback_function_html', 'callback_function_html' ); // executed for guest users

add_action( 'wp_ajax_callback_function_html', 'callback_function_html' ); // executed for logged in users


add_action( 'wp_ajax_nopriv_callback_function_image', 'callback_function_image' ); // executed for guest users

add_action( 'wp_ajax_callback_function_image', 'callback_function_image' ); // executed for logged in users

function callback_function_html() {


	// $love = get_REQUEST_meta( $_REQUEST['post_id'], 'post_love', true );

	// $love++;

	if ( !wp_verify_nonce( $_REQUEST['rtrrubbery_nonce'], THEME_NAME  ) ) {

		return; 
	}

	if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) { 

		//update_REQUEST_meta( $_REQUEST['post_id'], 'post_love', $love );

		$num = $_REQUEST['item_number'];

		?>
			
				<div class="item">
			        <a data-toggle="collapse" data-parent="#accordion" href="#advantage-set-group-<?php echo $num ;?>" aria-expanded="false" aria-controls="advantage-set-group-<?php echo $_REQUEST['item_number'] ;?>">
			        	<h3>Block <strontg>	<?php echo $num ;?></strontg></h3>
			        	<button type="button" class="close" aria-label="Close">
			        	  <span aria-hidden="true">&times;</span>
			        	</button>
			        </a>
				    <div id="advantage-set-group-<?php echo $num; ?>" class="collapse" role="tabpanel" >
						<div class="form-group">
							    <label >Image icon:</label>
							    <select name="rtrrubbery_frontpage_meta[advantages][<?php echo $num; ?>][icon]" class="form-control">
							      	<option value="0" >Choose</option>
							      	<option value="1" >Book icon</option>
							     	<option value="2" >Facebook icon</option>
							      	<option value="3" >Employment icon</option>
							      	<option value="4" >Mail icon</option>
							    </select>
															    
						</div>
						<div class="form-group">
						  <label>Font Awesome icon*   <small>Icon set when field fill</small></label>
						  <input type="text" class="form-control" name="rtrrubbery_frontpage_meta[advantages][<?php echo $num; ?>][fa]" placeholder="example: fa fa-book">
						</div>
						<div class="form-group">
						  <label>Header</label>
						  <input type="text" class="form-control" name="rtrrubbery_frontpage_meta[advantages][<?php echo $num; ?>][header]" placeholder="ABOUT-US">
						</div>
						<div class="form-group">
						  <label>SubHeader</label>
						  <input type="text" class="form-control" name="rtrrubbery_frontpage_meta[advantages][<?php echo $num; ?>][subheader]" placeholder="RTR HISTORY">
						</div>
						<div class="form-group">
						  <label>Description</label>
						  <textarea class="form-control" name="rtrrubbery_frontpage_meta[advantages][<?php echo $num; ?>][desc]" rows="3"></textarea>
						</div>
						<div class="form-group">
						  <label>Button</label>
						  <input type="text" class="form-control" name="rtrrubbery_frontpage_meta[advantages][<?php echo $num; ?>][button]" placeholder="Read More">
						</div>
						<div class="form-group">
						  <label>Link</label>
						  <input type="text" class="form-control" name="rtrrubbery_frontpage_meta[advantages][<?php echo $num; ?>][link]" placeholder="http://www.rtrrubber.ca/">
				    </div>
			  	</div>

		<?php

		die();
	}else{

		wp_redirect( get_permalink( $_REQUEST['post_id'] ) );

		exit();
	}
	
}


function callback_function_image() {


	// $love = get_REQUEST_meta( $_REQUEST['post_id'], 'post_love', true );

	// $love++;

	if ( !wp_verify_nonce( $_REQUEST['rtrrubbery_nonce'], THEME_NAME  ) ) {

		return; 
	}

	if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) { 

		//update_REQUEST_meta( $_REQUEST['post_id'], 'post_love', $love );

		$meta = 	$_REQUEST['meta_option'];

		?>
		
		<div class="image-section">

			<p>
			  	<label >Image Upload</label><br>
			  	<input type="text" name=<?php echo $meta . "[imageslinks][]"; ?>  class="meta-image regular-text" value="">
				<input type="button" class="button image-upload" value="Browse">					
				<span class="remove-gallery-image" aria-label="Close">
			     		<span aria-hidden="true">&times; Remove</span>
			     </span>
			</p>

			<div class="image-preview">
				<img src="" style="max-width: 250px;">
			</div>

		</div>

		<?php

		die();
	}else{

		wp_redirect( get_permalink( $_REQUEST['post_id'] ) );

		exit();
	}
	
}