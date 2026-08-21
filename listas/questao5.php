<?php

$numero = 17;

if($numero % 3 == 0 && $numero % 5 != 0){
   echo $numero . ' múltiplo de 3' . "\n"; 
}
if($numero % 5 == 0 && $numero % 3 != 0){
    echo $numero . ' múltiplo de 5' . "\n"; 
}
if($numero % 3 == 0 && $numero % 5 == 0){
    echo $numero . ' múltiplo de 3 e de 5' . "\n"; 
}
if($numero % 3 != 0 && $numero % 5 != 0){
    echo $numero . ' não é múltiplo de 3 e/ou de 5' . "\n"; 
}

?>