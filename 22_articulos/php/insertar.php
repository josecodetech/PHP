<?php
include_once "config.php";

$nombre = mysqli_real_escape_string($conn,$_POST['nombre']);
$descripcion = mysqli_real_escape_string($conn,$_POST['descripcion']);
$precio = mysqli_real_escape_string($conn,$_POST['precio']);

$sql = "INSERT INTO articulos (nombre, descripcion, precio) VALUES ('$nombre', '$descripcion', '$precio')";

if ($conn->query($sql) === TRUE) {
    echo "Artículo insertado correctamente";
} else {
    echo "Error al insertar el artículo: " . $conn->error;
}

$conn->close();
?>
