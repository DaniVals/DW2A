<?php
// src/Entrevista.php
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity] 
#[ORM\Table(name: 'entrevista')]
class Entrevista
{
    #[ORM\Id]
    #[ORM\Column(type:'integer', name:'id')]
    #[ORM\GeneratedValue]
    private $id;

    #[ORM\Column(type:'string', name:'cadena')]
    private $cadena;

    #[ORM\Column(type:'string', name:'entrevistador')]
	private $entrevistador;

	#[ORM\Column(type:'string', name:'fecha')]
	private $fecha;
    // usamos string para fecha pq si no no deja imprimirlo bien

    #[ORM\ManyToOne(targetEntity:'JugadorBidireccional')]
    #[ORM\JoinColumn(name:'jugador',referencedColumnName:'id')]
	private $jugador;
	
	public function getId()
    {
        return $this->id;
    }

    public function getCadena()
    {
        return $this->cadena;
    }

    public function setCadena($cadena)
    {
        $this->cadena = $cadena;
    }

    public function getEntrevistador()
    {
        return $this->entrevistador;
    }

    public function setEntrevistador($entrevistador)
    {
        $this->entrevistador = $entrevistador;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    public function getJugador()
    {
        return $this->jugador;
    }

    public function setJugador($jugador)
    {
        $this->jugador = $jugador;
    }

    public function __toString()
    {
        return "Entrevista: ".  $this->cadena . " " . $this->entrevistador . " " . $this->fecha . " " . $this->jugador;
    }
}
	