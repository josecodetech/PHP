<?php
include_once "config.php";

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];

$sql = "INSERT INTO articulos (nombre, descripcion, precio) VALUES ('$nombre', '$descripcion', '$precio')";

if ($conn->query($sql) === TRUE) {
    echo "Artículo insertado correctamente";
} else {
    echo "Error al insertar el artículo: " . $conn->error;
}

$conn->close();
?>
