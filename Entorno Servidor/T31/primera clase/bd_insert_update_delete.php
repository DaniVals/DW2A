<html>
    <head>
    </head>
    <body>

<?php
// datos conexión
$cadena_conexion = 'mysql:dbname=empresa;host=127.0.0.1';
$usuario = 'root';
$clave = '';

try {
	// Conectar
    $bd = new PDO($cadena_conexion, $usuario, $clave);	
	echo "Conexión realizada con éxito<br>";

	// =======================================================
	// Insertar nuevo usario
	$ins = "insert into usuarios(nombre, clave, rol) values('Alberto', '33333', '1');";
	$resul = $bd->query($ins);	
	
	//comprobar errores
	if($resul) {
		echo "insert correcto <br>";
		echo "Filas insertadas: " . $resul->rowCount() . "<br>";
	} else {
		echo "No se pudo insertar";
	}	

	// Podemos recuperar fácilmente el ID generado por la BD
	echo "Código de la fila insertada" . $bd->lastInsertId() . "<br>"; 

	// =======================================================
	// Actualizar
	$upd = "update usuarios set rol =  0 where rol = 1";
	$resul = $bd->query($upd);	

	// Comprobar errores
	if($resul){
		echo "update correcto <br>";
		echo "Filas actualizadas: " . $resul->rowCount() . "<br>";
	} else {
		echo "No se pudo actualizar";
	}

	// =======================================================
	// Borrar
	$del = "delete from usuarios where nombre = 'Luisa'";
	$resul = $bd->query($del);	
	
	// Comprobar errores
	if($resul){
		echo "delete correcto <br>";
		echo "Filas borradas: " . $resul->rowCount() . "<br>";
	}else {
		echo "No se pudo actualizar";
	}

} catch (PDOException $e) {
	echo 'Error con la base de datos: ' . $e->getMessage();
} 
?>
    </body>
</html>