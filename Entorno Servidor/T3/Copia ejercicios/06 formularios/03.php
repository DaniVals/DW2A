<html>
<head>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

    <?php
    /*
        3. Crea una calculadora del índice de masa corporal (IMC) que conste de dos páginas:

        - Una que solicite el peso en kg y la altura en cm de una persona.
        - El peso debe ser un número entero o decimal mayor que cero.
        - La altura debe ser un número entero mayor que cero.
        - Si alguno de los parámetros no es válido, se debe informar al usuario con un mensaje y no procesar la información.
        - En la segunda página se muestra el índice de masa corporal correspondiente (sin decimales).
    */
    ?>

    
    <form action="03p2.php" method="POST"> 
        Peso: <input type="text" name="peso"> (kg)<br>
        Altura: <input type="number" name="altura"> (cm)<br>
        <input type="submit">
    </form>
</body>
</html>