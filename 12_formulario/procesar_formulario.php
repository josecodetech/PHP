<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    echo "Hola $nombre, tu email es $email, se ha recibido correctamente.";
}
?>