<?php
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    if (!empty($nombre) && is_numeric($edad) && $edad > 0 && intval($edad)==$edad){
        echo "Nombre: $nombre <br>";
        echo "Edad: $edad";
    }else{
        echo "Error: ingresa un nombre valido y una edad numerica positiva";
    }
?>