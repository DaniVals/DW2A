<?php
require_once "bootstrap.php";
require_once './src/Jugador.php';
require_once './src/Equipo.php';

// FindBy con 1 criterio de búsqueda
echo "<strong>Jugadores: con 12 años</strong><br>";
$repo_jugadores = $entityManager->getRepository('Jugador');
$jugadores 		= $repo_jugadores->findBy(['edad' => 12]);
foreach($jugadores as $jugador)
{
	echo "Nombre: ". $jugador->getNombre(). " ". $jugador->getApellidos(). "<br>";
}


// FindBy con 2 criterios de búsqueda
echo "<strong>Equipos: de Madrid + fundados en 1900</strong><br>";
$equipos = $entityManager->getRepository('Equipo')->findBy(['fundacion' => 1900, 'ciudad'=>'Madrid']);
foreach($equipos as $equipo)
{
	echo "Nombre: ". $equipo->getNombre()."<br>";
}


// FindOneBy con 1 criterio de búsqueda
echo "<strong>Equipo: cuyo nombre es 'Real Madrid'</strong><br>";
$equipo = $entityManager->getRepository('Equipo')->findOneBy(array('nombre' => 'Real Madrid'));
echo "Nombre: ". $equipo->getNombre(). " ". $equipo->getFundacion(). " ". $equipo->getCiudad()."<br>";


// FindAll
echo "<strong>Total de equipos en el almacén de objetos</strong><br>";
$equipos = $entityManager->getRepository('Equipo')->findAll();
echo "Hay " . count($equipos) . " equipos disponibles<br>";