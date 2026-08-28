<?php

$notas = [7.5, 4.0, 8.5, 6.0, 9.0, 3.5, 10.0, 5.5];
$media = 0;
$soma = 0;
$maiorque = 0;
$menorque = 0;
$maior = $notas[0];
$menor = $notas[0];


foreach($notas as $nota){
    $media = $soma + $nota;

    if($nota >= 6){
        $maiorque++;
    } else{
        $menorque++;
    }
}

?>