<?php
// ===== MUCHO CUIDADO, tienes que incluir el namespace =====
namespace App\Entity;
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

   #[ORM\Column(type:'integer', name:'equipo')]
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
}
	