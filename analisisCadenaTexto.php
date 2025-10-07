#!/usr/bin/php
<?php
$cadena = "Programar en PHP es divertido";
$cadenaTrim = trim($cadena);
$totalChar = 0;
$totalPalabras = 1;
$firstChar = strtoupper(substr($cadenaTrim, 0, 1));
$lastChar = strtoupper(substr($cadenaTrim, strlen($cadenaTrim)-1, 1));
$inverted = strrev($cadenaTrim);
$longitud = strlen($cadenaTrim);

echo $cadenaTrim;

for ($i = 1; $i <= strlen($cadenaTrim); $i++){
    if (substr($cadenaTrim, $i-1, 1) == " "){
        echo "Posicion $i es un espacio.\n";
        $totalPalabras++;
    }else{
        $totalChar++;
    }
}

echo "\n
Cadena en cuestion: $cadena \n
Número de caracteres total (sin primer y último espacio): $longitud \n 
Número de caracteres (sin espacios): $totalChar \n
Número de palabras: $totalPalabras \n
Primera letra: $firstChar \n
Última letra: $lastChar \n
Cadena invertida: $inverted
";
