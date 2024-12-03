<?php
require_once "bootstrap.php";
require_once './src/Equipo.php';

$id = $_GET['id'];

// Buscar el jugador con el ID indicado
$equipo = $entityManager->find("Equipo", $id);
if(!$equipo){
	echo "Equipo no encontrado";
}else{
	$entityManager->remove($equipo);
	$entityManager->flush();
	echo "Equipo borrado";
}
