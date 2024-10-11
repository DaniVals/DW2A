<html>
<head>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

    <?php
    
        // procesar.php
        echo "Color: " . $_POST["back_color"];

        echo "<style> body{background-color:" .  $_POST["back_color"] . "} </style>"

    ?>
</body>
</html>