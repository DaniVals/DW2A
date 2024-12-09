<?php
/*
    2. Escribe un formulario para insertar un nuevo equipo. Comprueba los posibles errores.
*/

require_once "bootstrap.php";
require_once './src/Equipo.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nuevo = new Equipo();

    $nuevo->setNombre($_POST['nombre']);
    $nuevo->setFundacion($_POST['fundacion']);
    $nuevo->setSocios($_POST['socios']);
    $nuevo->setCiudad($_POST['ciudad']);

    $entityManager->persist($nuevo);
    $entityManager->flush();
    echo "Equipo insertado " . $nuevo->getId() . "\n";
    
}else {
    ?>

    <form method="POST">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" required>
        <label for="fundacion">Fundación</label>
        <input type="number" name="fundacion" id="fundacion" required>
        <label for="socios">Socios</label>
        <input type="number" name="socios" id="socios" required>
        <label for="ciudad">Ciudad</label>
        <input type="text" name="ciudad" id="ciudad" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
}