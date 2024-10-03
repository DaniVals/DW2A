<html>
<head>
    <title>Ej 03</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

    <h1>
        3. Crea una página que calcule el factorial de un número (defínelo como una constante). Recuerda que el factorial solo está definido para números mayores o iguales que cero.
    </h1>

    <?php

        $num = 4;
        $factorial = 1;

        if ($num <= 0) {
            echo "No se puede hacer el factorias de 0";
        }else{
            for ($i=1; $i <= $num; $i++) { 
                $factorial *= $i;
            }
            echo "!$num = $factorial";
        }


    ?>
</body>
</html>