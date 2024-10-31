<?php 
    /*
    3 (opcional). Modifica el ejercicio de antes para que en cada email haya un enlace personalizado. 
    Funciona así: si la empleada "ana" que lo ha recibido pulsa el enlaces, 
    entonces se abre una página del servidor que envía un email a "party@empresa.com" diciendo "ana" va a ir.
    */
    $empleadosInvitar = ['ana','paco','pedro']; // esto deberia ser con una querry, pero para el ejemplo sirve

    if ($_SERVER["REQUEST_METHOD"] == "GET") {

        echo '<form method="POST">';
        
        foreach ($empleadosInvitar as $empleado) {
            echo '<br><input type="checkbox" name="arrayEmpleadosMarcados[]" value="'.$empleado.'">' . $empleado;
        }
        echo '<br><input type="submit">';


        echo '</form>';
    
    } else {

        // require "./01.php";

        // enviarEmail('$dirDestino', '$dirOrigen', '$asunto', '$cuerpo');

        foreach ($_POST['arrayEmpleadosMarcados'] as $empleado) {
            echo $empleado;
        }
    }
?>