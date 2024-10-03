<html>
<head>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

    <h1>
        Crea un algoritmo que calcule la suma de los 20 primeros números pares y el producto de los 20 primeros impares simultáneamente, 
        es decir, únicamente haciendo un bucle. 
        Guarda los resultados en un array asociativo donde la primera clave sea "suma_pares" y la última "producto_impares". 
        Muestra el contenido en una tabla.
    </h1>
    
    <?php
        
        $numeros = [];

        for ($i=0; $i < 40; $i++) {
            $numeros[$i] = random_int(1, 999);
        }

        $resultados["sumatorio"] = 0;
        $resultados["multiplicatorio"] = 1;

        foreach ($numeros as $key => $numero) {
            if ($numero%2 == 0) {
                $resultados["sumatorio"] += $numero;
            }else {
                $resultados["multiplicatorio"] *= $numero;
            }
        }
    ?>

    <table>
        <tr>
            <td>suma_pares</td>
            <td><?php echo $resultados["sumatorio"] ?></td>
        </tr>
        <tr>
            <td>producto_impares</td>
            <td><?php echo $resultados["multiplicatorio"] ?></td>
        </tr>
    </table>
</body>
</html>