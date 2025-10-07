#!/usr/bin/php
<?php

$limite = 20;
$totalPares = 0;
$totalImpares = 0;
for ($i = 1; $i <= $limite; $i++){
    if (($i % 2) != 0){
        echo "$i es impar\n";
        $totalImpares++;
    }else{
        echo "$i es par\n";
        $totalPares++;
    }
}
    echo "\nTotal de pares: $totalPares";
    echo "  Total de impares: $totalImpares\n";
?>