<?php
/*
    2. Bájate este script (entrevista.sql) y asegúrate de tener al menos 3 jugadores cargados en la tabla de jugadores con los IDs 1, 2 y 3. 
    Ejecuta el script en phpMyAdmin. 
    Te aparecerá una nueva tabla llamada entrevista que representa las entrevistas que han ido haciendo los jugadores a lo largo del tiempo.
*/

require_once "bootstrap.php";
require_once './src/Equipo.php';
require_once './src/Jugador.php';
require_once './src/Entrevista.php';

// Pues voy a aprovechar este archivo para ver el objeto Entrevista.php


$entrevistas = $entityManager->getRepository('Entrevista')->findAll();
foreach ($entrevistas as $entrevista) {
    echo $entrevista;
    echo "<br>";
}