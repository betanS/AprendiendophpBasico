#!/usr/bin/php
<?php
$texto = "AAAAAAAAA ssssss 01/12/2023";
$patron = "/([3][0-1]||[2][0-9]||[0]\d).([0-1]\d).([0-9]{4})/m";
$fechasinbarras = "";
if (preg_match($patron, $texto, $coincidencia)) {
echo "Se encontró una fecha: " . $coincidencia[0] . "\n";
$fechasinbarras = preg_split("/\//", $coincidencia[0]);
echo $fechasinbarras[0] . "\n";
echo $fechasinbarras[1] . "\n";
echo $fechasinbarras[2] . "\n";
}

$patronLetra = '/[A-ZÁÉÍÓÚ][a-záéíóú]+/';
if(preg_match_all($patronLetras, $texto, $coincidencias)){
    foreach($coincidencias[0] as $palabra){
        echo $palabra;
    }
}
?>