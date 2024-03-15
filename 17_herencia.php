<?php
class Animal{
    public function comer(){
        return "El animal esta comiendo";
    }
}
class Perro extends Animal{
    public function ladrar(){
        return "Guau guau";
    }
}
$perro = new Perro();
echo $perro->comer(); //metodo heredado
echo "<br>";
echo $perro->ladrar();//metodo de la subclase
?>