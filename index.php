<?php
	$method = $_SERVER['REQUEST_METHOD'];

	if($method == 'POST'){
		echo "Deu certo esse outro POST!";
		$requestBody = file('php://input');
		$json = json_decode($requestBody);
		echo $json;
	}else{
		echo "huuummmm.. Não deu.";
	}	
?>