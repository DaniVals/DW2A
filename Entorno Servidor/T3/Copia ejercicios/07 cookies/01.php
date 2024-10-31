<html>
<head>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

    <?php
        /*
            1. Modifica el ejercicio 2 de "Ejercicios paso de parámetros por URL y formularios" 
            de modo que el color se quede guardado en una cookie.
        */
        
        function ponerColor($color){
            echo "Color: " . $color;
            echo "<style> body{background-color:" .  $color . "} </style>";
        }


        if (isset($_COOKIE["color"])) {
            ponerColor($_COOKIE["color"]);

        }else if ($_SERVER["REQUEST_METHOD"] == "GET") {
            echo '<form action="01.php" method="POST"> Color: <input type="color" name="back_color"><br> <input type="submit"> </form>';

        }else{
            setcookie("color", $_POST["back_color"], time()+3600);
            ponerColor($_POST["back_color"]);
        }
    ?>
</body>
</html>