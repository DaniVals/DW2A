<?php 
    /*
    1. Crea un formulario que reciba el nombre de una ciudad, debe mostrar "No existe" o bien la suma de los presupuestos que tenga esa ciudad.
    */

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
?>
    <h2>Buscar pais</h2>
    <form method="POST">
        Ciudad: <input type="text" name="ciudad"><br>
        <input type="submit">
    </form>
    
<?php
    } else {       

        $cadena_conexion = 'mysql:dbname=empresa;host=127.0.0.1';
        $usuario = 'root';
        $clave = '';

        try {
            session_start();
            $bd = new PDO($cadena_conexion, $usuario, $clave);
            // Select
            $sql = 'SELECT presupuesto FROM departamentos WHERE ciudad="' . $_POST['ciudad'] . '"';
            $ciudades = $bd->query($sql);

            $sumaSalarios = 0; // contador
            foreach ($ciudades as $ciudad) {
                $sumaSalarios += $ciudad['presupuesto'];
            }

            echo 'presupuesto total de '.$_POST['ciudad'].': '. $sumaSalarios;
            
            // if (0 < count($usuarios)) {}

        } catch (PDOException $e) {
            // reiniciar la pagina con un error friendly user
            echo 'Error con la base de datos: ' . $e->getMessage();
        }
    }
?>