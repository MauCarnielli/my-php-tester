<?php
	$method = $_SERVER['REQUEST_METHOD'];

	if($method == 'POST'){
		$requestBody = file('php://input');
		$json = json_decode($requestBody);
		echo $json->id;
	}else{
		echo "huuummmm.. Não deu.";
	}	
?>
