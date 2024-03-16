<?php
$archivo = "19_datos.txt";
$fichero =fopen($archivo,"r");
if ($fichero){
    echo "Archivo abierto correctamente<br>";
    while(($linea = fgets($fichero))!==false){
        echo $linea;
    }
    fclose($fichero);
}else{
    echo "Error al abrir el archivo";

}
?>