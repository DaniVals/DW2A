<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class EjemploComponentes extends AbstractController{
	
	#[Route('/leerdeget')]
	public function leerdeget(Request $request)
	{
		// https://symfony.com/doc/current/components/http_foundation.html#request		
		// Recuperar una variable de $_GET
		if($request->query->get('edad') == null) {
			$msg = "No has pasado un parámetro 'edad' como GET";
		} else {
			$msg = "Tienes " . $request->query->get('edad') . " años.";
		}
		return new Response($msg);
	}

	#[Route('/leerdepost')]
	public function leedepost(Request $request)
	{
		// https://symfony.com/doc/current/components/http_foundation.html#request
		// Recuperar una variable de $_POST
		if($request->request->get('edad') == null) {
			$msg = "No has pasado un parámetro 'edad' como POST";
		} else {
			$msg = "Tienes " . $request->request->get('edad') . " años.";
		}
		return new Response($msg);
	}
	
	#[Route('/leerdeserver')]
	public function leerdeserver(Request $request)
	{
		// https://symfony.com/doc/current/components/http_foundation.html#request
		return new Response("El dominio del servidor es: " . $request->server->get('HTTP_HOST'));
	}

	#[Route('/sesion')]
	public function sesion(SessionInterface $sesion) 
	{
		// https://symfony.com/doc/current/session.html
		// Recupero el valor que quiero
		$visitas = $sesion->get("contador_visitas");
		
		// Compruebo
		if($visitas == null) {
			$sesion->set("contador_visitas", 1);
		} else {
			$sesion->set("contador_visitas", $visitas + 1);
		}
		
		return new Response("Esta es tu visita número " . $sesion->get("contador_visitas"));
	}
}