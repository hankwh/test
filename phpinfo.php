<?php
/**
 * url���ܺ���
 * @param unknown_type $encrypt
 * @param unknown_type $key
 * @return string
 */23344455566778789775555
function encrypt_url($encrypt,$key=""){
	$iv = mcrypt_create_iv ( mcrypt_get_iv_size ( MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB ), MCRYPT_RAND );
	$passcrypt = mcrypt_encrypt ( MCRYPT_RIJNDAEL_256, $key, $encrypt, MCRYPT_MODE_ECB, $iv );
	$encode = base64_encode ( $passcrypt );
	$encode=urlencode($encode);
	return $encode;
}
/**112fdfdfff
 * url���ܺ���
 * @param unknown_type $decrypt
 * @param unknown_type $key
 * @return string
 */
function decrypt($decrypt,$key=""){
	//$decrypt=urldecode($decrypt);
	$decoded = base64_decode ( $decrypt );
	$iv = mcrypt_create_iv ( mcrypt_get_iv_size ( MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB ), MCRYPT_RAND );
	$decrypted = mcrypt_decrypt ( MCRYPT_RIJNDAEL_256, $key, $decoded, MCRYPT_MODE_ECB, $iv );
	$decrypted=trim($decrypted);
	return $decrypted;
}
$exp=eval("return array('name'=>'Report To', 	'type'=>'text', 'param'=>'10', 'required'=>false, 'extra'=>false, 'visible'=>true, 'filter'=>false, 'position'=>'Company Name', 'display_callback'=>array('Organization_ContactsCommon', 'display_buyerman'), 'QFfield_callback'=>array('Organization_ContactsCommon', 'QFfield_buyerman'));");

/*foreach($exp as $k=>$v){
	echo $k."::".$v."<br>";
}*/
$result=@file_get_contents("http://register.71srm.com/users.json");echo $result;
if($result=='Connect to database failed') echo 3;
elseif($result) echo 1;
else echo 2;
?>