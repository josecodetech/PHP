<?php
include_once "config.php";

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];

$sql = "UPDATE articulos SET nombre='$nombre', descripcion='$descripcion', precio='$precio' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Artículo modificado correctamente";
} else {
    echo "Error al modificar el artículo: " . $conn->error;
}

$conn->close();
?>
