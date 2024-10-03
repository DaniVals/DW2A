<html>
<head>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    
    <?php
    /*
        3. Usando la tabla de arriba, crea una función llamada DevuelveNombre, que recibirá un nombre, un apellido y otro apellido. 
        Además, tiene un cuarto parámetro que indica 3 posibilidades de conversión:
        
        Si se le pasa "L", imprime el nombre en minúsculas.
        Si se le pasa "U", en mayúsculas.
        Imprime las iniciales de la persona en mayúsculas separadas por puntos (opción "I").
    */


    function DevuelveNombre($nombre, $apellido, $otro_apellido, $conversion) {
        switch ($conversion) {
            case 'L':
                echo strtolower("$nombre $apellido $otro_apellido");
                break;
            case 'U':
                echo strtoupper("$nombre $apellido $otro_apellido");
                break;
            case 'I':
                echo substr("$nombre",0,1);
                echo " ";
                echo substr("$apellido",0,1);
                echo " ";
                echo substr("$otro_apellido",0,1);
                break;
            default:
                // no hace nada B)
                break;
        }
    }


    DevuelveNombre("Daniel","Vals","Simon","L");
    echo "<br>";
    DevuelveNombre("Daniel","Vals","Simon","U");
    echo "<br>";
    DevuelveNombre("Daniel","Vals","Simon","I");


    ?>
</body>
</html>