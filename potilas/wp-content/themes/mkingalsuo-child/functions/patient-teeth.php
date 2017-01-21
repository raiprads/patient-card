<?php

include_once('encryption.php');


function view_patient_teeth() {

	if ( !wp_verify_nonce( $_REQUEST['nonce'], "view_patient_teeth_nonce")) {
        exit("No naughty business please!");
    }

    $data = $_REQUEST;

    $canvas = @imagecreatetruecolor(511, 819)
    	or die("Cannot Initialize new GD image stream");
    imagealphablending($canvas, true);
    imagesavealpha($canvas, true);

	$main_teeth = imagecreatefrompng( __DIR__ . '/teeth/teeth.png');
    imagecopy($canvas, $main_teeth, 0, 0, 0, 0, 511, 819);

    $insert_11 = imagecreatefrompng( __DIR__ . '/teeth/pcs/teeth11.png');
    imagecopy($canvas,$insert_11,180,-5,0,0,imagesx($insert_11), imagesy($insert_11));

    imagealphablending($canvas, false);
    imagesavealpha($canvas, true);

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

function save_patient_teeth_values() {

    if ( !wp_verify_nonce( $_REQUEST['nonce'], "save_patient_teeth_values_nonce")) {
        exit("No naughty business please!");
    }

    $data = $_REQUEST;

    if(!empty($data['teethval'])) {
        $teethval = substr($data['teethval'], 0, -1);
        $arr_teeth = explode(',', $teethval);
    } 

    print_r($arr_teeth);

    die();
}

?>