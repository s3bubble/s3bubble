<?php

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL,"https://s3bubbleapi.com/proxy/token");

	curl_setopt($ch, CURLOPT_POST, 1);

	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	    'Authorization: ' . $_COOKIE['Authorization']
	));

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	$key = curl_exec($ch);

	curl_close($ch);

	echo $key;

	die();

?>