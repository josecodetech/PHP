<?php
    include "config.php";
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $id =$_POST["id"];
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $sql = "UPDATE usuarios SET nombre = '$nombre', email = '$email' WHERE id = $id";
        if ($conn->query($sql)===TRUE){
            echo "Registro actualizado";
        }else{
            echo "Error al actualizar el registro".$conn->error;
        }
    }
?>