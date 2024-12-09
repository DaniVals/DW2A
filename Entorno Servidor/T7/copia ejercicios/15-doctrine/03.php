<?php
/*
    3. Escribe un formulario para eliminar equipos utilizando Doctrine.
*/

require_once "bootstrap.php";
require_once './src/Equipo.php';
require_once './src/Jugador.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $equipo = $entityManager->find("Equipo", $_POST['id']);

    if (isset($_POST['comprobar'])) {
        if(!$equipo){
            echo "Equipo no encontrado";
        }else{
            
            echo "Equipo encontrado: <br>";

            // Mostrar datos
            echo $equipo->getId();
            echo " - ";
            echo $equipo->getNombre();
            echo " - ";
            echo $equipo->getFundacion();
            echo " - ";
            echo $equipo->getSocios();
            echo " - ";
            echo $equipo->getCiudad();

            echo "<br><br>";

            ?>
                <form method="POST">
                    <input type="hidden" name="borrar">
                    <input type="hidden" name="id" value="<?=  $equipo->getId() ?>">
            
                    <button type="submit">Seguro que quiere borrar este equipo?</button>
                </form>
            <?php
        }

    }elseif (isset($_POST['borrar'])) {

        $jugadores = $entityManager->getRepository('Jugador')->findBy(['equipo'=>$equipo->getId()]);
        foreach($jugadores as $jugador)
        {
            $entityManager->remove($jugador);
            $entityManager->flush();
        }


        $entityManager->remove($equipo);
        $entityManager->flush();
        echo "Equipo borrado";
    }
    
}else {
    ?>

    <form method="POST">
        <label for="id">Id</label>
        <input type="text" name="id" required>

        <input type="hidden" name="comprobar">

        <button type="submit">Enviar</button>
    </form>

    <?php
}