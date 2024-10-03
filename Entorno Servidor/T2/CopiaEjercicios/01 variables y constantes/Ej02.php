<html>
<head>
    <title>Ej 01</title>
    <link rel="stylesheet" href="/style.css">
</head>

<style>
    table{
        background-color: #DDDDDD;
        border-width: 5px;
        border-style: outset;
        border-color: green;
    }
    td{
        border-width: 3px;
        border-style: outset;
        border-color: blue;
        margin: 0px;
        padding: 3px;
    }
</style>

<body>

    <h1>
        1. Crea página en la que se muestre una tabla. Crea 4 variables con diferentes valores: <br>
        
        • Una sin ningún valor asignado. <br>
        • Una con un valor decimal. <br>
        • Una con una cadena <br>
        • Una con un valor booleano. <br>
        
        La primera columna debe contener el valor de cada variable y la segunda el tipo de dato. Usa el comando echo para imprimir las funciones.
    </h1>
    <hr>

    <?php
        // variables
        $var1;
        $var2 = 10.09;
        $var3 = "cadena";
        $var4 = true;
    ?>

    <table>
        <tr>
            <td><?php echo"$var1" ?></td>
            <td><?php echo gettype($var1) ?></td>
        </tr>
        <tr>
            <td><?php echo"$var2" ?></td>
            <td><?php echo gettype($var2) ?></td>
        </tr>
        <tr>
            <td><?php echo"$var3" ?></td>
            <td><?php echo gettype($var3) ?></td>
        </tr>
        <tr>
            <td><?php echo"$var4" ?></td>
            <td><?php echo gettype($var4) ?></td>
        </tr>
    </table>

</body>
</html>