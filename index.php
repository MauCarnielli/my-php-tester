<?php
	$method = $_SERVER['REQUEST_METHOD'];

	if($method == 'POST'){
		$requestBody = file('php://input');
		//$json = json_decode($requestBody);
		var_dump($requestBody[0]);
	}else{
		echo "huuummmm.. Não deu.";
	}	
?>
