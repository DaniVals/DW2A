<html>
<head>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

    <?php
    
        // http://localhost/pagina.php?nombre_variable=valor_varaible&nombre_variable2=valor_varaible2

        // $_GET['nombre_variable'] = valor_varaible
        if (isset($_GET["nombre"])) { // si existe la varaible nombre
            echo "Hola ".$_GET["nombre"];
        }else{
            echo "Nombre no encontrado, escribe en la url ?nombre=(tu nombre)";
        }
    ?>
</body>
</html>