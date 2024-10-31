<html>
<head>
    <link rel="stylesheet" href="/style.css">
</head>
<body>


    <a href="02_elegirIdioma.php">Elegir Idioma</a>
<?php
    /*
        2. Emula la página web de un periódico donde:

        Tengas una página con un artículo (por ejemplo, "El Real Madrid gana la liga"). Tiene un encabezado <h1> con el titular y un texto que te inventes en <p>. Hay un enlace arriba del otro.
        El enlace anterior lleva a una web que permite al usuario puede escoger el idioma (inglés, español o italiano) en que leer la noticia.
        
        Se debe almacenar el idioma en una cookie. Así, cuando el usuario se vuelva a conectar a la página del artículo, le mostrarás la noticia directamente en el idioma escogido (traduce los texto con cualquier traductor online para cada caso). 
    */

    $idioma = "en";
    if (isset($_COOKIE["idioma"])) {
        $idioma = $_COOKIE["idioma"];
    }

    switch ($idioma) {
        case 'es':
            echo "<h1>El Atletico pierde la liga</h1>";
            echo "<p> El atletico son unos pringaos y an perdido JAJAJAJJAJAJA</p>";
            break;

        case 'it':
            echo "<h1>Eli Atleticoi pierdei lai ligai</h1>";
            echo "<p> Eli atleticoi soni unosi pringaosi yi ani perdidoi JAJAJAJJAJAJAi</p>";
            break;
        
        case 'en':
        default:
            echo "<h1>The Atletico loses la liga</h1>";
            echo "<p> El atletico son unos pringaos y an perdido HAHAHHAHAHAHA</p>";
            break;
    }

    ?>

</body>
</html>