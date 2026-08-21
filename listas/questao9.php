<?php

$num = 1;

while($num < 21){
    if($num % 1 == 0 && $num % $num == 0){
        echo $num . ' é primo' . "\n";
    } elseif($num % 1 != 0 && $num % $num != 0){
        echo $num . ' não é primo' . "\n";
    }

    $num++;
}

?>