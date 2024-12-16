<?php
/*
    3. Prueba que el ejercicio anterior funciona haciendo una página que tenga botones radio con todos los jugadores. 
    Si se selecciona uno, se pueden verlas entrevistas que ha hecho.
*/

require_once "bootstrap.php";
require_once './src/EquipoBidireccional.php';
require_once './src/JugadorBidireccional.php';
require_once './src/Entrevista.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $jugador = $entityManager->find('JugadorBidireccional', $_POST['jugador']);
    
    $entrevistas = $jugador->getEntrevistas();
    foreach ($entrevistas as $entrevista) {
        echo $entrevista . "<br>";
    }
    echo "<br>";
}

?>


<body>
    <form method="post">
        <?php
            $jugadores = $entityManager->getRepository('JugadorBidireccional')->findAll();
            foreach ($jugadores as $jugador) {
                echo "<input type='radio' name='jugador' value='{$jugador->getId()}'>{$jugador->getNombre()}</input>";
            }
        ?>
        <br>
        <input type="submit" value="Ver entrevistas">
    </form>
</body>
</html>