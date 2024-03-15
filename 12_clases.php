<?php
    class Coche{
        public $marca;
        public $modelo;
        public function arrancar(){
            return "El coche está arrancando";
        
        }
    }
    $miCoche = new Coche();
    $miCoche->marca="Toyota";
    $miCoche->modelo="Corolla";
    echo $miCoche->arrancar()."<br>";
    echo $miCoche->marca."<br>";
    echo $miCoche->modelo."<br>";
    $tuCoche = new Coche();
    $tuCoche->marca="Honda";
    $tuCoche->modelo="Civic";
    echo $tuCoche->arrancar()."<br>";
    echo $tuCoche->marca."<br>";
    echo $tuCoche->modelo."<br>";
?>