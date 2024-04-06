<?php
include_once "conexion.php";
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * FROM usuarios_acceso WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$resultado = $stmt->get_result();
$usuario = $resultado->fetch_assoc();
if ($usuario && password_verify($password, $usuario['password'])) {
    session_start();
    $_SESSION['usuario'] = $usuario;
    header("Location: inicio.html");
} else {
    header("Location: error.html");
}
$conn->close();
?>