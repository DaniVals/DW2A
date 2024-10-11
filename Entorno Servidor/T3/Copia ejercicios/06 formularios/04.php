<html>
<head>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

    <?php
    /*
        4. Escribe un convertidor de temperaturas Celsius a Fahrenheit o viceversa que conste de dos páginas:

        En la primera página se solicitan la temperatura y la unidad.
        La temperatura puede ser un valor decimal.
        La temperatura no puede ser inferior a -273,15 ºC o -459,67 ºF.
        La temperatura debe ser inferior a 10.000 grados (sin importar la unidad de medida).
        El usuario debe indicar si está metiendo grados Celsius o Fahrenheit utilizando un control desplegable <select>.
        En la segunda página se muestra la temperatura en la otra unidad.

    */
    ?>


    <form action="04p2.php" method="POST"> 
        Valor: <input type="text" name="valor"><br>
        <select name="conversion">
            <option value="CaF">Celsius a Fahrenheit</option>
            <option value="FaC">Fahrenheit a Celsius</option>
        </select>
        <input type="submit">
    </form>
</body>
</html>