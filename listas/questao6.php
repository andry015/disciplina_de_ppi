<?php

$a = 15;
$b = 32;
$c = 21;

function calcularMaior($a,$b,$c){
    if($a>$b && $a>$c){
        echo $a . ' maior dos três números' . "\n";
    } elseif($b>$a && $b>$c){
        echo $b . ' maior dos três números' . "\n";
    } elseif($c>$a && $c>$b){
        echo $c . ' maior dos três números' . "\n";
    } else{
        echo ' um dos números era igual' . "\n";
    }
}

calcularMaior($a, $b, $c);

?>