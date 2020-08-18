<?php

	$peso = $_GET["peso"];
	$altura = $_GET["altura"];
	
	$resultado = $peso / ($altura * $altura);
	
	echo "Resultado eh: $resultado";
?>