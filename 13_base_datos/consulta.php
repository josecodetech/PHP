<?php
include 'config.php';
$sql = 'SELECT * FROM usuarios';
$resultado = $conn->query($sql);
if ($resultado->num_rows > 0){
    while($fila = $resultado->fetch_assoc()){
        echo "ID: ".$fila['id']." - Nombre: ".$fila['nombre']."- email: ".$fila['email']."<br>";
    }
}else{ 
    echo "No hay resultados";

}
$conn->close();
?>