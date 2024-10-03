<html>
<head>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

    <?php
    /*
        5. Escribe una función que reciba un string y compruebe si es una matrícula de coche válida. En España el formato es "NNNN-LLL":

        "NNNN" es un número.
        "LLL" son letras. 
        Las vocales no se usan, para evitar que se formen palabras inapropiadas como PIS, MEO, etc.
        La Q tampoco se usa, porque se puede confundir con una o o un cero.
        La función devuelve true si la matrícula es válida o false en caso contrario. Prueba que funciona.
    */
    
    function CheckMatricula($matricula) {

        if (!is_string($matricula)) {
            return false;
        }
        
        
        $_patron = "/[0-9]{4}[A-Z]{3}/";
        $_excepcion = "/[AEIOUQ]/";

        if (preg_match($_patron, $matricula) && !preg_match($_excepcion, $matricula)) {
            return true;
        }
        
        return false;
    }

    if (CheckMatricula("1239JCD")) {
        echo "si es valida";
    }else {
        echo "no es valida";
    }

    ?>
</body>
</html>