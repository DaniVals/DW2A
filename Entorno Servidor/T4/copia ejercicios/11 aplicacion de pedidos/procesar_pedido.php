<?php
// Comprueba que el usuario haya abierto sesión o redirige
require 'correo.php';
require 'sesiones.php';
require_once 'bd.php';
comprobar_sesion();
?>	
<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>Pedidos</title>
		<link rel="stylesheet" href="tabla.css">
	</head>
	<body>
	<?php 
	require 'cabecera.php';		
	
	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		// EJ 1

		$productos = cargar_productos(array_keys($_SESSION['carrito']));
		if($productos === FALSE){
			echo "<p>No hay productos en el pedido</p>";
			exit;
		}
		echo "<h2>¿Seguro que desea comprar todos estos articulos?</h2>";
		echo "<table>"; //abrir la tabla
		echo "<tr><th>Nombre</th><th>Descripción</th><th>Peso</th><th>Unidades</th></tr>";
		foreach($productos as $producto){
			$cod = $producto['CodProd'];
			$nom = $producto['Nombre'];
			$des = $producto['Descripcion'];
			$peso = $producto['Peso'];
			$unidades = $_SESSION['carrito'][$cod];
			
			//print_r($producto);				
			echo "<tr><td>$nom</td><td>$des</td><td>$peso</td><td>$unidades</td>";	
		}
		echo "</table>";
		?>
			<hr>
			<!-- No hace falta especificar accion, ya que es el mismo archivo -->
			<form method="POST">
				<input type="submit" value="Corfirmar">
			</form>
			
		<?php


	} else {
		$resul = insertar_pedido($_SESSION['carrito'], $_SESSION['usuario']['codRes']);
		if($resul === FALSE){
			echo "No se ha podido realizar el pedido<br>";			
		}else{
			$correo = $_SESSION['usuario']['correo'];
			echo "Pedido realizado con éxito. Se enviará un correo de confirmación a: $correo ";							
			$conf = enviar_correos($_SESSION['carrito'], $resul, $correo);							
			if($conf!==TRUE){
				echo "Error al enviar: $conf <br>";
			};		
			//vaciar carrito	
			$_SESSION['carrito'] = [];
			
		}		
	}
	?>		
	</body>
</html>
	