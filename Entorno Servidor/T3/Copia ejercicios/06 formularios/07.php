<html>
<head>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

    <?php
    /*
        8. Crea una página que muestre un formulario para subir imágenes .PNG (solo se acepta este formato). 
        Si se sube una foto correctamente, entonces se mostrará una página con la fotografía subida y el tamaño que ocupa.
    */

        if ($_SERVER["REQUEST_METHOD"] == "GET") {
    ?>


    <form method="POST" enctype="multipart/form-data"> 
        Sube una foto.png: <input type="file" name="foto_subida">
        <input type="submit">
    </form>

    <?php
        }else{
            if ($_FILES["foto_subida"]["type"] == "image/png") {
                move_uploaded_file($_FILES["foto_subida"]["tmp_name"] , "./" . $_FILES["foto_subida"]["name"]);

                echo "<img src='./". $_FILES["foto_subida"]["name"] . "'> <br>";
                echo "Esta foto pesa:" . $_FILES["foto_subida"]["size"];

            }else {
                echo "Tiene que ser una foto en formato .png";
            }
        }
    ?>


</body>
</html>