<?php

namespace App\Controller;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

/*

1. Cambia el portal médico para que, con plantillas, se muestre un formulario para cambiar la contraseña y se pueda modificar.

2. Modifica la tabla medico de la base de datos para almacenar también el área de experiencia de cada uno (por ejemplo, "Lunares y machas"). 
[Hecho]

3. Crea un controlador que muestre mediante plantillas el portal de dermatología, solo podrán acceder los médicos que tengan como especialidad "Dermatología". Crea un nuevo rol "ROLE_DERMATOLOGO" para ello. 

4. Modifica el portal de dermatología para que muestre: un enlace para desloguearse, el nombre del médico y el área de experiencia.

*/


class Ej05 extends AbstractController
{
	// EJ 1
    #[Route('/changePassword', name: 'password_change')]
    public function changePassword(AuthenticationUtils $authenticationUtils, EntityManagerInterface $em)
    {
		$this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

		$error = $authenticationUtils->getLastAuthenticationError();

		$success = false;

		if(isset($_POST['_new_password']) && $_POST['_new_password'] != null)
		{
			$medico = $this->getUser();
			$medico->setClave($_POST['_new_password']);

			
			$em->persist($medico);
			$em->flush();

			$success = true;
		}

        return $this->render('changePassword.html.twig', ['error' => $error, 'success' => $success]);
    }

	// EJ 3 y 4
	#[Route('/portaldermatologo', name:'portal_dermatologo')]
	public function portalDermatologo()
	{
		$especialidad = $this->getUser()->getEspecialidad();
		if ($especialidad == "Dermatologia")
		{
			return $this->render('portalDermatologia.html.twig');
		}
		
		return $this->redirectToRoute('portal_clinico');

	}	
}
