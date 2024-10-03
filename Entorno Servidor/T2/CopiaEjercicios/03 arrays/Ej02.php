<html>
<head>
    <link rel="stylesheet" href="/style.css">
</head>
<style>
    img{
        width: 300px;
    }
</style>
<body>

    <h1>
        Crea una página que: <br>

        . Tenga un array donde la posición 0 sea el string "piedra", la 1 sea "papel" y la 2 "tijeras". <br>
        . El usuario pasará por la URL uno de esos valores, y la página tendrá que mostrar "Has sacado tijeras" si por ejemplo visita ejercio.php?saco=2 <br>
        . Además se mostrará una imagen de una piedra, un papel o unas tijeras. <br>
    </h1>
    
    <?php

        define("ARRAY_PPT", ["piedra", "papel", "tijera"]);

        // var_dump(ARRAY_PPT);
        // echo ARRAY_PPT[$_GET["saco"]];

        if (isset($_GET["saco"])) { 
            switch (ARRAY_PPT[$_GET["saco"]]) {
                case 'piedra':
                    echo "<img src='Ej02Piedra.jpeg' alt='piedra'>";
                break;
                case 'papel':
                    echo "<img src='Ej02Papel.jpg' alt='papel'>";
                break;
                case 'tijera':
                    echo "<img src='Ej02Tijera.jpg' alt='tijera'>";
                break;
            }
        }else{
            echo "Elige que vas a sacar: <br>";
            echo "<a href='Ej02.php?saco=0'>piedra</a> <br>";
            echo "<a href='Ej02.php?saco=1'>papel</a> <br>";
            echo "<a href='Ej02.php?saco=2'>tijera</a> <br>";
        }


    ?>
</body>
</html>