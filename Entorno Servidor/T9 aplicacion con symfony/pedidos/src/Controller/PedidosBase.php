<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Categoria;
use App\Entity\Producto;
use App\Entity\Pedido;
use App\Entity\PedidoProducto;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Address;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_USER')]
class PedidosBase extends AbstractController
{
	#[Route('/categorias', name:'categorias')]
    public function mostrarCategorias(EntityManagerInterface $entityManager) {
        $categorias = $entityManager->getRepository(Categoria::class)->findAll();
        return $this->render("categorias.html.twig", ['categorias'=>$categorias]);
    }

	#[Route('/productos/{id}', name:'productos')]
    public function mostrarProductos(EntityManagerInterface $entityManager, $id) {
        $productos = $entityManager->find(Categoria::class,$id)->getProductos();
        if (!$productos) {
            throw $this->createNotFoundException('Categoría no encontrada');
        }
        return $this->render("productos.html.twig", ['productos'=>$productos]);
    }    

	#[Route('/realizarPedido', name:'realizarPedido')]
    public function realizarPedido(EntityManagerInterface $entityManager, SessionInterface $session, MailerInterface $mailer) {
		// Obtener el carrito de la sesión
        $carrito = $session->get('carrito');
		
        // Si el carrito no existe, o está vacío
        if(is_null($carrito) ||count($carrito)==0){
            return $this->render("pedido.html.twig", ['error'=>1]);
        }else{
            // Crear un nuevo pedido
            $pedido = new Pedido();
            $pedido->setFecha(new \DateTime());
            $pedido->setEnviado(0);
            $pedido->setRestaurante($this->getUser());
            $entityManager->persist($pedido);
			
			// Recorrer carrito creando nuevos pedidoproducto
            foreach ($carrito as $codigo => $cantidad){
                $producto =  $entityManager->getRepository(Producto::class)->find($codigo);
                $fila = new PedidoProducto();
                $fila->setCodProd($producto);
                $fila->setUnidades( implode($cantidad));
                $fila->setCodPed($pedido);
				
                // Actualizar el stock
                $cantidad = implode($cantidad);
                $query = $entityManager->createQuery("UPDATE App\Entity\Producto p SET p.stock = p.stock - $cantidad WHERE p.codProd = $codigo");
                $resul = $query->getResult();
                $entityManager->persist($fila);
            }
        }
        try {
            $entityManager->flush();
        }catch (Exception $e) {
            return $this->render("pedido.html.twig", ['error'=>2]);
        }
        
		// Preparar el array de productos para la plantilla
        foreach ($carrito as $codigo => $cantidad){
            $producto = $entityManager->getRepository(Producto::class)->find((int)$codigo);
            $elem = [];
            $elem['codProd'] = $producto->getCodProd();
            $elem['nombre'] = $producto->getNombre();
            $elem['peso'] = $producto->getPeso();
            $elem['stock'] = $producto->getStock();
            $elem['descripcion'] = $producto->getDescripcion();
            $elem['unidades'] = implode($cantidad);
            $productos[] = $elem;
        }
       
		// Vaciar el carrito
        $session->set('carrito', []);
        
		// Mandar el correo 
        $message = new email();
        $message->from(new Address('noreply@empresafalsa.com', 'Sistema de pedidos'));
        $message->to(new Address($this->getUser()->getCorreo()));
		$message->subject("Pedido ". $pedido->getCodPed() . " confirmado");
        $message->html($this->renderView('correo.html.twig',['id'=>$pedido->getCodPed(), 'productos'=> $productos]));
        $mailer->send($message);
       
		return $this->render("pedido.html.twig", ['error'=>0, 'id'=>$pedido->getCodPed(), 'productos'=> $productos]);
    }

	#[Route('/carrito', name:'carrito')]
    public function mostrarCarrito(EntityManagerInterface $entityManager, SessionInterface $session){
        // Para cada elemento del carrito se consulta la base de datos y se recuepran sus datos
        $productos = [];
        $carrito = $session->get('carrito');
       
		// Si el carrito no existe se crea como un array vacío
        if(is_null($carrito)){
            $carrito = [];
            $session->set('carrito', $carrito);
        }
		
		// Se crea un array con todos los datos de los productos y  la cantidad
        foreach ($carrito as $codigo => $cantidad){
            $producto = $entityManager->getRepository(Producto::class)->find((int)$codigo);
            $elem = [];
            $elem['codProd'] = $producto->getCodProd();
            $elem['nombre'] = $producto->getNombre();
            $elem['peso'] = $producto->getPeso();
            $elem['stock'] = $producto->getStock();
            $elem['descripcion'] = $producto->getDescripcion();
            $elem['unidades'] = implode($cantidad);
            $productos[] = $elem;
        }
        return $this->render("carrito.html.twig", ['productos'=>$productos]);
    }

	#[Route('/anadir', name:'anadir')]
    public function anadir(SessionInterface $session, Request $request) {
        // Leer el parámetros del array de POST 
		$id = 		$_POST['cod'];		
		$unidades =	$_POST['unidades'];	

		// Leer de la sesión
        $carrito = 	$session->get('carrito');
        if(is_null($carrito)){
            $carrito = [];
        }
       
		// Si existe el código sumamos las unidades, con mínimo de 0
        if(isset($carrito[$id])){
            $carrito[$id]['unidades'] += intval($unidades);            
        }else{
            $carrito[$id]['unidades'] = intval($unidades);
        }
        $session->set('carrito', $carrito);
		
        return $this->redirectToRoute('carrito');
    }

	#[Route('/eliminar', name:'eliminar')]
    public function eliminar(SessionInterface $session, Request $request){
        // Leer el parámetros del array de POST 
		$id 		= $_POST('cod');		
		$unidades	= $_POST('unidades');		
        
		// Leer de la sesión
		$carrito = $session->get('carrito');
        if(is_null($carrito)){
            $carrito = [];
        }
		
        // Si existe el código restamos las unidades, con mínimo de 0
        if(isset($carrito[$id])){
            $carrito[$id]['unidades'] -= intval($unidades);   
			if($carrito[$id]['unidades'] <= 0) {
				unset($carrito[$id]);
			}
        
        }
        $session->set('carrito', $carrito);
		
        return $this->redirectToRoute('carrito');
    }
    
}