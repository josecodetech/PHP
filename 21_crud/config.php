<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = "tutorial_php";
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Error en la conexion: " . $conn->connect_error);
}
// echo "Conexion exitosa";
?>