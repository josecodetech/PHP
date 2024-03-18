<?php
    include "config.php";
    $sql = "SELECT * FROM usuarios";
    $resultado = $conn->query($sql);
    if ($resultado->num_rows>0){
        echo "<h2>Registros de usuarios</h2>";
        echo "<ul>";
        while($fila=$resultado->fetch_assoc()){
            echo "<li><strong>ID:</strong> ".$fila["id"]. "-<strong>Nombre: </strong> ".$fila["nombre"]. "- <strong>Email: </strong> ".$fila["email"]. "</li>";
        } echo "</ul>";
        } else {
            echo "No hay registros";
        
        }
        $conn->close();
    
?>