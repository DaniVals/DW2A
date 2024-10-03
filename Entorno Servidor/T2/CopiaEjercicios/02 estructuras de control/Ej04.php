<html>
<head>
    <title>Ej 04</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

    <h1>
        4. Modifica el código anterior para que la constante esté alojada en un fichero constante.php 
        y el factorial se ejecute dentro  del fichero factorial.php. Utiliza require o include para incorporar el valor.    
    </h1>

    <?php
        require "Ej04 constante.php";
        require "Ej04 factorial.php";
    ?>
</body>
</html>