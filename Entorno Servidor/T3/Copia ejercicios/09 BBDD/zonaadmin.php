<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

    <?php
        
        session_start();
        if (!isset($_SESSION["rol"])) {
            header("Location: 02.php");
        }

        if ($_SESSION["rol"] != 1) {
            header("Location: 02.php");
        }
    ?>

    <!-- Imprimir pagina -->
    <h1>soy admin B)</h1>
    <h2>pero por la base de datos eh?</h2>

    <?php
        /*
        4. Modifica la página de "Zona de administradores" para que los usuarios administradores dispongan de un formulario 
        en el que puedan borrar usuarios del sistema (es decir, eliminarlos de la tabla "empresa").
        */
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            ?>
                <h2>Borrar usuario</h2>
                <form method="POST">
                    Usuario a borrar: <input type="text" name="usuario"><br>
                    <input type="submit">
                </form>
                
            <?php
        } else {       
    
            $cadena_conexion = 'mysql:dbname=empresa;host=127.0.0.1';
            $usuario = 'root';
            $clave = '';
    
            try {
                $bd = new PDO($cadena_conexion, $usuario, $clave);
                // Select
                $sql = 'SELECT nombre FROM empleados WHERE nombre="' . $_POST['usuario'] . '"';
                $usuarios = $bd->query($sql);
                
                // si solo existe un usuario con ese nombre, lo borra
                if ($usuarios->rowcount() == 1) {
                    
                    $sql = 'DELETE FROM empleados WHERE nombre="' . $_POST['usuario'] . '"';
                    $bd->query($sql);

                    echo 'empleado borrado correctamente';


                }else if ($usuarios->rowcount() == 0) {
                    echo 'no se han encontrado ningun empleado con ese nombre';
                }else{
                    echo 'se han encontrado mas de un empleado, no se han borrado ninguno';
                }
    
            } catch (PDOException $e) {
                // reiniciar la pagina con un error friendly user
                echo 'Error con la base de datos: ' . $e->getMessage();
            }
        }
    ?>
</body>