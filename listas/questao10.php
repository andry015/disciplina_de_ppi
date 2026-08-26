<?php

$a = 1;
$b = 1;
$c = 0;

for($i = 0; $i <= 15; $i++){

    $c = $a + $b;
    $a = $b;
    $b = $c;

    echo $c . "\n";

}

?>