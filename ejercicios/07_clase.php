<?php
    class Persona {
        public $nombre;
        public $edad;
        public function mostrarInfo(){
            echo "Nombre: ".$this->nombre."<br>Edad: ".$this->edad."<br>";
        }
        
    }
    $persona = new Persona();
    $persona->nombre = "Juan";
    $persona->edad = 25;
    $persona->mostrarInfo();
?>