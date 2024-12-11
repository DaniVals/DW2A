<?php
require_once "bootstrap.php";
require_once './src/EquipoBidireccional.php';
require_once './src/JugadorBidireccional.php';
$id = $_GET['id'];

// Buscar el jugador por su ID
$equipo = $entityManager->find("EquipoBidireccional", $id);

// Si no existe
if(!$equipo) {
	echo "Equipo no encontrado";
}else{
	// Si existe, se imprimen sus jugadores
	echo "Nombre del equipo: ". $equipo->getNombre()."<br>";
	$jugadores = $equipo->getJugadores();
	echo "Lista de jugadores"."<br>";
	foreach($jugadores as $jugador) {
		echo "Nombre: ". $jugador->getNombre()."<br>";
	}
}
