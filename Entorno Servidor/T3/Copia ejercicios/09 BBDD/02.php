<?php 
    /*
    2. Modifica de nuevo el ejemplo de login visto (modificado por última vez "Ejercicios de sesiones") para que, 
    al loguearse un usuario, se compruebe que las credenciales son correctas contra la bases de datos. 
    Debes comprobarlo en la tabla "usuarios" de la base de datos "empresa".
    */

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
?>
    <h2>Inicie sesion o <a href="03.php">registrese</a></h2>
    <form method="POST">
        Usuario: <input type="text" name="usuario"><br>
        contraseña: <input type="text" name="contra"><br>
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
            $sql = 'DELETE from usuarios WHERE nombre="' . $_POST['usuario'] . '"';
            $usuarios = $bd->query($sql);
            

            foreach ($usuarios as $usu) {
                if ($usu['rol'] == 1) {
                    $_SESSION["rol"] = 1;
                    header("Location: zonaadmin.php");
                }
            }


            // echo $usuarios;
            // if (0 < count($usuarios)) {
            //     // si encuentra al menos un usuario (deberia encontrar solo 0 o 1 pero nunca se sabe)
            //     echo '0: ' . $usuarios[0];

            //     if ($usuarios[0]['rol'] == 1) {
            //         $_SESSION["rol"] = 1;
            //         header("Location: 03_zonaadmin.php");
            //     }else{
            //         $_SESSION["rol"] = 0;
            //         header("Location: 03_zonaadmin.php");
            //     }
            // }


            
            // $_SESSION["rol"] = 0;
            echo "<p> pagina normal (ns que poner, imagino que es del ejemplo) </p>";

        } catch (PDOException $e) {
            // reiniciar la pagina con un error friendly user
            echo 'Error con la base de datos: ' . $e->getMessage();
        }
    }
?>