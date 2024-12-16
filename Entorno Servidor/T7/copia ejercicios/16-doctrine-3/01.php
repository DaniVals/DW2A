<!DOCTYPE html>
<html>

<?php
/* 
    1. Utilizando la clase EquipoBidireccional y JugadorBidireccional que hemos hecho en clase, 
    haz una página que reciba un nombre de equipo y borre todos sus jugadores. 
    Ten en en cuenta que ahora, cuando se tiene un equipo, 
    hay un atributo jugadores que devuelve un array con los que hay ahí.
*/
require_once "bootstrap.php";
require_once './src/JugadorBidireccional.php';
require_once './src/EquipoBidireccional.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $equipo = $entityManager->find('EquipoBidireccional', $_POST['equipo']);
    foreach ($equipo->getJugadores() as $jugador) {
        $entityManager->remove($jugador);
    }
    $entityManager->flush();
}


?>



<body>
    <form method="post">
        <select name="equipo">
            <option value="-1">Selecciona un equipo</option>
            <?php
                $equipos = $entityManager->getRepository('EquipoBidireccional')->findAll();
                foreach ($equipos as $equipo) {
                    echo "<option value='{$equipo->getId()}'>{$equipo->getNombre()}</option>";
                }
            ?>
        </select><br>
        <input type="submit" value="Borrar jugadores">
    </form>
</body>
</html>


