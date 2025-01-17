<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity] 
#[ORM\Table(name: 'productos')]
class Producto 
{
	#[ORM\Id]
    #[ORM\Column(type:'integer', name:'CodProd')]
    #[ORM\GeneratedValue]
    private $codProd;

	#[ORM\Column(type:'string', name:'nombre')]
    private $nombre;

	#[ORM\Column(type:'string', name:'descripcion')]
    private $descripcion;

	#[ORM\Column(type:'float', name:'peso')]
    private $peso;

	#[ORM\Column(type:'integer', name:'stock')]
    private $stock;

	#[ORM\ManyToOne(targetEntity:'Categoria', inversedBy:'productos')]
	#[ORM\JoinColumn(name:'Categoria', referencedColumnName:'CodCat')]
    private $categoria;   
	
    public function getCodProd() {
        return $this->codProd;
    }    
    public function setCodProd($codProd) {
        $this->codProd = $codProd;
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
    public function getPeso() {
        return $this->peso;
    }
	public function setPeso($peso) {
        $this->peso = $peso;
    }
	public function getStock(){
        return $this->stock;
    }
    public function setStock($stock) {
        $this->stock = $stock;
    }
    public function getCategoria() {
        return $this->categoria;
    }
    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }
}