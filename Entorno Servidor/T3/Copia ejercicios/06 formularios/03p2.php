<html>
<head>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

    <?php
        // procesar.php

        if ($_POST["peso"]<=0 ) {
            echo "introduzca un peso de valor positivo porfavor";

        }else if ($_POST["altura"]<=0) {
            echo "introduzca una altura de valor positivo porfavor";
        
        }else{
            echo "tu indice de masa corporal es: " . ($_POST["peso"]/(($_POST["altura"]/100)*($_POST["altura"]/100)));
        }
        
    /*
        - El peso debe ser un número entero o decimal mayor que cero.
        - La altura debe ser un número entero mayor que cero.
        - Si alguno de los parámetros no es válido, se debe informar al usuario con un mensaje y no procesar la información.
        - En la segunda página se muestra el índice de masa corporal correspondiente (sin decimales).
    */
    ?>

</body>
</html>