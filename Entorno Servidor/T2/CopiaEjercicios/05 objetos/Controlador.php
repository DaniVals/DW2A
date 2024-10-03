
<?php
    class Controlador {
        private $titulo;
        private $color;
        private $saludo;

        function __construct($titulo, $color, $saludo) {
            $this->titulo = $titulo;
            $this->color = $color;
            $this->saludo = $saludo;        
        }

        public function getTitulo() {return $this->titulo;}
        public function setTitulo($titulo) {$this->titulo = $titulo;}
        public function getColor() {return $this->color;}
        public function setColor($color) {$this->color = $color;}
        public function getSaludo() {return $this->saludo;}
        public function setSaludo($saludo) {$this->saludo = $saludo;}

        public function __toString() {
            return "Controlador: titulo: " . $this->titulo . ", color: ". $this->color . ", saludo: ". $this->saludo;
        }


        public function mostrarTitulo(){
            echo "<title>".$this->titulo."</title>";
        }
        public function mostrarColor(){
            // <style>body{background-color: ;}</style>
            echo "<style>body{background-color:".$this->color.";}</style>";
        }
        public function mostrarSaludo(){
            echo "<h1>".$this->saludo."</h1>";
        }
    }
?>