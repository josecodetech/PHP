<?php
include "config.php";
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $sql = "INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')";
    if ($conn->query($sql)===TRUE){
        echo "Registro creado con exito.";
    }else{
        echo "Error al crear el registro: " . $conn->error;
    }

}
$conn->close();
?>