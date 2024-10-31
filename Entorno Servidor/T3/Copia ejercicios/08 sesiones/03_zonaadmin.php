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
        
        session_start();
        if (!isset($_SESSION["rol"])) {
            header("Location: 03.php");
        }
        if ($_SESSION["rol"] != 1) {
            header("Location: 03.php");
        }
        // preguntar si es recomendable poner el else, ya que no deberia ni llegar con el header, pero no estoy seguro
    ?>

    <!-- Imprimir pagina -->
    <h1>soy admin B)</h1>
</body>
</html>