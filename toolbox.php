#!/usr/bin/php
<?php
function saludar(string $nombre = "invitado"): string{
    echo "Hola, $nombre";

} 
function sumar(int $a, int $b): int{
    if (gettype($a) == "integer" && gettype($b) == "integer"){
        echo $a + $b;
    }else{
        echo "Error, no son enteros.";
    }
} 
function sumarTodos(int ...$nums): int{
    $total = 0;
    if($nums <= 0){
        echo "Error, no hay numeros.";
    }elseif (gettype($numbs) == "integer"){
    foreach($numbs as $x){
        $total += $numbs[$x];
    }
    }else{
        echo "Error, idk....";
    }
}
