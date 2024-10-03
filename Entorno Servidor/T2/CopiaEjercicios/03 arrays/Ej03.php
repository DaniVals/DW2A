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
        5. Modifica el ejercicio anterior de modo que el servidor también juegue, para esto tienes que hacer que saque un valor entre 0 y 2, 
        para que tenga una de las jugadas. <br>
        Tienes que decir al usuario si ha ganado o perdido y qué ha sacado cada tanto el servidor como el cliente. <br>
    </h1>
    
    <?php
    
        define("ARRAY_PPT", ["piedra", "papel", "tijera"]);

        // var_dump(ARRAY_PPT);
        // echo ARRAY_PPT[$_GET["saco"]];

        if (isset($_GET["saco"])) { 

            $saco_CPU = random_int(0,2);


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
            switch (ARRAY_PPT[$saco_CPU]) {
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

            if ($saco_CPU == $_GET["saco"]) {
                echo "Empate";
            }elseif ($_GET["saco"] == 0 && $saco_CPU == 1 || $_GET["saco"] == 1 && $saco_CPU == 2 || $_GET["saco"] == 2 && $saco_CPU == 0) {
                echo "Perdiste";
            }elseif ($_GET["saco"] == 2 && $saco_CPU == 1 || $_GET["saco"] == 0 && $saco_CPU == 2 || $_GET["saco"] == 1 && $saco_CPU == 0) {
                echo "Ganaste";
            }

        }else{
            echo "Elige que vas a sacar: <br>";
            echo "<a href='Ej03.php?saco=0'>piedra</a> <br>";
            echo "<a href='Ej03.php?saco=1'>papel</a> <br>";
            echo "<a href='Ej03.php?saco=2'>tijera</a> <br>";
        }
    ?>

</body>
</html>