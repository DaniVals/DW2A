<html>
<head>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

    <?php
    /*
       6. Crea una página que contenga un formulario con 4 selectores de tipo radio:

        - El primero debe indicar Google.
        - El segundo El País
        - El tercero Amazon.
        - El tercero dice "Otro" y tiene una caja de texto al lado donde el usuario puede escribir cualquier otra página.
        
        Dependiendo de la opción escogida, se le redirigirá a la web que toque.

        Solo en el caso de haber escrito una URL, debes comprobar que sea válida (usa filter_var para ello), en caso contrario se le riñe.

        Intenta hacer todo con 1 sola página PHP.
    */
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
    ?>


    <form method="POST"> 
        <input type="radio" name="pagina" value="Google"> Google <br>
        <input type="radio" name="pagina" value="El pais"> El pais <br>
        <input type="radio" name="pagina" value="Amazon"> Amazon <br>
        <input type="radio" name="pagina" value="Otro"> Otro: <input type="text" name="otra_pagina"> <br>
        <input type="submit">
    </form>

    <?php
        }else{
            if ($_POST["pagina"] == "Google") {
                header("Location: https://www.google.com");

            }elseif ($_POST["pagina"] == "El pais") {
                header("Location: https://www.elpais.com");
            
            }elseif ($_POST["pagina"] == "Amazon") {
                header("Location: https://www.amazon.com");
            
            }elseif ($_POST["pagina"] == "Otro") {
                if (filter_var($_POST["otra_pagina"], FILTER_VALIDATE_URL)) {
                    header("Location: " . $_POST["otra_pagina"]);
                }else {
                    echo "introduzca una url valida";
                }
            }
        }
    ?>
</body>
</html>