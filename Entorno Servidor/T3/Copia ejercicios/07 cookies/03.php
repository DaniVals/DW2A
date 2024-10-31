<html>
<head>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

    <?php
        /*
            3. Modifica el ejercicio anterior para hacer un paywall. Es decir, si el usuario intenta acceder a tu periódico más de 5 veces, 
            no le debes permitir leer el artículo. 
            Tienes que mostrarle otra página donde indiques que tiene que pagar 1€.
        */

        $visitas = 1;
        if (!isset($_COOKIE["visitas"])) {
            setcookie("visitas",1,time()+3600);
        }else{
            setcookie("visitas",1 + $_COOKIE["visitas"],time()+3600);
            $visitas = 1 + $_COOKIE["visitas"];
        }

        if ($visitas <= 5) {
            echo "visitas:" . $visitas;
            echo "<h1>El Atletico pierde la liga</h1>";
            echo "<p> El atletico son unos pringaos y an perdido JAJAJAJJAJAJA</p>";
        }else{
            echo "Ya has visitado la pagina mas de 5 veces, si quieres mas te toca paga 1€";
        }

    ?>
</body>
</html>