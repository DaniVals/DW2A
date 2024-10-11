<html>
<head>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

<?php
    /*
        9. Escribe una página que permita subir un archivo y muestre su hash MD5. Usa la función md5_file("nombre_fichero"). 
        Tanto el formulario como el procesamiento se hacen en la misma página.
    */

        if ($_SERVER["REQUEST_METHOD"] == "GET") {
    ?>

    <form method="POST" enctype="multipart/form-data"> 
        Sube un archivo: <input type="file" name="archivo_subido">
        <input type="submit">
    </form>

    <?php
        }else{
            echo "post ejecutado <br>";
            move_uploaded_file($_FILES["archivo_subido"]["tmp_name"] , "./" . $_FILES["archivo_subido"]["name"]);
            echo md5_file($_FILES["archivo_subido"]["name"]);
        }
    ?>
</body>
</html>