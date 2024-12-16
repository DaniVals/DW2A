<?php
/*
    2. Al igual que hemos con el ejercicio anterior,
    ahora queremos añadir un atributo a JugadorBidireccional para que devuelva un array con todos los
    objetos Entrevista en los que ha participado el jugador. Es decir, añade una asociación a la entidad,
    del mismo modo que hemos hecho con EquipoBidireccional y JugadorBidireccional
*/

require_once "bootstrap.php";
require_once './src/EquipoBidireccional.php';
require_once './src/JugadorBidireccional.php';
require_once './src/Entrevista.php';


$jugadores = $entityManager->getRepository('JugadorBidireccional')->findAll();
foreach ($jugadores as $jugador) {
    echo $jugador . ", ha participado en las siguientes entrevistas: <br>";
    $entrevistas = $jugador->getEntrevistas();
    foreach ($entrevistas as $entrevista) {
        echo $entrevista . "<br>";
    }
    echo "<br>";
}