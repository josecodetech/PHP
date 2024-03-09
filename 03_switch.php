<?php
$dia = 'no es ninguno';
switch ($dia) {
    case 'Lunes':
        echo 'Hoy es lunes';
        break;
    case 'Martes':
        echo 'Hoy es martes';
        break;
    case 'Miercoles':
        echo 'Hoy es miercoles';
        break;
    case 'Jueves':
        echo 'Hoy es jueves';
        break;
    case 'Viernes':
        echo 'Hoy es viernes';
        break;
    case 'Sabado':
        echo 'Hoy es sabado';
        break;
    case 'Domingo':
        echo 'Hoy es domingo';
        break;
    default:
        echo 'No es un dia valido';
        break;
}
?>