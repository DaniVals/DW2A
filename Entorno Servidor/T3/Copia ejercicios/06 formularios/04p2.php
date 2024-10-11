<html>
<head>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

    <?php
        /*

            La temperatura no puede ser inferior a -273,15 ºC o -459,67 ºF.
            El usuario debe indicar si está metiendo grados Celsius o Fahrenheit utilizando un control desplegable <select>.
            En la segunda página se muestra la temperatura en la otra unidad.

        */

        if ( 10000 < $_POST["valor"] ) {
            echo "introduzca una temperatura menor a 10.000";

        }else if ($_POST["valor"]<=-273.15 && $_POST["conversion"] == "CaF") {
            echo "No se pueden poner celsius menores a -273,15";

        }else if ($_POST["valor"]<=-459.67 && $_POST["conversion"] == "FaC") {
            echo "No se pueden poner celsius menores a 459,67";
        
        }else{

            if ($_POST["conversion"] == "CaF") {
                echo "cambiando " . $_POST["valor"] . " a Fahrenheit";
            }else{
                echo "cambiando " . $_POST["valor"] . " a Celsius";
            }
        }

    ?>
</body>
</html>