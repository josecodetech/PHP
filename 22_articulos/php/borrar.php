<?php
include_once "config.php";

$id = mysqli_real_escape_string($conn,$_GET['id']);

$sql = "DELETE FROM articulos WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Artículo eliminado correctamente";
} else {
    echo "Error al eliminar el artículo: " . $conn->error;
}

$conn->close();
?>
