<?php

include_once('encryption.php');

function update_patient_tab1() {

    if ( !wp_verify_nonce( $_REQUEST['nonce'], "update_patient_tab1_nonce")) {
        exit("No naughty business please!");
    }

    $data = $_REQUEST;  

    $lastname = ucwords($data['txtsukunimi']);
    $firstname = ucwords($data['txtetunimi']);
    $post_id = $data['post_id'];

	// Gather post data.
	$post = array(
		'ID'    => $post_id,
	    'post_title'    => $lastname . ", " . $firstname,
	);
	 
	// Insert the post into the database.
	wp_update_post( $post );
	 
	add_update_mymeta($post_id, 'patient_hktunnus', $data['txthktunnus']);
	add_update_mymeta($post_id, 'patient_sukunimi', $lastname, false);
	add_update_mymeta($post_id, 'patient_etunimi', $firstname, false);
	add_update_mymeta($post_id, 'patient_puhkotiin', $data['txtpuhkotiin']);
	add_update_mymeta($post_id, 'patient_sposti', $data['txtsposti']);
 	add_update_mymeta($post_id, 'patient_kotiosoite', ucwords($data['txtkotiosoite']));
 	add_update_mymeta($post_id, 'patient_postitoimipaikka', $data['drppostitoimipaikka'],false);
 	add_update_mymeta($post_id, 'patient_postinumero', $data['txtpostinumero']);
 	add_update_mymeta($post_id, 'patient_ammatti', $data['txtammatti']);
 	add_update_mymeta($post_id, 'patient_tyoosoite', $data['txttyoosoite']);
 	add_update_mymeta($post_id, 'patient_puhtyohon', $data['txtpuhtyohon']);   

    if(!empty($post_id)) {

    	$result['type'] = "success";
    	$result['message'] = "<strong>Record updated!</strong>";
    }
    
    echo json_encode($result);

   	die();

}

function add_update_mymeta($post_id, $field_name, $data, $encrypt = true) {
	
	if(!empty($data)) {

		$hash = get_post_field('post_content', $post_id);
		//$hash = apply_filters('the_content', get_post_field('post_content', $post_id));

		//process encryption
		if($encrypt) {
			$data = encrypt_data($data, $hash);
		}

		if ( ! add_post_meta( $post_id, $field_name, $data, true ) ) { 
			update_post_meta( $post_id, $field_name, $data );
		}

	}

}