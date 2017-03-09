<?php

include_once('encryption.php');

//tab 3 start
function update_patient_tab3() {

    if ( !wp_verify_nonce( $_REQUEST['nonce'], "update_patient_tab3_nonce")) {
        exit("No naughty business please!");
    }

    $data = $_REQUEST;  

    $post_id = $data['post_id'];

    // Gather post data.
	$current_time = current_time('mysql');

	wp_update_post(
		array (
			'ID'            => $post_id,
			'post_date'     => $current_time,
			'post_date_gmt' => get_gmt_from_date($current_time)
		)
	);

	//set tab 2 update info
	add_update_mymeta($post_id, 'tab_3', 1, false );

	add_update_mymeta($post_id, 'patient_chksuupielet', $data['chksuupielet']);
	add_update_mymeta($post_id, 'patient_txtsuupielet', $data['txtsuupielet']);
	add_update_mymeta($post_id, 'patient_chkhuulet', $data['chkhuulet']);
	add_update_mymeta($post_id, 'patient_txthuulet', $data['txthuulet']);
	add_update_mymeta($post_id, 'patient_chkimusolmukkeet', $data['chkimusolmukkeet']);

	add_update_mymeta($post_id, 'patient_txtimusolmukkeet', $data['txtimusolmukkeet']);
	add_update_mymeta($post_id, 'patient_chkpoimut', $data['chkpoimut']);
	add_update_mymeta($post_id, 'patient_txtpoimut', $data['txtpoimut']);
	add_update_mymeta($post_id, 'patient_chkarvet', $data['chkarvet']);
	add_update_mymeta($post_id, 'patient_txtarvet', $data['txtarvet']);

	add_update_mymeta($post_id, 'patient_txtmhuomioitavaa', $data['txtmhuomioitavaa']);
	add_update_mymeta($post_id, 'patient_chkliikkuvuso', $data['chkliikkuvuso']);
	add_update_mymeta($post_id, 'patient_chkliikkuvusv', $data['chkliikkuvusv']);
	add_update_mymeta($post_id, 'patient_chkaristustao', $data['chkaristustao']);
	add_update_mymeta($post_id, 'patient_chkaristustav', $data['chkaristustav']);

	add_update_mymeta($post_id, 'patient_chkrnaksahteluao', $data['chkrnaksahteluao']);
	add_update_mymeta($post_id, 'patient_chkrnaksahteluav', $data['chkrnaksahteluav']);
	add_update_mymeta($post_id, 'patient_inlineSuuhygieniaOptions', $data['inlineSuuhygieniaOptions']);
	add_update_mymeta($post_id, 'patient_inlineLimakalvotOptions', $data['inlineLimakalvotOptions']);
	add_update_mymeta($post_id, 'patient_txtlimakalvotm', $data['txtlimakalvotm']);

	add_update_mymeta($post_id, 'patient_rdovahainenir', $data['rdovahainenir']);
	add_update_mymeta($post_id, 'patient_txtvahainenir', $data['txtvahainenir']);
	add_update_mymeta($post_id, 'patient_rdonormaaliir', $data['rdonormaaliir']);
	add_update_mymeta($post_id, 'patient_txtnormaaliir', $data['txtnormaaliir']);
	add_update_mymeta($post_id, 'patient_rdovoimakasir', $data['rdovoimakasir']);

	add_update_mymeta($post_id, 'patient_txtvoimakasir', $data['txtvoimakasir']);
	add_update_mymeta($post_id, 'patient_rdokiintealimakalvo', $data['rdokiintealimakalvo']);
	add_update_mymeta($post_id, 'patient_txtkiintealimakalvo', $data['txtkiintealimakalvo']);
	add_update_mymeta($post_id, 'patient_rdopaikallinenmuutos', $data['rdopaikallinenmuutos']);
	add_update_mymeta($post_id, 'patient_txtpaikallinenmuutos', $data['txtpaikallinenmuutos']);

	add_update_mymeta($post_id, 'patient_rdolaajamuutos', $data['rdolaajamuutos']);
	add_update_mymeta($post_id, 'patient_txtlaajamuutos', $data['txtlaajamuutos']);
	add_update_mymeta($post_id, 'patient_rdotervelimakalvo', $data['rdotervelimakalvo']);
	add_update_mymeta($post_id, 'patient_txttervelimakalvo', $data['txttervelimakalvo']);
	add_update_mymeta($post_id, 'patient_rdopaikallinenstomatiitti', $data['rdopaikallinenstomatiitti']);

	add_update_mymeta($post_id, 'patient_txtpaikallinenstomatiitti', $data['txtpaikallinenstomatiitti']);
	add_update_mymeta($post_id, 'patient_rdoyleinenstomatiitti', $data['rdoyleinenstomatiitti']);
	add_update_mymeta($post_id, 'patient_txtyleinenstomatiitti', $data['txtyleinenstomatiitti']);
	

    if(!empty($post_id)) {

    	$result['type'] = "success";
    	$result['message'] = "<strong>Muutokset on tallennettu.</strong>";
    }
    
    echo json_encode($result);

   	die();

}
//tab 3 end

