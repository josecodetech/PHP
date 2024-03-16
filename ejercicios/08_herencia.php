<?php
    class Persona {
        public $nombre;
        public $edad;
        public function mostrarInfo(){
            echo "Nombre: ".$this->nombre."<br>Edad: ".$this->edad."<br>";
        }
        
    }
    class Empleado extends Persona{
        public $cargo;
        public function mostrarInfo(){
            parent::mostrarInfo();
            echo "Cargo: $this->cargo";
        }}
$empleado = new Empleado();
$empleado->nombre = "Jose";
$empleado->edad = 29;
$empleado->cargo = "Programador";
$empleado->mostrarInfo();
?>