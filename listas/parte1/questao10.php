<?php

$a = 1;
$b = 1;
$c = 0;

for($i = 0; $i <= 15; $i++){

    $a = $b + $c;
    $c = $b;
    $b = $a;

    echo $c . "\n";

}

?>