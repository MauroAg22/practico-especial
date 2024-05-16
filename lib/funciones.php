<?php

$arregloAsociatvoGlobal = [];
$cantidadLetrasGeneradas = 100;


function letra_random() {
    $min = 65; // A
    $max = 90; // Z
    return chr(rand($min, $max));
}

function estaEnArreglo(array $arregloLetras, string $unaLetra) {
    $letraEnArreglo = false;
    foreach ($arregloLetras as $value) {
        if ($value == strtoupper($unaLetra)) {
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
    global $arregloAsociatvoGlobal;

    foreach ($arregloLetras as $letra) {
        if (isset($arregloAsociatvoGlobal[$letra])) {
            $arregloAsociatvoGlobal[$letra]['cantidad'] += 1;
        } else {
            $arregloAsociatvoGlobal[$letra] = ['cantidad' => 1, 'porcentaje' => 0];
        }
    }
}

function porcentaje_de_letras(array &$arregloAsociatvo) {
    global $cantidadLetrasGeneradas;
    foreach ($arregloAsociatvo as &$letra) {
        $letra['porcentaje'] = ($letra['cantidad'] * 100) / $cantidadLetrasGeneradas;
    }
}

