<?php
    // Las 2 opciones son idénticas:

    
    // Opción A: todo desde PHP
    $activado = true;
    if($activado) {
        echo "<h1>Activado</h1>";
    } else {
        echo "<h1>Desactivado</h1>";
    }
    echo "<br>";



    // Opción B: se rompe el PHP para imprimir HTML
    $activado = true;
    if($activado) {
?>
        <h1>Activado</h1>
<?php
    } else {
?>
        <h1>Desactivado</h1>
<?php
    }
?>  