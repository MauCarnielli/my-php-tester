<?php
	$method = $_SERVER['REQUEST_METHOD'];

	if($method == 'POST'){
		echo "Deu certo esse outro POST!";
		$requestBody = file_get_contents($_POST);
		echo $requestBody;
	}else{
		echo "huuummmm.. Não deu.";
	}	
?>