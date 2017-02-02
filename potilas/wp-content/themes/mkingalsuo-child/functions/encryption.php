<?php

/**
 * Function: Add new patient encryption
 * Description: encrypt vital data such as Puhelinnumero, Sähköposti, Kotiosoite
 * @package Patient Card
 * @subpackage mkingalsuo-child
 * @since mkingalsuo-child 1.0
 */

function encrypt_data($string, $password) {

	$encyption_type = "AES-128-CBC";

	$key = get_your_global_keys();
	$password = $password . $key;

	return openssl_encrypt($string, $encyption_type, $password, 0 , "");

}

function decrypt_data($string, $password) {

	$encyption_type = "AES-128-CBC";

	$key = get_your_global_keys();
	$password = $password . $key;

	return openssl_decrypt($string, $encyption_type, $password, 0 , "");
}

function get_your_global_keys() {

	// remember to update this key before running the whole system for security purposes
    $filename = __DIR__ . '/../key/key.txt';
    $fp = @fopen($filename, 'r'); 

    if ($fp) {
    	return fread($fp, filesize($filename));
	}

}

?>