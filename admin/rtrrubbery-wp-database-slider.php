<?php


function wpdb_insert_slider(
								$f_header 					= "Header", 
								$f_description 				= "Description", 
								$f_image 					= "http//:", 
								$f_button		 			= "Read more", 
								$f_link			 			= "http//:"){
    
    global $wpdb;
    // подготавливаем данные   

    $table_name 				= $wpdb->get_blog_prefix() . 'rtrrubbery_sliders';

    // вставляем строку в таблицу
    // true or false
    $insert_return = $wpdb->insert(
         $table_name, 
         array(
        		'header' 				=> $f_header,
        		'description'			=> $f_description,
        		'image' 				=> $f_image,
        		'button' 				=> $f_button,
        		'link' 					=> $f_link
        		), 
        array( '%s', '%s', '%s', '%s', '%s')
    );
}

function wpdb_update_slider(	
								$f_ID 					= "1",
								$f_header 				= "Header", 
								$f_description 			= "Description", 
								$f_image 				= "http//:", 
								$f_button 				= "Read more", 
								$f_link					= "http//:") {

	global $wpdb;
	$table_name 				= $wpdb->get_blog_prefix() . 'rtrrubbery_sliders';
	//number or 0 or false
	$update_return = $wpdb->update( 
		$table_name,
		array( 
        		'header' 				=> $f_header,
        		'description'			=> $f_description,
        		'image' 				=> $f_image,
        		'button' 				=> $f_button,
        		'link' 					=> $f_link
				),
		array( 'ID' => $f_ID ),
		array( '%s', '%s', '%s', '%s', '%s', '%s'),
		array( '%d' )
	);
}


function wpdb_get_slider($f_ID){

	global $wpdb;

	$table_name 				= $wpdb->get_blog_prefix() . 'rtrrubbery_sliders';

	return $wpdb->get_row("SELECT * FROM $table_name WHERE ID = $f_ID", ARRAY_A );
}


function wpdb_get_all_slider( $limit_start = 0, $limit = 0 ){

	global $wpdb;

	$table_name 				= $wpdb->get_blog_prefix() . 'rtrrubbery_sliders';

	if($limit == 0 ){
		$table_object 			= $wpdb->get_results("SELECT * FROM $table_name", ARRAY_A );
	}else{
		$table_object 			= $wpdb->get_results("SELECT * FROM $table_name LIMIT $limit_start, $limit", ARRAY_A );
	}

	return $table_object;
}



function wpdb_delete_slider($f_ID){
	global $wpdb;
	$table_name 				= $wpdb->get_blog_prefix() . 'rtrrubbery_sliders';

	//true or false
	$delete_return = $wpdb->delete( 
		$table_name, 
		array( 'ID' => $f_ID 	), 
		array( '%d' ) 
	);
}