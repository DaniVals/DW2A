<?php

    // Array donde las claves son palabras
    $coches = ["Camino" => "Mercedes", 
            "Dani" => "Golf",
            "Mikel" => "Corolla"];

    // Accedo a un elemento
    echo "El coche de Mikel es " . $coches["Mikel"]."<br>";

    // Añado un elemento y solo uno
    $coches["Patricia"] = "Ford";

    // Recorro el array y la única posibilidad es el foreach
    foreach($coches as $coche) {
        echo "Coche: $coche<br>";
    }

    // Recorro el array y la única posibilidad es el foreach
    // e imprimo las claves
    foreach($coches as $propietario => $coche) {
       echo "El coche de $propietario es $coche<br>";
    }