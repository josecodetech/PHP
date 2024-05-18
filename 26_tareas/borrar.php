<?php
    include_once "conexion.php";
    if ($_SERVER["REQUEST_METHOD"]=="GET" && isset($_GET["id"])){
        $id = $_GET["id"];
        $sql = "DELETE FROM tareas WHERE id=$id";
        if($conn->query($sql)===TRUE){
            echo "Tarea eliminada con exito";
            header("Location: index.php");
        }else{
            echo "Error al eliminar la tarea: ".$conn->error;
        }

    }else {
        echo "ID de tarea no proporcionado";
    }
    $conn->close();
?>