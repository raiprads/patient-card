<?php

include_once('encryption.php');


function view_patient_teeth() {

	if ( !wp_verify_nonce( $_REQUEST['nonce'], "view_patient_teeth_nonce")) {
        exit("No naughty business please!");
    }

    $data = $_REQUEST;

    $canvas = @imagecreate(511, 819)
    	or die("Cannot Initialize new GD image stream");
    //$canvas = imagecreatetruecolor(511, 819);
	$main_teeth = imagecreatefrompng( __DIR__ . '/teeth/teeth.png');
	imagecopy($canvas, $main_teeth, 0, 0, 0, 0, 511, 819);

	ob_start();
	imagepng($canvas);
	$imagestring = ob_get_contents();
	ob_end_clean();

	//Base64 Encode
	$encodedData = base64_encode($imagestring);


    if(!empty($encodedData)) {

    	$result['type'] = "success";
    	$result['teeth_data'] = $encodedData;
    }
    
    echo json_encode($result);

   	die();

}

?>