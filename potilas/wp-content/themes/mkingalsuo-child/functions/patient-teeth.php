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

    
    // set 1

    #11
    draw_tooth($canvas, 11, 'A', 180,-5, 223, 50);

    #12
    draw_tooth($canvas, 12, 'Z', 131,11, 173, 70);

    #13
    draw_tooth($canvas, 13, 'C', 93, 46, 133, 102);

    #14
    draw_tooth($canvas, 14, 'd', 63, 90, 105, 148);

    #15
    draw_tooth($canvas, 15, 'r', 40, 140, 84, 195);

    #16
    draw_tooth($canvas, 16, 'h', 22, 193, 64, 255);

    #17
    draw_tooth($canvas, 17, 'n', 10, 253, 50, 310);

    #18
    draw_tooth($canvas, 18, 'g', 9, 312, 50, 370);

    // set 2
    
    #21
    draw_tooth($canvas, 21, 'b', 235,-5, 280, 50);

    #22
    draw_tooth($canvas, 22, 'c', 292,13, 330, 70);

    #23
    draw_tooth($canvas, 23, 'z', 324, 50, 368, 108);

    #24
    draw_tooth($canvas, 24, 'x', 350, 92, 390, 148);

    #25
    draw_tooth($canvas, 25, 'r', 380, 140, 423, 198);

    #26
    draw_tooth($canvas, 26, 'h', 397, 195, 445, 255);

    #27
    draw_tooth($canvas, 27, 'x', 407, 256, 450, 314);

    #28
    draw_tooth($canvas, 28, 'd', 404, 315, 450, 374);

    //set 3

    #31
    draw_tooth($canvas, 31, '3', 233,726, 275, 783);

    #32
    draw_tooth($canvas, 32, 'z', 269,714, 312, 773);

    #33
    draw_tooth($canvas, 33, 'n', 302,696, 345, 753);

    #34
    draw_tooth($canvas, 34, 'k', 335,653, 380, 713);

    #35
    draw_tooth($canvas, 35, 'p', 376,596, 418, 655);

    #36
    draw_tooth($canvas, 36, 'n', 402,537, 444, 595);

    #37
    draw_tooth($canvas, 37, 'u', 407, 472, 448, 535);

    #38
    draw_tooth($canvas, 38, 'n', 407, 415, 448, 470);

    // set 4 

    #41
    draw_tooth($canvas, 41, 'x', 196,726, 233, 789);

    #42
    draw_tooth($canvas, 42, 'f', 154,714, 197, 777);

    #43
    draw_tooth($canvas, 43, 'd', 119,700, 160, 753);

    #44
    draw_tooth($canvas, 44, 'v', 88, 656, 128, 713);

    #45
    draw_tooth($canvas, 45, 'x', 55, 607, 95, 665);

    #46
    draw_tooth($canvas, 46, 'n', 30, 547, 65, 600);

    #47
    draw_tooth($canvas, 47, 'x', 14, 482, 55, 540);

    #48
    draw_tooth($canvas, 48, 'n', 15, 413, 55, 470);

       
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

function draw_tooth($canvas, $tooth_num, $text, $tooth_x, $tooth_y, $text_x, $text_y) {
    // Set Text to Be Printed On Image
    $text = strtoupper($text);
    $font_path =  __DIR__ . '/teeth/lemonmilk.ttf';

    $insert_tooth = imagecreatefrompng( __DIR__ . '/teeth/pcs/teeth'. $tooth_num .'.png');
    imagecopy($canvas,$insert_tooth,$tooth_x,$tooth_y,0,0,imagesx($insert_tooth), imagesy($insert_tooth));

    // Allocate A Color For The Text
    $white = imagecolorallocate($canvas, 255, 0, 0);
    imagettftext($canvas, 20, 0, $text_x, $text_y, $white, $font_path, $text);

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