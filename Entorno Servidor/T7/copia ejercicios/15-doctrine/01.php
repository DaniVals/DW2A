<?php
/*
    1. Escribe un script que reciba a través de la URL el id de un equipo y muestre sus datos. 
    Si el equipo no sale, debe mostrar un mensaje adecuado.
*/

if (!isset($_GET['id'])) {
    
    echo "Falta el id del equipo";

}else {

    require_once "bootstrap.php";
    require_once './src/Equipo.php';
    
    // Buscar por clave primaria
    $eq = $entityManager->find("Equipo", $_GET['id']);
    
    // Mostrar datos
    echo $eq->getId();
    echo " - ";
    echo $eq->getNombre();
    echo " - ";
    echo $eq->getFundacion();
    echo " - ";
    echo $eq->getSocios();
    echo " - ";
    echo $eq->getCiudad();
    
}