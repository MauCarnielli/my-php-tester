<?php
	$method = $_SERVER['REQUEST_METHOD'];

	if($method == 'POST'){
		$requestBody = file_get_contents('php://input');
		echo 'Segundo post deu certo -> '.var_dump($requestBody[1]);
	}else{
		echo "huuummmm.. Não deu.";
	}	
?>
