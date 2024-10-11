<html>
<head>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

    <?php
    /*
        5. Modifica el ejercicio anterior para que sea una única página la que muestre el formulario y 
        procese la información con los resultados.
    */
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
    ?>
    <form method="POST"> 
        Valor: <input type="text" name="valor"><br>
        <select name="conversion">
            <option value="CaF">Celsius a Fahrenheit</option>
            <option value="FaC">Fahrenheit a Celsius</option>
        </select>
        <input type="submit">
    </form>

    
    <?php
        }else{

            if ( 10000 < $_POST["valor"] ) {
                echo "introduzca una temperatura menor a 10.000";

            }else if ($_POST["valor"]<=-273.15 && $_POST["conversion"] == "CaF") {
                echo "No se pueden poner celsius menores a -273,15";

            }else if ($_POST["valor"]<=-459.67 && $_POST["conversion"] == "FaC") {
                echo "No se pueden poner celsius menores a 459,67";
            
            }else{

                if ($_POST["conversion"] == "CaF") {
                    echo "cambiando " . $_POST["valor"] . " a Fahrenheit";
                }else{
                    echo "cambiando " . $_POST["valor"] . " a Celsius";
                }
            }
        }
    ?>
</body>
</html>