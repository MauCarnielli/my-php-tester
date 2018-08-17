<?php
	$method = $_SERVER['REQUEST_METHOD'];

	if($method == 'POST'){
		echo "Deu certo esse outro POST!";
	}else{
		echo "huuummmm.. Não deu.";
	}	
?>