<?php
/*
1. Usando el ejemplo visto, crea una función para enviar emails. 
La función recibe cuatro parámetros: 
    dirección destino, 
    dirección origen, 
    asunto del mensaje y 
    el cuerpo del mensaje.
*/
use PHPMailer\PHPMailer\PHPMailer;

function enviarEmail($dirDestino, $dirOrigen, $asunto, $cuerpo) {
    
    require "../vendor/autoload.php";

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPDebug  = 0;

    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = "tls";
    $mail->Host = 'sandbox.smtp.mailtrap.io';
    $mail->Port = 2525;

    $mail->Username   = "c281f991d9b8e7"; 
    $mail->Password   = "c935a15b3b03fe";   	

    $mail->SetFrom($dirOrigen, 'Nombre del recibido');
    $mail->Subject = $asunto;
    $mail->MsgHTML($cuerpo);
    $mail->AddAddress($dirDestino, "Correo enviado desde PHP");
    $resul = $mail->Send();
    if(!$resul) {
        echo "Error" . $mail->ErrorInfo;
    }
}
?>