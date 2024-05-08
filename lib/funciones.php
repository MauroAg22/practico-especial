<?php

function letra_random() {
    $min = 97; // a
    $max = 122; // z
    return chr(rand($min, $max));
}

function estaEnArreglo(array $arregloLetras, string $unaLetra) {
    $letraEnArreglo = false;
    foreach ($arregloLetras as $value) {
        if ($value == strtolower($unaLetra)) {
            $letraEnArreglo = true;
            break;
        }
    }
    return $letraEnArreglo;
}

function cantidadDeLetras(array $arregloLetras, string $unaLetra) {
    $cantLetras = 0;
    foreach ($arregloLetras as $value) {
        if ($value == strtolower($unaLetra)) {
            $cantLetras++;
        }
    }
    return $cantLetras;
}