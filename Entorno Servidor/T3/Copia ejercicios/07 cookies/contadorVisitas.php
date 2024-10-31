<html>

    <head>
    <link rel="stylesheet" href="/style.css">
        
    </head>

    <body>
        
    <?php

    if (!isset($_COOKIE["contadorVisitas"])) {
        // crear si no existe
        setcookie("contadorVisitas", 2, time()+3600);
        echo "Bienvenido por primera vez";
    }else{
        setcookie("contadorVisitas", $_COOKIE["contadorVisitas"]+1, time()+3600);
        echo "Bienvenido por " . $_COOKIE["contadorVisitas"] . "ª vez";
    }

    ?>

    </body>


</html>