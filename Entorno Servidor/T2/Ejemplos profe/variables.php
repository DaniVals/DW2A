<html>
    <head></head>
    <body>
<?php
    // Voy a ver si existe la variable
    // que se llama patata
    if(isset($patata)) {
        echo "Existe<br>";
    } else {
        echo "No existe<br>";
    }

    // Para ver el tipo
    $variable = "patata";
    echo gettype($variable);

    // Voy a hacer un var_dump de $variable
    var_dump($variable);
?>
    </body>
</html>