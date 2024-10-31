<html>

    <head>
        <link rel="stylesheet" href="/style.css">
    </head>

    <body>
        
    <?php

    // en crearCookies.php setcookie("usuario","Dani",time()+3600);
    echo "usuario: " . $_COOKIE["usuario"] . "<br>";

    // hay que hacerlo en una pagina distinta ya que si lo haces en la misma, todavia no existe la cookie, auqnue la crees justo arriba

    // se puede mirar si es la primera vez que accede con el isset
    if (!isset($_COOKIE["caducadora"])) {
        // crear si no existe
        setcookie("caducadora", 1, time()+3);
    }else{
        echo "has entrado hace poco";
    }

    ?>

    </body>


</html>