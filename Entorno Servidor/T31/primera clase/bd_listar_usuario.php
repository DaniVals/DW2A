<html>
    <head>
    </head>
    <body>

<?php
$cadena_conexion = 'mysql:dbname=empresa;host=127.0.0.1';
$usuario = 'root';
$clave = '';

try {
    $bd = new PDO($cadena_conexion, $usuario, $clave);		
	
	// Select
	$sql = 'SELECT nombre, clave, rol FROM usuarios';
	$usuarios = $bd->query($sql);
	
	// Itero e imprimo los usuarios
	echo "Número de usuarios: " . $usuarios->rowCount() . "<br>";
	foreach ($usuarios as $usu) {
		echo "Nombre : " . $usu['nombre'];
		echo " Clave : " . $usu['clave'] . "<br>";
	}

	// OPCIONAL 1: consulta preparada en lugar de método query (paámetros con posición)
	$preparada = $bd->prepare("select nombre from usuarios where rol = ?");	
	$preparada->execute([0]);
	echo "Usuarios con rol 0: " .  $preparada->rowCount() . "<br>";
	foreach ($preparada as $usu) {
		echo "Nombre : " . $usu['nombre'] . "<br>";
	}

	// OPCIONAL 1: consulta preparada en lugar de método query (parámetros con nombre)
	$preparada_nombre = $bd->prepare("select nombre from usuarios where rol = :rol");
	$preparada_nombre->execute( [':rol' => 0]);
	echo "Usuarios con rol 0: " .  $preparada->rowCount() . "<br>";
	foreach ($preparada_nombre  as $usu) {
		echo "Nombre : " . $usu['nombre'] . "<br>";
	}

} catch (PDOException $e) {
	echo 'Error con la base de datos: ' . $e->getMessage();
}
?>
    </body>
</html>