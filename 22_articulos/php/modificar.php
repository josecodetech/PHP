<?php
include_once "config.php";

$id = mysqli_real_escape_string($conn,$_POST['id']);
$nombre = mysqli_real_escape_string($conn,$_POST['nombre']);
$descripcion = mysqli_real_escape_string($conn,$_POST['descripcion']);
$precio = mysqli_real_escape_string($conn,$_POST['precio']);

$sql = "UPDATE articulos SET nombre='$nombre', descripcion='$descripcion', precio='$precio' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Artículo modificado correctamente";
} else {
    echo "Error al modificar el artículo: " . $conn->error;
}

$conn->close();
?>
