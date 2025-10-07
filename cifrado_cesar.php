#!/usr/bin/php
<?php


    $texto = "¡Me gusta la clase de 1 de desarrollo!. Ñu. café CAFÉ.";
    $k = 7;

    define('ALFABETO', 'ABCDEFGHIJKLMNÑOPQRSTUVWXYZ');

    $alfabeto = ALFABETO;
    $longitud = strlen($alfabeto);


    function normalizar($texto)
    {

        $texto = str_replace('Á','A',$texto);
        $texto = str_replace('É','E',$texto);
        $texto = str_replace('Í','I',$texto);
        $texto = str_replace('Ó','O',$texto);
        $texto = str_replace('Ú','U',$texto);
        $texto = str_replace('Ü','U',$texto);

        $texto = str_replace('á','a',$texto);
        $texto = str_replace('é','e',$texto);
        $texto = str_replace('í','i',$texto);
        $texto = str_replace('ó','o',$texto);
        $texto = str_replace('ú','u',$texto);
        $texto = str_replace('ü','u',$texto);

        return $texto;

        //Con arrays
        //return str_replace(['Á','É','Í','Ó','Ú','Ü','á','é','í','ó','ú','ǘ'],['A','E','I','O','U','U','a','e','i','o','u','u'], $texto);

        //Válido para unicode
        //return strtr($texto, "ÁÉÍÓÚÜáéíóúü", "AEIOUUaeiouu");
    }


    function esLetraEspanola($c){
        $c = strtoupper($c);

        return strpos(ALFABETO, $c) !== false;
    }



    function cifrarCesar($texto,$k)
    {
        $resultado = '';

        $alfabeto = ALFABETO;

        $longitud = strlen($alfabeto);



        $k = $k % $longitud;

        if ($k < 0)
        {
            $k += $longitud;
        }

        for ($i = 0 ; $i <strlen($texto); $i++)
        {

            $c = substr($texto,$i,1);

            if (esLetraEspanola($c))
            {

                $mayus = strtoupper($c);
                $pos = strpos($alfabeto,$mayus);

                $nueva_pos = ($pos + $k) % $longitud;

                $nueva_letra = substr($alfabeto,$nueva_pos,1);


                if (ctype_upper($c))
                {
                    $resultado .= $nueva_letra;
                }
                else
                {
                    $resultado .= strtolower($nueva_letra);
                }


            }
            else
            {
                $resultado .= $c;
                #$resultado = $resultado . $c;

            }
        }


        return $resultado;
    }



$textoNormalizado = normalizar($texto);
$textoCifrado     = cifrarCesar($textoNormalizado,$k);
$textoDescifrado  = cifrarCesar($textoCifrado,-$k);
$verificacionn    = $textoDescifrado == $textoNormalizado ? 'OK' : 'ERROR';



echo "Original : {$texto} \n ";
echo "Normalizado : {$textoNormalizado} \n ";
echo "Cifrado (k={$k} : {$textoCifrado} \n ";
echo "Descifrado: {$textoDescifrado} \n ";
echo "Verificación: {$verificacionn} \n ";




    
/*$texto = "Programar en PHP es divertidísimo, Ñandú!";
$k = 7; 
$normalizado = strtr($texto, "ÁÉÍÓÚÜáéíóúü", "AEIOUUaeiouu");
$abc = "ABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
$toUpper = strtoupper($normalizado);


$cifrado = "";
$descifrado = "";
$verificacion = 0;
$aPos= 0;
for($i = 0; $i<= strlen($toUpper); $i++){
    $aPos= strpos($abc, substr($toUpper, $i, 1));
    echo "$aPos";

    if (($aPos+7) > strlen($abc)){
        $cifrado = $cifrado . substr($abc, strlen($abc)-($aPos + 7), 1);

    }elseif(substr($toUpper, $i, 1) == " "){
        $cifrado = $cifrado . " ";
    }else{
        $cifrado = $cifrado . substr($abc, ($aPos +7), 1);
    }
    $aPos = 0;
}
for($i = 0; $i<= strlen($cifrado); $i++){
    $aPos= strpos($abc, substr($cifrado, $i, 1));
    echo "$aPos";

    if (($aPos-7) < 0){
        $descifrado = $descifrado . substr($abc, strlen($abc)+($aPos - 7), 1);

    }elseif(substr($cifrado, $i, 1) == " "){
        $descifrado = $descifrado . " ";
    }else{
        $descifrado = $descifrado . substr($abc, ($aPos -7), 1);
    }
    $aPos = 0;
}

echo "\n
Original: $texto\n
Normalizado: $normalizado\n
Cifrado (K=7): $cifrado\n
Descifrado: $descifrado\n 
Verificación: $verificacion \n
";
*/