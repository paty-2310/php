<?php

$dia_numero = 4; 

switch ($dia_numero) {
    case 1:
        echo "El día " . $dia_numero . " es Lunes";
        break;
    case 2:
        echo "El día " . $dia_numero . " es Martes";
        break;
    case 3:
        echo "El día " . $dia_numero . " es Miércoles";
        break;
    case 4:
        echo "El día " . $dia_numero . " es Jueves";
        break;
    case 5:
        echo "El día " . $dia_numero . " es Viernes";
        break;
    case 6:
        echo "El día " . $dia_numero . " es Sábado";
        break;
    case 7:
        echo "El día " . $dia_numero . " es Domingo";
        break;
    default:
        echo "Error: Número de día no válido. Debe ser entre 1 y 7.";
}

?>