<?php
function factorial($num){
    if ($num <= 1) {
        return 1;
    } else {
        return $num * factorial($num - 1);
    }
}
$numero = 7;
echo "El factorial de $numero es " . factorial($numero);
?>