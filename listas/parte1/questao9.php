<?php

$c = 0;
$num = 18;

for($i = 1; $i <= $num; $i++){
    if($num % 1 == 0 && $num % $i == 0){
        $c++;
    } 

}

if($c == 2){
    echo $num . ' é primo' . "\n";   
}  

else{
    echo $num . ' não é primo' . "\n";
}

?>