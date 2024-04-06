<?php
include_once 'conexion.php';
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$sql = "INSERT INTO usuarios_acceso (email, password) VALUES (?, ?)";
$stmt=$conn->prepare($sql);
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$conn->close();
header("Location: index.html");
?>