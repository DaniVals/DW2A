<?php	
$cadena_conexion = 'mysql:dbname=pedidos;host=127.0.0.1';
$usuario = 'root';
$clave = '';

try {
    $bd = new PDO($cadena_conexion, $usuario, $clave);		
	
	// Select
	$sql = 'SELECT * FROM `restaurantes`';
	$restaurantes = $bd->query($sql);

	foreach ($restaurantes as $resta) {
		$array[] = array(
			'Correo' => $resta['Correo'],
			'Clave' => $resta['Clave'],
			'Ciudad' => $resta['Ciudad'],
			'Direccion' => $resta['Direccion'],
		);
	}

	$json = json_encode($array);	
	echo $json;
}
catch (PDOException $e) {
	echo 'Error con la base de datos: ' . $e->getMessage();
}