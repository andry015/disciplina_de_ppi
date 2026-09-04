<?php

$num = 20;

while($num > 0){
    echo 'numero ' . $num;

    if($num % 5 == 0){
        echo ' divisor de 5' . "\n";
    } elseif($num % 5 != 0 && $num != 0){        
        echo ' não divisor de 5' . "\n";
    }

    $num--;
}

echo 'contagem encerrada';

?>