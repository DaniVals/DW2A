<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
// ===== MUCHO CUIDADO, si no incluyes la entidad y el componente Doctrine, no funcionará =====
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Equipo;

class EjemploBaseDatos extends AbstractController{

	#[Route('/mostrar_equipo')]
	 public function mostrar_equipo(EntityManagerInterface $entityManager){

		// Me recupero el equipo con clave primaria 1
		$eq = $entityManager->find(Equipo::class, 1);
		$nombre = $eq->getNombre();

        return new Response('<html><body>'. $nombre . '</body></html>');
	 }
	}