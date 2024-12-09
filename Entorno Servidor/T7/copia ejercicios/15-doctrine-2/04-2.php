<?php
if (isset($_GET['medio_buscado'])) {

    require_once "bootstrap.php";
    require_once './src/Equipo.php';
    require_once './src/Jugador.php';
    require_once './src/Entrevista.php';

    $entrevistas = $entityManager->getRepository('Entrevista')->findBy(['cadena' => $_GET['medio_buscado']]);

    $entrevistasArray = [];
    foreach ($entrevistas as $entrevista) {
        $entrevistasArray[] = "<p>" . $entrevista->__toString() . "</p>";
    }

    echo json_encode($entrevistasArray);
}