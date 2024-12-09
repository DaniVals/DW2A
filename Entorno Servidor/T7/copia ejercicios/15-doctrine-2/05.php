<?php
/*
    5. Crea un script que permita modificar una entrevista. Si se accede a entrevista.php?id=4, 
    entonces aparece un formulario con los campos rellenos de la entrevista con ID 4 para poder modificar lo que queramos. 
    Si se pulsa "Guardar" entonces se actualiza en la base de datos.
*/

require_once "bootstrap.php";
require_once './src/Equipo.php';
require_once './src/Jugador.php';
require_once './src/Entrevista.php';

?>
<body>
    <?php
    if (isset($_GET['id'])) {
        $entrevista = $entityManager->find("Entrevista", $_GET['id']);
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $entrevista->setCadena($_POST['cadena']);
            $entrevista->setFecha($_POST['fecha']);
            $entrevista->setEntrevistador($_POST['entrevistador']);
            $entrevista->setJugador($entityManager->find("Jugador", $_POST['jugador']));
            $entityManager->flush();
            echo '<p>Entrevista guardada</p>';
        }
    ?>
        <form method="post">
            Cadena: <input type="text" name="cadena" value="<?= $entrevista->getCadena() ?>"> <br>
            Fecha: <input type="text" name="fecha" value="<?= $entrevista->getFecha() ?>"> <br>
            Entrevistador: <input type="text" name="entrevistador" value="<?= $entrevista->getEntrevistador() ?>"> <br>
            Jugador: <input type="text" name="jugador" value="<?= $entrevista->getJugador()->getId() ?>"> <br>
            <input type="submit" value="Guardar">
        </form>
    <?php
    }else {

        echo '<p>por favor, elija una entrevista</p>';

        echo '<form method="get">';
        echo '<select name="id">';
        $entrevistas = $entityManager->getRepository('Entrevista')->findAll();
        foreach ($entrevistas as $entrevista) {
            echo "<option value='{$entrevista->getId()}'>";
            echo $entrevista->getJugador()->getNombreApellidos() . " por " . $entrevista->getEntrevistador() . " en " . $entrevista->getCadena();
            echo "</option>";
        }
        echo '<input type="submit" value="Elegir">';
        echo '</select>';
        echo '</form>';
    }
    ?>
</body>