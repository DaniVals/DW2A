<?php

	// Me conecto
	$cadena = 'mysql:dbname=pedidos;host=127.0.0.1';
	$bd = new PDO($cadena, "root", "");
	
	// Me hago un select con todas las filas que quiero recuperar
	$res = $bd->query("SELECT * FROM productos");
	
	// Paso las filas a JSON directamente
	$json = json_encode(iterator_to_array($res));
	
	// Lo imprimo para el cliente
	echo $json;