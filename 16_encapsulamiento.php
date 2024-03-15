<?php
    class Producto{
        private $nombre;
        protected $precio;
        public function __construct($nombre, $precio){
            $this->nombre = $nombre;
            $this->precio = $precio;
        }
        public function getInfo(){
            return "Producto : {$this->nombre}, Precio : {$this->precio}";
        }
        }
    $producto1 = new Producto("Leche", 5);
    echo $producto1->getInfo();
    echo "<br>";
    $producto2 = new Producto("Pan", 0.5);
    echo $producto2->getInfo();
    echo "<br>";
    // echo $producto2->nombre; // error propiedad privada
    // echo $producto2->precio; // error propiedad protegida
?>