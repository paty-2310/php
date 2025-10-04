<?php

$usuario_guardado = "patricia";
$contrasena_guardada = "2310";

$usuario_ingresado = "admin";
$contrasena_ingresada = "2310";

if ($usuario_ingresado == $usuario_guardado && $contrasena_ingresada == $contrasena_guardada) {
    echo "Acceso concedido";
} else {
    echo "Acceso denegado";
}

?>