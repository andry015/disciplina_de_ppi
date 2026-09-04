<?php

$numeros = [2, 5, 2, 8, 5, 2, 10, 8, 5, 5];
$a = 5;
$b = 0;

foreach($numeros as $numero){
    if($numero === $a){
        $b++;
    }
}

echo $a . " aparece " . $b . " vezes." . "\n";

?>