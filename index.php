<?php
	$method = $_SERVER['REQUEST_METHOD'];

	if($method == 'POST'){
		$requestBody = file('php://input');
		$json = json_decode($requestBody);
		echo 'Segundo post deu certo';
		var_dump($requestBody);
	}else{
		echo "huuummmm.. Não deu.";
	}	
?>