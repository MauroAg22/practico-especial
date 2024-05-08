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

function arregloAsociatvoLetras(array $arregloLetras) {
    $arregloAsociatvo = [];

    foreach ($arregloLetras as $letra) {
        $existe = false;
        $letraTemporal = "";

        foreach ($arregloAsociatvo as $key => $value) {
            if ($key == $letra) {
                $existe = true;
                $letraTemporal = $letra;
                break;
            }
        }

        if ($existe) {
            $arregloAsociatvo[$letraTemporal] += 1;
        } else {
            $arregloAsociatvo += [$letra => 1];
        }
    }

    return $arregloAsociatvo;
}