// tab 2 start
function update_patient_tab2() {

    if ( !wp_verify_nonce( $_REQUEST['nonce'], "update_patient_tab2_nonce")) {
        exit("No naughty business please!");
    }

    $data = $_REQUEST;  

    $post_id = $data['post_id'];

    // Gather post data.
	$current_time = current_time('mysql');

	wp_update_post(
		array (
			'ID'            => $post_id,
			'post_date'     => $current_time,
			'post_date_gmt' => get_gmt_from_date($current_time)
		)
	);

	//set tab 2 update info
	add_update_mymeta($post_id, 'tab_2', 1, false );

	add_update_mymeta($post_id, 'patient_chkyliherkkyys', $data['chkyliherkkyys']);
	add_update_mymeta($post_id, 'patient_chkreuma', $data['chkreuma']);
	add_update_mymeta($post_id, 'patient_chksjverisuonisairaus', $data['chksjverisuonisairaus']);
	add_update_mymeta($post_id, 'patient_chkvjverenvuototaudit', $data['chkvjverenvuototaudit']);
	add_update_mymeta($post_id, 'patient_chkpsadehoito', $data['chkpsadehoito']);
	
	add_update_mymeta($post_id, 'patient_chkepilepsia', $data['chkepilepsia']);
	add_update_mymeta($post_id, 'patient_chkttauti', $data['chkttauti']);
	add_update_mymeta($post_id, 'patient_txtttauti', $data['txtttauti']);
	add_update_mymeta($post_id, 'patient_chkmsairaudet', $data['chkmsairaudet']);
	add_update_mymeta($post_id, 'patient_txtmsairaudet', $data['txtmsairaudet']);
	
	add_update_mymeta($post_id, 'patient_chklaakitys', $data['chklaakitys']);
	add_update_mymeta($post_id, 'patient_txtlaakitys', $data['txtlaakitys']);
	add_update_mymeta($post_id, 'patient_chksyljeneritys', $data['chksyljeneritys']);
	add_update_mymeta($post_id, 'patient_txtaahhoito', $data['txtaahhoito']);
	add_update_mymeta($post_id, 'patient_txtvuosi', $data['txtvuosi']);
	
	add_update_mymeta($post_id, 'patient_chkaproteesit', $data['chkaproteesit']);
	add_update_mymeta($post_id, 'patient_chkmillaisetyl', $data['chkmillaisetyl']);
	add_update_mymeta($post_id, 'patient_chkmillaisetal', $data['chkmillaisetal']);
	add_update_mymeta($post_id, 'patient_txtvalmistettuv', $data['txtvalmistettuv']);
	add_update_mymeta($post_id, 'patient_txtpohjattuv', $data['txtpohjattuv']);
	
	add_update_mymeta($post_id, 'patient_txtkorjattuv', $data['txtkorjattuv']);
	add_update_mymeta($post_id, 'patient_chkpmptulkonakoon', $data['chkpmptulkonakoon']);
	add_update_mymeta($post_id, 'patient_chkpmptpureskelukykyyn', $data['chkpmptpureskelukykyyn']);
	add_update_mymeta($post_id, 'patient_txtaheproteeseista', $data['txtaheproteeseista']);
	add_update_mymeta($post_id, 'patient_chkpurentaant', $data['chkpurentaant']);
	
	add_update_mymeta($post_id, 'patient_chkpurentapost', $data['chkpurentapost']);
	add_update_mymeta($post_id, 'patient_txtvapaavalimm', $data['txtvapaavalimm']);
	add_update_mymeta($post_id, 'patient_chkpurentaristipur', $data['chkpurentaristipur']);
	add_update_mymeta($post_id, 'patient_txtpurentakorkeusmm', $data['txtpurentakorkeusmm']);

    if(!empty($post_id)) {

    	$result['type'] = "success";
    	$result['message'] = "<strong>Muutokset on tallennettu.</strong>";
    }
    
    echo json_encode($result);

   	die();

}
//tab 2 end

// tab 1 start
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
    	$result['message'] = "<strong>Muutokset on tallennettu.</strong>";
    }
    
    echo json_encode($result);

   	die();

}

// end tab 1

function add_update_mymeta($post_id, $field_name, $data, $encrypt = true) {

	$hash = get_post_field('post_content', $post_id);
	$old_data = get_post_meta( $post_id, $field_name, true);

	//process encryption
	if($encrypt) {
		$data = encrypt_data($data, $hash);
	}

	if($old_data != $data) {		

		if ( ! add_post_meta( $post_id, $field_name, $data, true ) ) { 

			update_post_meta( $post_id, $field_name, $data );
			
		}

	}

}