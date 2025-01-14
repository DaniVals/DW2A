<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

enum CODE_ERROR:int {
	case NOT_A_NUMBER = 0;
	case BELLOW_ZERO  = 1;
}

#[Route('/ej1')]
class Ej01TempController extends AbstractController{

	// Ej 1
	#[Route('/fractal/{num}')]
	public function calcularFractal($num){

		if (!is_numeric($num) || $num < 0) {
			return new Response("<html><body> Error: ese numero no es valido </body></html>");
		}

		$factorial = 1;
		for ($i = 1; $i <= $num; $i++) {
			$factorial *= $i;
		}

		return new Response("<html><body> " . $factorial . "</body></html>");
	}

	// Ej 3
	#[Route('/error/{cod}', name:'error')] // tienes que ponerle un nombre para llamarlo
	public function mostrarRrror($cod){

		switch ($cod) {
			case CODE_ERROR::NOT_A_NUMBER->value:
				$error = "Error: ese numero no es valido";
				break;
			
			default:
				$error = "Error numero: " . $cod;
				break;
		}
		return new Response("<html><body> " . $error . "</body></html>");
	}

	// Ej 2
	#[Route('/celsius/{num}', name:'celsius')]
	public function calcularCaF($num){

		if (!is_numeric($num) || $num < 0) {
			// pones el nombre, no la URL
			return $this->redirectToRoute('error', ['cod' => CODE_ERROR::NOT_A_NUMBER->value]);
		}

		$fahrenheit = $num * 9/5 + 32;

		return new Response("<html><body> " . $fahrenheit . "</body></html>");
	}

	#[Route('/fahrenheit/{num}', name:'fahrenheit')]
	public function calcularFaC($num){

		if (!is_numeric($num) || $num < 0) {
			return $this->redirectToRoute('error', ['cod' => CODE_ERROR::NOT_A_NUMBER->value]);
		}

		$celsius = ($num - 32) * 5/9;

		return new Response("<html><body>" . $celsius . "</body></html>");
	}

}

/*

0. Crea una nueva clase controladora llamada TempController.php y haz los ejercicios siguientes en ella.

(Le añadi el Ej01 para que cargue antes XDD)

1. Escribe un controlador que reciba un número y muestre su factorial. 
Hay que comprobar que el parámetro sea realmente un número y que no sea negativo.

2. Crea un par de controladores que reciban una temperatura en grados celsius por la URL (http://localhost:8000/celsius/25) 
o fahrenheit (http://localhost:8000/fahrenheit/101) y devuelvan la conversión a la otra unidad. 
La temperatura que pasa el usuario debe ser un número y no puede ser al cero absoluto (-273ºC).

3. En el ejercicio anterior, en caso de que exista algún error, 
haz que el usuario sea redireccionado a otro controlador (/error) que lo maneje. 
Recibe un parámetro, que será el mensaje que se mostrará al usuario. 

4. Modifica los ejercicios anteriores para que las rutas antepongan /conversor (por ejemplo: /conversor/celsius/25), 
usando una ruta de clase para ello.

*/