<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Address;


class EjemploMail extends AbstractController{

	 #[Route('/correo')]
	 public function prueba_correo(MailerInterface $mailer){        
		$message = new email();
        $message->from(new Address('direccion_remitente@consymfony.com', "Nombre del remitente"));
        $message->to(new Address('direccion_destino@consymfony.com'));
		$message->subject("Asunto del mensaje");
		$message->html("<h1>Cuerpo del mensaje</h1>");
		$mailer->send($message);	
		return new Response('<html><body>Enviado</body></html>');
	 }
}