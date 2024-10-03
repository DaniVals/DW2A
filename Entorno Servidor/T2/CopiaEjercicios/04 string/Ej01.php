<html>
<head>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

    <?php
    /*
        1. Escribe una función que solucione una función de segundo grado. 
        Debe recibir los coeficientes de la ecuación y retornar un array con las soluciones. 
        En caso de que no haya soluciones, devuelve FALSE. 
        Lógicamente reaprovecha el ejercicio que hiciste para esto.
    */

    function ecuacionDeSegundoGrado($a, $b, $c) {
        
        if ($a == 0) {
            return false;
        }
        
        
        return [(-$b + sqrt($b*$b -4*$c*$a))/2*$a,   (-$b - sqrt($b*$b -4*$c*$a))/2*$a];
    }

    var_dump(ecuacionDeSegundoGrado(3,7,-10));


    ?>
</body>
</html>