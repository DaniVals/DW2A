<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
class EjemploPlantillas extends AbstractController{
	
	#[Route('/saludo/{nombre}', name:'saludo')]
	 public function saludo($nombre){
		return $this->render('saludo.html.twig', ['nombre' => $nombre]);
	 }

	#[Route('/positivo/{num}', name:'positivo')]
	public function positivo($num){
		return $this->render('if.html.twig', ['numero' => $num]);
	}

	#[Route('/tabla', name:'tab')]
	 public function tabla(){
		$filas = [	['codigo'=> '1', 'nombre' =>'Sevilla'],
					['codigo'=> '2', 'nombre' =>'Madrid'] ];
		
		return $this->render('tabla.html.twig', ['filas' => $filas]);
	 }
	 
}