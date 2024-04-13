<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = "tutorial_php";
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Error en la conexion: " . $conn->connect_error);
}
$sql = "CREATE TABLE IF NOT EXISTS entradas(
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50) NOT NULL,
    titulo VARCHAR(100) NOT NULL,
    descripcion TEXT,
    etiquetas VARCHAR(100),
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
$stmt = $conn->prepare($sql);
$stmt->execute();

// echo "Conexion exitosa";
?>