<?php

define("TIPO_CAMBIO", 0.72);

$dolares = 200;

$euros = $dolares * TIPO_CAMBIO;

echo $dolares . " dólares son " . $euros . " euros.";

?>