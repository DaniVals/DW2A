<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class EjemploControladores extends AbstractController{
    
	// Enrutado básico
	#[Route('/hola', name:'hol')]
    public function home(){
        return new Response('<html><body>Hola</body></html>');
    }

	#[Route('/saludo')]
    public function saludar(){
        return new Response('<html><body>¡Bienvenido!</body></html>');
    }

	// Paso de parámetros
	#[Route('/producto/{num1}/{num2}', name:'prod')]
	public function producto($num1, $num2){
		$producto = $num1 * $num2;
		return new Response("<html><body> " . $producto . "</body></html>");
	}

	// Valores por defecto en los parámetros
	#[Route('/defecto1/{num}', name:'def1')]
	public function defecto1($num = 3){		
		return new Response("<html><body> " . $num . "</body></html>");
	}

	#[Route('/defecto2/{num?4}', name:'def2')]
	public function defecto2($num){		
		return new Response("<html><body> " . $num . "</body></html>");
	}
		
	// Redirección entre controladores pasándo parámetros
	#[Route('/cuadrado/{num}', name:'cuad')]
	public function cuadrado($num){
		return $this->redirectToRoute('prod', ['num1' => $num, 'num2' => $num]);
	}	
}