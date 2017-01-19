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

	return openssl_encrypt($string, $encyption_type, $password, 0 , "");

}

function decrypt_data($string, $password) {

	$encyption_type = "AES-128-CBC";

	return openssl_decrypt($string, $encyption_type, $password, 0 , "");
}

?>