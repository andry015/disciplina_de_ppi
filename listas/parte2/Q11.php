<?php

$nums = [45, 12, 89, 3, 67, 21, 100, 8, 55];
$maior = null;
$menor = null;

foreach($nums as $num){
    if($maior == null || $num > $maior){
        $maior = $num;
    }
    if($menor == null || $num < $menor){
        $menor = $num;
    }
}

echo $maior . "\n";
echo $menor . "\n";

?>