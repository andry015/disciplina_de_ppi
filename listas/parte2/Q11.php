<?php

$nums = [45, 12, 89, 3, 67, 21, 100, 8, 55];
$maior = null;
$menor = null;
$pma = [0];
$pme = [0];

foreach($nums as $posicao => $num){
    if($maior == null || $num > $maior){
        $maior = $num;
        $pma = $posicao;
    }
    if($menor == null || $num < $menor){
        $menor = $num;
        $pme = $posicao;
    }

}

echo $maior . "\n";
echo $menor . "\n";
echo $pma . "\n";
echo $pme;

?>