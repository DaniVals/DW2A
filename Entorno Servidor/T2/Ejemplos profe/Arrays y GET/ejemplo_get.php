<?php

    if(isset($_GET["nombre"]) && isset($_GET["apellido"]))
        echo "Hola, bienvenido/a ".$_GET["nombre"]. " " . $_GET["apellido"];
    else   
        echo "Falta algo";