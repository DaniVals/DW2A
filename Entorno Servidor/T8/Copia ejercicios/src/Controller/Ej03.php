<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/*
5. Crea un controlador pedirDatos que renderice una plantilla pedirDatos.html.twig, 
donde se vea un formulario para calcular el índice de masa corporal. 
Cuando el formulario se envía al controlador procesarDatos, 
entonces se muestra la plantilla mostrar_resultado.html.twig con el resultado.

6. Con Twig haz una plantilla base_uploader.html.twig , 
que se usará luego para hacer una web de subida de archivos. 
Tiene un encabezado <header> y un <footer> que debes diseñar con CSS. 
La parte central es un <section> definido como bloque de Twig 
(si no recuerdas cómo hacerlo, mira las diapositivas últimas). 

7. Ahora, haciendo uso de la plantilla que has creado, haz la aplicación UploaderFiles™. 
Cuando carga, muestra un formulario para subir ficheros. 
El formulario llega a /procesasubida, 
que mueve el fichero a la carpeta de ficheros y enseña mensaje de error o éxito con un enlace para descargarlo.
*/
#[Route('/ej3')]
class Ej03 extends AbstractController{
	
	#[Route('/pedirDatos')]
    public function formularioIMC(){

        return $this->render('03pedirDatos.html.twig');
    }
	
	#[Route('/procesarDatos', name:'procesarIMC')]
    public function calcularIMC(){
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        return $this->render('03mostrarResultado.html.twig', ['peso' => $peso, 'altura' => $altura]);
    }

    
}
