<html>
<head>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

    <?php
    
        // Crear un array
        $coches = [];

        $coches = [10,20,30];
        
        
        // añadir elementos
        $coches[] = 40; // en la siguiente posicion
        $coches[10] = 999; // posicion forzada
        $coches[] = "texto"; // elemento de otro tipo
        
        var_dump($coches); // para IMPRIMIR todo lo que hay de forma detallada EN EL NAVEGADOR


        // recorrer arrays
        echo "<br>for"."<br>";
        for ($i=0; $i < count($coches); $i++) { 
            echo "En la posicion $i tengo ".$coches[$i]."<br>";
        }


        // recorrer arrays 2
        echo "<br>foreach"."<br>";
        foreach ($coches as $key => $coche) {
            echo "Tengo ".$coche."<br>";
        }


        // recorrer arrays 2.5 (poner key para imprimir la posicion)
        echo "<br>foreach 2"."<br>";
        foreach ($coches as $key => $coche) {
            echo "En la posicion $key tengo ".$coche."<br>";
        }

        // ARRAYS 2D
        $matriz = [[1,2,3],[4,5,6],[7,8,9]];


        // HASHMAPS (aqui es lo mismo pero es para entenderlo con java)
        echo "<hr>";
        $coches = ["Camino" => "Mercedes", "Dani" => "Golf", "Mikel" => "Corola"];

        // acceder a un elemento
        echo "El coche de Mikel es ".$coches["Mikel"]."<br>";




        /* ------------------------ ns donde meter esto ------------------------ */
        // http://localhost/pagina.php?nombre_variable=valor_varaible&nombre_variable2=valor_varaible2

        // $_GET['nombre_variable'] = valor_varaible
    ?>
</body>
</html>