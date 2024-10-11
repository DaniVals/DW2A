<html>
<head>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    
    <?php
    /*
        2. Crea un formulario con un campo de texto para que el usuario escriba un color en inglés (red, yellow, blue, etc.).
        Cuando pulse el botón de enviar, el formulario enviará a otra página la información.
        Ésta mostrará el fondo del color que se haya escrito.
    */
    ?>

    <form action="02p2.php" method="POST"> 
    <!-- "action" Para prodesar el formulario-->
        Color: <input type="color" name="back_color"><br>
        <input type="submit">
    </form>



</body>
</html>