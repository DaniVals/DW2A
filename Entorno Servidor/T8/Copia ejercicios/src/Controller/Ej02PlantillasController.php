<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/*
0. Crea una nueva clase controladora llamada PlantillasController.php y haz los ejercicios siguientes en ella.
*/
#[Route('/ej2')]
class Ej02PlantillasController extends AbstractController{
	
    /*
    1. Escribe un controlador igual al del factorial que hiciste en la relación anterior. 
    La diferencia es que esta vez la salida para el usuario debe hacerse renderizando una única plantilla llamada factorial.html.twig, 
    que recibe un único parámetro resultado. Es decir, sin Response.
    Si hay errores (el usuario pasó un valor no numérico, etc.), 
    el controlador pasa a la plantilla el valor -1, de modo que esta pueda imprimir un error genérico.
    */
	#[Route('/factorial/{num}')]
    public function factorial2($num){

        if(!is_numeric($num)){
            return $this->render('factorial.html.twig', ['resultado' => -1]);
        }

        $factorial = 1;
        for($i = 1; $i <= $num; $i++){
            $factorial *= $i;
        }
        return $this->render('factorial.html.twig', ['resultado' => $factorial, 'num' => $num]);
    }
	
    
    /*
    2. Crea un nuevo controlador que permita introducir un una temperatura (/converter/45). 
    La página renderiza una nueva plantilla converter.html.twig que muestra:

    La temperatura que ha indicado el usuario.
    Dos enlaces: "Convertir a fahrenheit" y "Convertir a celsius".
    Que al pulsar, llevan a las rutas del ejercicio 2 de la relación anterior (/celsius/45 y /fahrenheit/45).
    Pero ojo, estas rutas tiene que generarlas automáticamente Twig.
    */
	#[Route('/converter/{temp}')]
    public function temperatura($temp){
        return $this->render('converter.html.twig', ['temp' => $temp]);
    }

    
}


/*
3. Cambia la plantilla anterior para que, si el usuario mete un número grande (/converter/100000), 
solo se muestre un error y nada más.

4. Crea una nueva plantilla encabezado.html.twig que se use como encabezado de tus páginas. 
Por ejemplo, una imagen y la palabra "Converter". 
Incorpora esta plantilla como encabezado de la plantilla converter.html.twig y pruébala.
*/