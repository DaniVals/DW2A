Para hacer un controlador de URLs 

```php
<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class NombreClase extends AbstractController{

	// ==== uno basico
	#[Route('/laDirrecion')]
    public function nombreFuncion(){
		// lo que devuelve 
		// // hacer directamente new Respones no es bueno, pero sirve
        return new Response('<html><body>Hola</body></html>');
    }
    
	// ==== ya con parametros
	#[Route('/laDirrecion2/{nombreVariable?valorPorDefectoPorSiNoSeIntroduceNada}')]
    public function nombreFuncion2($nombreVariable){
        return new Response(
        "<html><body>Hola $nombreVariable</body></html>"
        );
    }

	// ==== redirigir
	#[Route('/laDirrecionProhibida')]
    public function nombreFuncion2(){
		return $this->redirectToRoute('laDirrecion2', ['nombreVariable' => $otra_cosa]);
		// es un array asi que se pueden poner mas separados por comas
    }

}
```

(Ejemplo del profe)
```php
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
```

podemos copiar simplemente lo del profe, cambiar el nombre de la clase

También se puede poner para que todas las rutas anteriores salgan de una ruta mayor especificándolo en el principio de la clase
```php
<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

#[Route('/base')]
class EjemploRutaBase extends AbstractController{
  #[Route('/hola')]
  public function hola(){
        return new Response('<html><body>Holiwi</body></html>');
	 }
}
```