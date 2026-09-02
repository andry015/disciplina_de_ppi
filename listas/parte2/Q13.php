<?php

$numeros = [15, 8, 35, 42, 11, 27, 39];
$maior = 0;
$smaior = 0;

foreach($numeros as $numero){
    if($numero > $maior){
        $smaior = $maior;
        $maior = $numero;
    }
    if($numero < $maior && $numero > $smaior){
        $smaior = $numero;
    }
}

echo $maior . "\n";
echo $smaior;

?>