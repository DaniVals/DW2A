<?php
// src/Jugador.php
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity] 
#[ORM\Table(name: 'jugador')]
class Jugador
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

    // #[ORM\Column(type:'integer', name:'equipo')]  // codigo viejo (junto al cambio de nombre por cambiar el nombre del archivo)
    #[ORM\ManyToOne(targetEntity:'Equipo')]
    #[ORM\JoinColumn(name:'equipo',referencedColumnName:'id')]
	private $equipo;
	
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

    public function __toString() {
        return "Jugador $this->id: Nombre: $this->nombre, Apellidos: $this->apellidos, Edad: $this->edad, Eqipo: $this->equipo";
    }

    public function toStringCorto() {
        return "Jugador: $this->nombre $this->apellidos";
    }
    public function getNombreApellidos() {
        return "$this->nombre $this->apellidos";
    }
}
	