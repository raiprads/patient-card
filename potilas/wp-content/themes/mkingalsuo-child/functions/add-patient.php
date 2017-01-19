<?php

include_once('encryption.php');

function add_new_patient() 
{ 

    if ( !wp_verify_nonce( $_REQUEST['nonce'], "add_new_patient_nonce")) {
        exit("No naughty business please!");
    }

    $data = $_REQUEST;  
    $hash = time() . "-" . get_current_user_id(); 

    $lastname = ucwords($data['txtsukunimi']);
    $firstname = ucwords($data['txtetunimi']);

	// Gather post data.
	$post = array(
		'post_type'    => 'patient',
	    'post_title'    => $lastname . ", " . $firstname,
	    'post_content'  => $hash,
	    'post_status'   => 'publish',
	    //'post_author'   => 1, //current user
	);
	 
	// Insert the post into the database.
	$post_id = wp_insert_post( $post );
	 
	add_post_meta( $post_id, 'patient_hktunnus', encrypt_data($data['txthktunnus'], $hash) );
	add_post_meta( $post_id, 'patient_sukunimi', $lastname ); 
	add_post_meta( $post_id, 'patient_etunimi', $firstname ); 
	add_post_meta( $post_id, 'patient_pnumero', encrypt_data($data['txtpnumero'], $hash) );  
	add_post_meta( $post_id, 'patient_sposti', encrypt_data($data['txtsposti'], $hash) );  
	add_post_meta( $post_id, 'patient_kotiosoite', encrypt_data(ucwords($data['txtkotiosoite']), $hash) );
	add_post_meta( $post_id, 'patient_postitoimipaikka', $data['drppostitoimipaikka'] );
	add_post_meta( $post_id, 'patient_postinumero', encrypt_data($data['txtpostinumero'], $hash) );    


    if(!empty($post_id)) {

    	$result['type'] = "success";
    	$result['message'] = "Success! A new patient named (". $lastname . ", " . $firstname .") was added!";
    }
    
    echo json_encode($result);

   	die();

}

?>