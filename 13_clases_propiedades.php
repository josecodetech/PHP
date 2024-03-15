<?php
    class Persona{
        public $nombre;
        public $edad;
        public function saludar(){
            return "Hola, Mi nombre es {$this->nombre} y tengo {$this->edad}";
        }        
    }
    $persona1 = new Persona();
    $persona1->nombre = "Jose";
    $persona1->edad = 52;
    echo $persona1->saludar();
?>