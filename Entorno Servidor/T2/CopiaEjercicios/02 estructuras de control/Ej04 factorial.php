<?php
    $factorial = 1;

    if (CONSTANTE <= 0) {
        echo "No se puede hacer el factorias de 0";
    }else{
        for ($i=1; $i <= CONSTANTE; $i++) { 
            $factorial *= $i;
        }
        echo "!".CONSTANTE." = $factorial";
    }
?>