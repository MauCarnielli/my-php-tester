<?php
	$method = $_SERVER['REQUEST_METHOD'];

	if($method == 'POST'){
		$requestBody = file('https://passreset-sap-robot.herokuapp.com/');
		$json = json_decode($requestBody);
		echo $json;
	}else{
		echo "huuummmm.. Não deu.";
	}	
?>