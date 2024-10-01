<?php

    // Crear un array
    $coches = [];
    $coches = array(); // Evitar
    $coches = [10,20,30];

    // Accedo a un elemento del array
    echo "El elemento 1 es ".$coches[1]."<br>";

    // Añadir elemento
    $coches[] = 40;     // Meto un elemento al final
    
    // FORMAS DE RECORRER UN ARRAY

    // Recorrer el array
    for($i = 0; $i < count($coches); $i++) {   // No recomendado
        echo "Hola en la posición $i tengo ".$coches[$i]."<br>";
    }

    // Recorrer el array mejor aún
    foreach($coches as $coche) {
        echo "Elemento $coche <br>";
    }

    // Recorrer el array mejor aún e imprimiendo la clave
    foreach($coches as $clave => $coche) {
         echo "Elemento en la posición $clave es $coche <br>";
    }



