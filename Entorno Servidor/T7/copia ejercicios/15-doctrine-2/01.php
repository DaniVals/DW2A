<!--
    1. Utilizando la clase JugadorUnidireccional que hemos hecho en clase, haz una página que permita dar de alta a un jugador nuevo.
    Ten en cuenta que el atributo equipo ya no devuelve el número del equipo, sino el objeto Equipo que le corresponde.
-->
<!DOCTYPE html>
<html>

<?php
require_once "bootstrap.php";
require_once './src/Jugador.php';
require_once './src/Equipo.php';


// Añadir el jugador
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $jugador = new Jugador();
    $jugador->setNombre($_POST['nombre']);
    $jugador->setApellidos($_POST['apellidos']);
    $jugador->setEdad($_POST['edad']);
    $equipo = $entityManager->find('Equipo', $_POST['equipo']);
    $jugador->setEquipo($equipo);

    $entityManager->persist($jugador);
    $entityManager->flush();

    echo "Jugador añadido correctamente:<br>";
    echo $jugador;
    echo '<br>';
    echo '<br>';
    echo '<br>';
}


?>



<body>
    <form method="post">

        Nombre:<input type="text" name="nombre"><br>
        Apellidos:<input type="text" name="apellidos"><br>
        Edad:<input type="number" name="edad"><br>

        Equipo:
        <select name="equipo">
            <option value="-1">Selecciona un equipo</option>
            <?php
                $equipos = $entityManager->getRepository('Equipo')->findAll();
                foreach ($equipos as $equipo) {
                    echo "<option value='{$equipo->getId()}'>{$equipo->getNombre()}</option>";
                }
            ?>
        </select><br>
        <input type="submit" value="Añadir jugador">
    </form>
</body>
</html>


