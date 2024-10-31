<html>
<head>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            ?>

                <form method="POST"> 
                    Idioma:
                    <select name="idioma">
                        <option value="en">ingles</option>
                        <option value="es">español</option>
                        <option value="it">italiano</option>
                    </select>
                    <input type="submit"> 
                </form>

            <?php
        }else{
            setcookie("idioma", $_POST["idioma"], time()+3600);
            header("Location: 02.php");
        }
    ?>
</body>
</html>