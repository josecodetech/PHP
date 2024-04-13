<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include_once 'conexion.php';
    $usuario=$_POST['usuario'];
    $titulo=$_POST['titulo'];
    $descripcion=$_POST['descripcion'];
    $etiquetas=$_POST['etiquetas'];
    $sql="INSERT INTO entradas (usuario,titulo,descripcion,etiquetas) VALUES (?,?,?,?)";
    $stmt=$conn->prepare($sql);
    $stmt->bind_param("ssss", $usuario, $titulo, $descripcion, $etiquetas);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    header("Location: index.php");
}

?>