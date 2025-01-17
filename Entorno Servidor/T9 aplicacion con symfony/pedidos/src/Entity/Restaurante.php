<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity] 
#[ORM\Table(name: 'restaurantes')]
class Restaurante implements UserInterface, PasswordAuthenticatedUserInterface
{
	#[ORM\Id]
    #[ORM\Column(type:'integer', name:'CodRes')]
    #[ORM\GeneratedValue]
    private $codRes;

	#[ORM\Column(type:'string', name:'Correo')]
    private $correo;

	#[ORM\Column(type:'string', name:'Clave')]
    private $clave;

	#[ORM\Column(type:'string', name:'Pais')]
    private $pais;

	#[ORM\Column(type:'string', name:'CP')]
    private $CP;

	#[ORM\Column(type:'string', name:'Ciudad')]
    private $ciudad;

	#[ORM\Column(type:'string', name:'Direccion')]
    private $direccion;

	#[ORM\Column(type:'integer', name:'rol')]
    private $rol;

    public function getRol(){
        return $this->rol;
    }

    public function setRol($rol){
        $this->rol = $rol;
    }

    public function getCodRes(){
        return $this->codRes;
    }
    public function getCorreo(){
        return $this->correo;
    }
    public function setCorreo($correo){
        $this->correo = $correo;
    }
    public function getClave(){
        return $this->clave;
    }
    public function setClave($clave){
        $this->clave = $clave;
    }
    public function getPais(){
        return $this->pais;
    }
    public function setPais($pais){
        $this->pais = $pais;
    }
	public function getCP(){
        return $this->CP;
    }

    public function setCP($CP) {
        $this->CP = $CP;
    }

    public function getCiudad(){
        return $this->ciudad;
    }

    public function setCiudad($ciudad){
        $this->ciudad = $ciudad;
    }

    public function getDireccion(){
        return $this->direccion;
    }

	public function getRoles(): array
    {
		return ['ROLE_USER'];            
	}

    public function getPassword(): string
    {
        return $this->getClave();
    }


    public function getUserIdentifier(): string
    {
        return $this->getCorreo();
    }

    public function getSalt(): ?string
    {
        return null;
    }
	
    public function eraseCredentials(): void
    {

    }
}