<html>
    <head></head>
    <body>
<?php
    // El nombre del servidor
    echo "Soy el servidor: " .$_SERVER['SERVER_NAME']. "<br>";

    // Idiomas que acepta el Chrome
    echo "Oye, me has dicho que aceptas: " . $_SERVER["HTTP_ACCEPT_LANGUAGE"];

?>
    </body>
</html>