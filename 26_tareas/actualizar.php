<?php
include_once "conexion.php";
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $id=$_POST["id"];
    $descripcion=$_POST["descripcion"];
    $stmt = $conn->prepare("UPDATE tareas SET descripcion=? WHERE id=?");
    $stmt->bind_param("si", $descripcion, $id);
    if ($stmt->execute()){
        echo "Tarea modificada";
        header("Location: index.php");
    }else{
        echo "Error al modificar la tarea: ".$stmt->error;
    }
}
?>