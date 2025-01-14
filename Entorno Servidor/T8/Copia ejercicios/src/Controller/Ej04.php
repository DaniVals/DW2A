<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
// ===== MUCHO CUIDADO, si no incluyes la entidad y el componente Doctrine, no funcionará =====
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Equipo;

/*
1. Escribe un controlador que reciba el código de un equipo y muestre sus datos usando una plantilla.
Si el equipo no existe, muestra un mensaje de error.

2. Escribe un formulario que permita insertar jugadores en un equipo.
El equipo se identifica por la URL (por ejemplo: http://localhost/.../equipo/10/crearjugador hace que el jugador acabe asignado al equipo 10).

3. Crea un formulario que envíe emails.
Si el usuario mete el mismo el mismo email de remitente y de destino, debes mostrar un error.

4. Para no saturar el sistema, tu sistema de envío de emails debe obligar a esperar 2 minutos al usuario si intenta enviar un tercer email.
Puedes ayudarte de la función time(), y usar sesiones con SessionInterface.
*/
#[Route('/ej4')]
class Ej04 extends AbstractController {
	
	// EJ 1
	#[Route('/equipo', name: 'mostrarDatosEquipo')]
	public function mostrar_equipo(EntityManagerInterface $entityManager){

		// Me recupero el equipo con clave primaria 1
		$eq = $entityManager->find(Equipo::class, $_POST['equipo']);
		
		if ($eq != null) {
			$nombre = $eq->getNombre();
			$id = $eq->getId();

			return $this->render('04mostrarEquipo.html.twig', [
				'nombre' => $nombre,
				'id' => $id
			]);
		}

		return $this->render('04mostrarEquipoErr.html.twig', ['id' => $_POST['equipo']]);
	}
	#[Route('/buscar_equipo')]
	public function pedir_equipo(){

		return $this->render('04pedirEquipo.html.twig', []);
	}

	// EJ 2
	// EJ 3
	// EJ 4
}
