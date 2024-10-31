<?php 
    /*
    2. Modifica de nuevo el ejemplo de login visto (modificado por última vez "Ejercicios de sesiones") para que, 
    al loguearse un usuario, se compruebe que las credenciales son correctas contra la bases de datos. 
    Debes comprobarlo en la tabla "usuarios" de la base de datos "empresa".
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

        require "./01.php";

        $dirOrigen = "no.reply@empresa.com";
        $asunto = "Fiesta halloween";
        $cuerpo = "quedas invitadoooooo";
        
        foreach ($_POST['arrayEmpleadosMarcados'] as $empleado) {
            enviarEmail($empleado . "@empresa.com", $dirOrigen, $asunto, $cuerpo);
        }

        echo "correos enviados correctamente";
    }
?>