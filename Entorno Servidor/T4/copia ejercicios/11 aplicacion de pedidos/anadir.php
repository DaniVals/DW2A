<?php 
// Comprueba que el usuario haya abierto sesión o redirige
require_once 'sesiones.php';
comprobar_sesion();

// Lectura del código recibido
$cod = $_POST['cod'];
$unidades = (int)$_POST['unidades'];

// Si existe el código sumamos las unidades
if(isset($_SESSION['carrito'][$cod])){
	$_SESSION['carrito'][$cod] += $unidades;
}else{
	$_SESSION['carrito'][$cod] = $unidades;		
}

// EJ 2
// header("Location: carrito.php"); // original

require_once 'bd.php';

header("Location: productos.php?categoria=".sacar_id_categoria_del_producto($cod));

