<?php	
$cadena_conexion = 'mysql:dbname=pedidos;host=127.0.0.1';
$usuario = 'root';
$clave = '';

try {
    $bd = new PDO($cadena_conexion, $usuario, $clave);		
	
	// Select
	$sql = 'SELECT * FROM `categorias`';
	$categorias = $bd->query($sql);

	foreach ($categorias as $categoria) {
		$array[] = array(
			'Nombre' => $categoria['Nombre']
		);
	}

	$json = json_encode($array);	
	echo $json;
}
catch (PDOException $e) {
	echo 'Error con la base de datos: ' . $e->getMessage();
}