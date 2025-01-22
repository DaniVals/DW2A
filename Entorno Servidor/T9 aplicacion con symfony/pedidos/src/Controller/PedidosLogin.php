<?php 
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class PedidosLogin extends AbstractController
{
	#[Route('/login', name:'ctrl_login')]
    public function login(){

		// EJ4
		$user = $this->getUser();
		if($user != null){
			return $this->redirectToRoute('categorias');
		}

        return $this->render('login.html.twig');
    }    
	
	#[Route('/logout', name:'ctrl_logout')]
    public function logout(){    
        return new Response();
    }
}

/*

1. Ahora mismo, al añadir un producto, la aplicación redirige al carrito. Modifica la aplicación para que se vuelva a ver la tabla de productos.

2. Cambia la aplicación para que al añadir un producto, se verifique que no se incluyen más unidades de las disponibles.

3. Modifica la tabla de productos para que no muestre los productos sin stock.

4. Consigue que, si un usuario está logueado, no pueda acceder de nuevo a la pantalla de login.

5. Haz que los usuarios administradores (usuarios con rol 1) puedan crear nuevas categorías y productos. (crear una nueva pagina con formularios (pereza))

6. Modifica la cabecera para que muestre a los administradores enlaces a lo anterior.

*/