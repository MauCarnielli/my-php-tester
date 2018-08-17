<?php
	$method = $_SERVER['REQUEST_METHOD'];

	if($method == 'POST'){
		echo "Deu certo esse outro POST!";
		$requestBody = file_get_contents('php://input');
		$json = json_decode($requestBody);
		$id = $json->id;
		echo "Deu certo. O ID é -> ".$id;
	}else{
		echo "huuummmm.. Não deu.";
	}	
?>