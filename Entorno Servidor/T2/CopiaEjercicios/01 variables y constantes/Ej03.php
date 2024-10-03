<html>
<head>
    <title>Ej 01</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

    <h1>
        3. Crea una página que imprima una lista donde aparezca la información de: <br>
        
        • El navegador que ha visitado la página. <br>
        • Los idiomas que acepta el navegador.
    </h1>
    <hr>

    <ul>
       <li><?php echo $_SERVER["HTTP_USER_AGENT"] ?></li>
       <li><?php echo $_SERVER["HTTP_ACCEPT_LANGUAGE"] ?></li>
    </ul>
</body>
</html>