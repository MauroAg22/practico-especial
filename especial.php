<?php

include "lib/funciones.php";

$ar_letras = [];

for ($i=0; $i < 100; $i++) { 
    $ar_letras[] = letra_random();
}





//*  PRUEBAS

print_r($ar_letras);

print_r(arregloAsociatvoLetras($ar_letras));