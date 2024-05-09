<?php

include "lib/funciones.php";

$ar_letras = [];

for ($i=0; $i < $cantidadLetrasGeneradas; $i++) { 
    $ar_letras[] = letra_random();
}



//*  PRUEBAS

arregloAsociatvoLetras($ar_letras);

porcentaje_de_letras($arregloAsociatvoGlobal);

print_r($arregloAsociatvoGlobal);