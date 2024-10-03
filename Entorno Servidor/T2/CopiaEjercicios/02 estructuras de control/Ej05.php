<html>
<head>
    <title>Ej 05</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

    <h1>
        Crea un script que genere una página con un DNI diferente cada vez que se recarga. 
        La letra debe ser válida. Utiliza funciones de generación de números aleatorios de PHP. 
        Consejo: puedes acceder a un caracter de un string con la notación nombre_string[posicion_caracter]
    </h1>
    
    <?php
        $numeroRandom = random_int(1, 99999999);
        $dni = "";
        define("LETRA_DNI","TRWAGMYFPDXBNJZSQVHLCKE");


        $longitud = strlen((string)$numeroRandom);
        for ($i = $longitud; $i < 8; $i++) { 
            $dni = $dni."0";
        }
        $dni = $dni.(string)$numeroRandom.LETRA_DNI[$numeroRandom%23];

        echo "$dni";


    ?>
</body>
</html>