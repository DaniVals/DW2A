<html>
<head>
    <title>Ej 01</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

    <h1>
        0. Crea una página donde tengas tres variables en PHP cuyo contenido sea tres colores. <br> Debes mostrar cada color en una lista HTML.
    </h1>
    <hr>


    <?php
        // variables
        $var1 = "rojo";
        $var2 = "azul";
        $var3 = "blanco";
    ?>

    <h2>mas php</h2>
    <?php
        echo "<ul>";
        echo "<li>$var1</li>";
        echo "<li>$var2</li>";
        echo "<li>$var3</li>";
        echo "</ul>";
    ?>
    
    <h2>mas html</h2>
    <ul>
       <li><?php echo"$var1" ?></li>
       <li><?php echo"$var2" ?></li>
       <li><?php echo"$var3" ?></li>
    </ul>
</body>
</html>