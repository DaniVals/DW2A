<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity] 
#[ORM\Table(name: 'categorias')]
class Categoria 
{
	#[ORM\Id]
    #[ORM\Column(type:'integer', name:'CodCat')]
    #[ORM\GeneratedValue]
    private $codCat;

	#[ORM\Column(type:'string', name:'nombre')]
    private $nombre;

	#[ORM\Column(type:'string', name:'descripcion')]
    private $descripcion;

	#[ORM\OneToMany(targetEntity:'Producto', mappedBy:'categoria')]
    private $productos;
	
    public function getCodCat() {
        return $this->codCat;
    }
    public function getProductos() {
        return $this->productos;
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    public function getDescripcion() {
        return $this->descripcion;
    }
    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }
}