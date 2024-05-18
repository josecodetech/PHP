<?php
include_once "conexion.php";
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    //$id=$_POST["id"];
    $descripcion=$_POST["descripcion"];
    $stmt=$conn->prepare("INSERT INTO tareas (descripcion) VALUES (?)");
    $stmt->bind_param("s",$descripcion);
    if($stmt->execute()){
        echo "Tarea insertada";
        header("Location: index.php");
    }else{
        echo "Error al insertar tarea: ".$stmt->error;
    }
    $stmt->close();
    $conn->close();
}
?>