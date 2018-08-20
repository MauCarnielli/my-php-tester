<?php
	$method = $_SERVER['REQUEST_METHOD'];

	if($method == 'POST'){
		$requestBody = file_get_contents('php://input');
		$json = json_decode(var_dump($requestBody[0]));
		echo 'Segundo post deu certo -> '.var_dump($requestBody[0]);
		echo 'Será? -> '.$json;
	}else{
		echo "huuummmm.. Não deu.";
	}	
?>