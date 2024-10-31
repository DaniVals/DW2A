<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

    <?php
        /*
        3. Modifica el ejemplo visto de páginas de login. Si el usuario se loguea correctamente y tiene el rol 1, entonces puede ver un enlace a una página zonaadmin.php. 
        Crea esta página, donde tan solo muestre "Zona de administrador". 

        Es decir:

        El usuario "empleado@empresa.com" con clave "1234" tiene rol 0 y vería la web normal al acceder.
        El usuario "supervisora@empresa.com" con clave "4321" tiene el rol 1 y vería la web de administración nada más acceder.
        4. ¿Qué sucede si un usuario sin loguear, o sin rol 1, trata de acceder directamente a la página zonaadmin.php? Trata de solucionarlo.
        */
        
        // ni idea de que ejemplo se refiere ngl, asi que voy a hacerlo a ciegas lo del inicio de sesion
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
    ?>
        <h2>Inicie sesion</h2>
        <form method="POST">
            Usuario: <input type="text" name="usuario"><br>
            contraseña: <input type="text" name="contraseña"><br>
            <input type="submit">
        </form>
        
    <?php
        } else {

            // usuarios y contraseña hardcodeados
            if ($_POST["usuario"] == "empleado@empresa.com" && $_POST["contraseña"] == "1234") {
                session_start();
                $_SESSION["rol"] = 0;
                echo "<p> pagina normal (ns que poner, imagino que es del ejemplo) </p>";
            }elseif ($_POST["usuario"] == "supervisora@empresa.com" && $_POST["contraseña"] == "4321") {
                session_start();
                $_SESSION["rol"] = 1;
                header("Location: 03_zonaadmin.php");
            }else{
                // probar usar una funcion
                ?>
                    <h2>Usuario y/o contraseña no existentes, pruebe de nuevo</h2>
                    <form method="POST">
                        Usuario: <input type="text" name="usuario"><br>
                        contraseña: <input type="text" name="contraseña"><br>
                        <input type="submit">
                    </form>
                <?php
            }
        }
    ?>
</body>
</html>