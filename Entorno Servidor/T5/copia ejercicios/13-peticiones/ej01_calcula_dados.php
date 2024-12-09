<?php

if (!isset($_GET['cant'])) {
    echo rand(1, 6) . " y " . rand(1, 6);
}else {
    // 2. Modifica el ejercicio anterior para que el servidor no devuelva siempre el resultado de tirar 2 dados, 
    // sino los dados que quiera el usuario. Por ejemplo, si elige 5 dados, el servidor devolvería "5, 6, 1,6 y 2".

    echo rand(1, 6);
    for ($i=1; $i < $_GET['cant']; $i++) { 
        echo ", " . rand(1, 6);
    }
}
