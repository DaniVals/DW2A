<html>
<head>
    <title>Ej 01</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

    <h1>
        Escribe un script que, dado un número de mes, imprima si es primavera, verano, otoño o invierno. 
    </h1>
    <hr>
    

    <?php

        $mes = 1;

        switch ($mes) {
            case 1:
            case 2:
            case 3:
                echo "El mes $mes es invierno";
            break;
            case 4:
            case 5:
            case 6:
                echo "El mes $mes es primavera";
            break;
            case 7:
            case 8:
            case 9:
                echo "El mes $mes es verano";
            break;
            case 10:
            case 11:
            case 12:
                echo "El mes $mes es otoño";
            break;
            
            default:
                echo "El mes $mes no es un mes valido";
            break;
        }
    ?>

</body>
</html>