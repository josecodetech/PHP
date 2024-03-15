<?php
    interface Animal {
        public function sonido();
    }
    class Perro implements Animal {
        public function sonido() {
            echo "Guau";
        }
    }
    class Gato implements Animal {
        public function sonido() {
            echo "Miau";
        }
    }
    function hacerSonido(Animal $animal) {
        return $animal->sonido();
    }
    $perro = new Perro();
    $gato = new Gato();
    echo hacerSonido($perro);
    echo "<br>";
    echo hacerSonido($gato);
?>