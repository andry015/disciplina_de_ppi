<?php

$alunos = [
    ["nome" => "Ana", "nota1" => 8.0, "nota2" => 7.0],
    ["nome" => "Carlos", "nota1" => 5.0, "nota2" => 4.5],
    ["nome" => "Maria", "nota1" => 9.0, "nota2" => 9.5],
    ["nome" => "João", "nota1" => 6.0, "nota2" => 5.0],
    ["nome" => "Pedro", "nota1" => 3.0, "nota2" => 7.0]
    ];
$mediag = 0;
$mediai = 0;
$soma = 0;
$total = 0;
$maiorm = 0;
$menorm = 0;


/*foreach($alunos as $aluno){
    $soma += $aluno;
    $total++;

    if($mediai > $maiorm){
        $maiorm = $mediai;
    }
    if($mediai < $menorm){
        $menorm = $mediai;
    }

    if($mediai >= 6){
        echo "Aprovado";
    } else{
        echo "Reprovado";
    }
}

$mediag = $soma / $total;*/

?>