<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = "tutorial_php";
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Error en la conexion: " . $conn->connect_error);
}
$sql = "
CREATE TABLE IF NOT EXISTS tareas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    descripcion TEXT
)";
$stmt = $conn->prepare($sql);
$stmt->execute();

// echo "Conexion exitosa";
?>