<?php

    function sumarNumeros($num1, $num2) {
        return $num1+$num2;
    }

    // Si no hago nada, la función recibe una COPIA
    function cambiarNum($val) {
        $val = 666;
    }
    // Si quiero que reciba la referencia
    function cambiarNumDeVerdad(&$val) {
        $val = 666;
    }

    echo "La suma de 1 y 2 es " . sumarNumeros(1,2) . "<br>";
    echo "La suma de 3 y 5 es " . sumarNumeros(3,5) . "<br>";

    // Pruebo si se cambia
    $edad = 10;
    cambiarNum($edad);
    echo $edad . "<br>";
    // Pruebo otra vez si se cambia
    cambiarNumDeVerdad($edad);
    echo $edad;
    