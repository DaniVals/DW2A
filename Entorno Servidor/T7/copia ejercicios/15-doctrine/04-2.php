<?php
if (isset($_GET['id'])) {

    require_once "bootstrap.php";
    require_once './src/Equipo.php';
    
    // Buscar por clave primaria
    $eq = $entityManager->find("Equipo", $_GET['id']);
    
    if ($eq === null) {
        echo json_encode(["error" => "Equipo no encontrado"]);
        return;
    }

    $equipoData = [
        "id" => $eq->getId(),
        "nombre" => $eq->getNombre(),
        "fundacion" => $eq->getFundacion(),
        "socios" => $eq->getSocios(),
        "ciudad" => $eq->getCiudad()
    ];
    echo json_encode($equipoData);
}