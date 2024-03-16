<?php
$archivo = "datos.txt";
$fichero = fopen($archivo, "w");
if ($fichero){
    fwrite($fichero, "Hola mundo\n");
    fwrite($fichero, "Ejemplo de escritura con php\n");
    fclose($fichero);
    echo "El archivo se ha creado correctamente";

} else {
    echo "Error al crear el archivo";
}

?>