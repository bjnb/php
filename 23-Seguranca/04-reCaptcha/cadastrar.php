<?php 

$email = $_POST['email'];

//var_dump($_POST);

$ch = curl_init();

$options = array(
	CURLOPT_URL => "https://www.google.com/recaptcha/api/siteverify",
	CURLOPT_SSL_VERIFYHOST => 0,
	CURLOPT_SSL_VERIFYPEER => 0,
	CURLOPT_POSTFIELDS => http_build_query(array(
		'secret' => "6LdzKTsUAAAAAGxWqDwAWxI107wivly0rAVKJpsu",
		'response' => $_POST['g-recaptcha-response'],
		'remoteip' => $_SERVER['REMOTE_ADDR']
	)),
	CURLOPT_RETURNTRANSFER => true
);

curl_setopt_array($ch, $options);

$recaptcha = json_decode(curl_exec($ch), true);

curl_close($ch);

if ($recaptcha['success']) {
	echo 'OK '.$_POST['email'];
} else {
	header("Location: exemplo-01.php");
}

 ?>