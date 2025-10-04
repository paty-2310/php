<?php

$edad = 18;

if ($edad >= 0 && $edad <= 12) {
    echo "Clasificación: Niño";
} elseif ($edad >= 13 && $edad <= 17) {
    echo "Clasificación: Adolescente";
} elseif ($edad >= 18 && $edad <= 64) {
    echo "Clasificación: Adulto";
} else { 
    echo "Clasificación: Adulto Mayor";
}

?>