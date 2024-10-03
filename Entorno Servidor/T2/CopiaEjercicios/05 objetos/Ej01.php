<?php
    /*
        3. Crea una clase Controlador que:
        Contenga los atributos (strings): titulo, color y saludo.
        Tenga un constructor.
        Tenga 3 métodos que, cuando se llamen, permitan generar automáticamente las salidas HTML para indicar el título de la página, el color de fondo y un saludo entre etiquetas <h1></h1> (ejemplo: imprimeTitulo($titulo_ventana)).
        Instancia una clase y prueba a usarlo para generar una página.
    */

    require "Controlador.php";

    $pagina = new Controlador("Pagina prueba","#aaa","HOLAAAAA");

    $pagina->mostrarTitulo();
    $pagina->mostrarColor();
    $pagina->mostrarSaludo();
?>