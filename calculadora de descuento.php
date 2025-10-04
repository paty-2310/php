<?php

$precio = 300;
$descuento = 0;
$porcentaje = 0;

if ($precio > 100) {
    $porcentaje = 15;
    $descuento = $precio * 0.15;
} elseif ($precio >= 50) {
    $porcentaje = 5;
    $descuento = $precio * 0.05;
}

$total = $precio - $descuento;

echo "Precio Original: $" . $precio . "\n";
echo "Descuento (" . $porcentaje . "%): $" . $descuento . "\n";
echo "Precio Final: $" . $total . "\n";

?>