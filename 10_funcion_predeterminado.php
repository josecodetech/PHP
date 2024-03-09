<?php
function saludar($nombre = "Invitado"){
    echo "Hola, $nombre";
}
saludar("Jose");
echo "<br>";
saludar(); //no pasamos valor y toma el predeterminado
?>