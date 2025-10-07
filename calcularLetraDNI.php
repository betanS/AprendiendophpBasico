#!/usr/bin/php
<?php
$letras = "TRWAGMYFPDXBNJZSQVHLCKE";
$condicion = true;
$abc = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
echo "Ingresa los numeros de tu dni.";
while($condicion){
    fscanf(STDIN, "%s", $numero);
    $numero = trim($numero);
    if (strlen($numero) == 8 && gettype($numero) == "integer"){
        echo "111111111";
        $condicion = false;
    }else{
        echo "Error de entrada, verifique que el número tenga 8 digitos.";
    }
}

$posicion = $numero % 23;
echo ($numero . substr($letras, $posicion, 1) . "\n");