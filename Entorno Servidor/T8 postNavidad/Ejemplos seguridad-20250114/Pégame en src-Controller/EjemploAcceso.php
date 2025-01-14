<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class EjemploAcceso extends AbstractController
{
	#[Route('/portalclinico', name:'portal_clinico')]
	public function portalClinico()
	{
		// Comprobamos si el usuario al menos se ha logueado
		$this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
		
		return new Response("<h1>Hola, doctor</h1>");
	}
	
	#[Route('/portaladmin', name:'portal_admin')]
	public function portalAdmin()
	{
		$this->denyAccessUnlessGranted('ROLE_ADMIN');
		return new Response("<h1>Hola, administrador (con código PHP)</h1>");
	}	
	
	#[Route('/quiensoy', name:'quien_soy')]	
	public function quiensoy()
	{
		// Recuperamos el usuario
		$medico = $this->getUser();
		
		// Comprobamos si hay algún usuario
		if($medico == null)
			return new Response("Nadie logueado");
		
		// En caso contrario, sí que hay
		return new Response("<h1>Usuario:" . $medico->getUsuario() . 
							"<br>Especialidad:" . $medico->getEspecialidad() .
							"<br>¿Supervisor?" . $medico->getSupervisor() . "</h1>");
	}
	
	#[Route('/quiensoy_plantilla', name:'quien_soy_plantilla')]	
	public function quiensoy_plantilla()
	{
		return $this->render("quiensoy.html.twig");
	}
}