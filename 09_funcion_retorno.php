<?php
function promedio($numeros){
    $total = array_sum($numeros);
    $cantidad = count($numeros);
    $promedio = $total/$cantidad;
    return $promedio;
}
$notas = array(5,7,9,10,9,6,5,3);
$promedio = promedio($notas);
echo "El promedio es: $promedio";
?>