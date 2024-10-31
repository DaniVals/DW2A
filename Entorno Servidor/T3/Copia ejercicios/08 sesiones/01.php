<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

    <?php
        /*
            1. Haz una hucha: presenta una página con las imágenes de tres monedas: una de 50 céntimos, otra de 1€ y una de 2€. 
            La página inicialmente tiene saldo de 0€.  Cada vez que el usuario pulse una moneda, se debe incrementar el saldo. 
            Si recargas la página se debe mostrar el saldo. No uses formularios.
            
            2. Permite vaciar la hucha con un botón "Vaciar hucha".

        */

        // estoy haciendo esto en el bus, si no me acuerdo de poner la foto de las monedas es por eso profe, no se enfade, 
        // se que solo hay que poner la foto dentro de la etiqueta <a>
        
        session_start();

        if (!isset($_SESSION["dinero"])) {
            $_SESSION["dinero"] = 0;
            // echo "inicializando sesion";
        }


        echo "dinero: ". $_SESSION["dinero"];
    ?>

    <a href="01_2.php?dinero_extra=0.50">50 cents</a>
    <a href="01_2.php?dinero_extra=1">1€</a>
    <a href="01_2.php?dinero_extra=2">2€</a>
    <br>
    <a href="02.php">vaciar hucha</a> <!-- ejercicio 2 -->
</body>
</html>