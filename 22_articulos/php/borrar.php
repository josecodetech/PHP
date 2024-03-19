<?php
include_once "config.php";

$id = $_GET['id'];

$sql = "DELETE FROM articulos WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Artículo eliminado correctamente";
} else {
    echo "Error al eliminar el artículo: " . $conn->error;
}

$conn->close();
?>
