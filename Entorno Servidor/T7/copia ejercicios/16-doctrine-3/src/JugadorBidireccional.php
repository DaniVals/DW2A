<?php
// src/JugadorBidireccional.php

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity] 
#[ORM\Table(name: 'jugador')]
class JugadorBidireccional
{
    #[ORM\Id]
    #[ORM\Column(type:'integer', name:'id')]
    #[ORM\GeneratedValue]
    private $id;

    #[ORM\Column(type:'string', name:'nombre')]
    private $nombre;

    #[ORM\Column(type:'string', name:'apellidos')]
	private $apellidos;

	#[ORM\Column(type:'integer', name:'edad')]
	private $edad;

    #[ORM\ManyToOne(targetEntity:'EquipoBidireccional', inversedBy:'jugadores')]
    #[ORM\JoinColumn(name:'equipo', referencedColumnName:'id')]
	private $equipo;
	
    #[ORM\OneToMany(targetEntity:'Entrevista', mappedBy:'jugador')]
	private $entrevistas;

	public function getId()
    {
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
	public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }
	public function getEdad()
    {
        return $this->edad;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;
    }	
	public function getEquipo()
    {
        return $this->equipo;
    }

    public function setEquipo($equipo)
    {
        $this->equipo = $equipo;
    }

    public function getEntrevistas()
    {
        return $this->entrevistas;
    }

    public function __toString()
    {
        return "Jugador: ". $this->nombre . " " . $this->apellidos;
    }
}
	