<html>
<head>
    <title>Ej 02</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

    <h1>
    2. Escribe un script que solucione una ecuación de segundo grado. Si no hay soluciones reales, entonces el script tiene que mostrar un mensaje indicándolo.
    </h1>

    <?php

        $a = 3;
        $b = 7;
        $c = -10;
        $ecuacionConSuma;
        $ecuacionConResta;

        if ($a != 0) {
            $ecuacionConSuma = (-$b + sqrt($b*$b -4*$c*$a))/2*$a;
            echo "x1 = $ecuacionConSuma";
            echo "<br>";
            $ecuacionConResta = (-$b - sqrt($b*$b -4*$c*$a))/2*$a;
            echo "x2 = $ecuacionConResta";
        }else{
            echo "No se puede dividir entre 0";
        }


    ?>
</body>
</html>