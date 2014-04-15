<?php
	
	$url = $_SERVER["HTTP_REFERER"];
	if($_GET['lang']=="MK"){
		$url = str_replace("DE", "MK", $url);
		$url = str_replace("EN", "MK", $url);
	}
	else if($_GET['lang']=="DE"){
		$url = str_replace("MK", "DE", $url);
		$url = str_replace("EN", "DE", $url);
	}
	else if($_GET['lang']=="EN"){
		$url = str_replace("DE", "EN", $url);
		$url = str_replace("MK", "EN", $url);
	}
	header("Location: ".$url);

?>