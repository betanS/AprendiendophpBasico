#!/usr/bin/php
<?php
$cadena = "Programar en PHP es divertido";
$contador = 0;
$cadena = strtolower($cadena);
for ($i = 0; $i< strlen($cadena); $i++){
    if(substr($cadena, $i, 1) == "a" || substr($cadena, $i, 1) == "e" || substr($cadena, $i, 1) == "i"|| substr($cadena, $i, 1) == "o"|| substr($cadena, $i, 1) == "u"){
        echo substr($cadena, $i, 1);
        $contador++;
    }
} 
echo "Hay $contador vocales";
