<?php
    use PHPMailer\PHPMailer\PHPMailer;


    require "../vendor/autoload.php";

    $mail = new PHPMailer();
    $mail->IsSMTP(); // esta varaible mail ya permite enviar correos


    // cambiar a 0 para no ver mensajes de error
    // pulse 2 para ver todos los fallos que hay, incluso si se envia
    $mail->SMTPDebug  = 0;

    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = "tls";
    $mail->Host = 'sandbox.smtp.mailtrap.io';
    $mail->Port = 2525;

    // introducir usuario de google
    $mail->Username   = "c281f991d9b8e7"; 
    // introducir clave
    $mail->Password   = "c935a15b3b03fe";   	
    $mail->SetFrom('zeo@nintendo.com', 'ZEO de nintendo');

    // asunto
    $mail->Subject    = "ola";

    // cuerpo
    $mail->MsgHTML('olabuenascomoestasyobienytu');

    // adjuntos
    // $mail->addAttachment("empleado.xsd");

    // destinatario
    $address = "destino@servidor.com";
    $mail->AddAddress($address, "Test");
    
    // enviar
    $resul = $mail->Send();
    if(!$resul) {
        echo "Error" . $mail->ErrorInfo;
    } else {
        echo "Enviado";
    }