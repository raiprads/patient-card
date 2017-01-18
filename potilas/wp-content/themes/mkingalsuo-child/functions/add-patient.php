<?php

function add_new_patient() 
{ 

    if ( !wp_verify_nonce( $_REQUEST['nonce'], "add_new_patient_nonce")) {
        exit("No naughty business please!");
    }  

    $result['type'] = "success";
    $result['vote_count'] = $_REQUEST['nonce'];
    
    echo json_encode($result);

   die();

}

?>