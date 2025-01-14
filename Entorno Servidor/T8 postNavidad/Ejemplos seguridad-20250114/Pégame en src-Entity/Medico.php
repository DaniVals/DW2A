<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

// =============================================================================
// La clase debe implementar UserInterface y PasswordAuthenticatedUserInterface
// =============================================================================

#[ORM\Entity]
#[ORM\Table(name:'Medico')]
class Medico implements UserInterface, PasswordAuthenticatedUserInterface
{
	// =======================================================
	// Atributos privados
	// =======================================================

    #[ORM\Id]
    #[ORM\Column(name:'usuario',type:'string')]
    private $usuario;

    #[ORM\Column(name:'clave',type:'string')]
    private $clave;

    #[ORM\Column(name:'supervisor',type:'string')]
    private $supervisor;

    #[ORM\Column(name:'especialidad',type:'string')]
    private $especialidad;	
	

	// =======================================================
	// Setters y getters
	// =======================================================
    public function getUsuario() {
        return $this->usuario;
    }
    public function setUsuario($usuario) {
       $this->usuario = $usuario;
    }
    public function getClave() {
        return $this->clave;
    }
    public function setClave($clave) {
        $this->clave = $clave;
    }
	public function getSupervisor() {
        return $this->supervisor;
    }
    public function setSupervisor($supervisor) {
        $this->supervisor = $supervisor;
    }
 	public function getEspecialidad() {
        return $this->especialidad;
    }
    public function setEspecialidad($especialidad) {
        $this->especialidad = $especialidad;
    }
 
 	// =======================================================
	// Elementos necesarios para la autenticación
	// =======================================================
   public function getRoles(): array
    {
		// Si el médico es supervisor, entonces tiene acceso
		// a la zona de administración.
		if($this->supervisor)
			return ['ROLE_USER', 'ROLE_ADMIN'];
		else
			return ['ROLE_USER'];            
	}

    public function getPassword(): string
    {
        return $this->clave;
    }


    public function getUserIdentifier(): string
    {
        return $this->getUsuario();
    }

    public function getSalt(): ?string
    {
        return null;
    }
	
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
}