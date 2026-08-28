<?php

$times = [
    ["nome" => "Time A", "vitorias" => 5, "empates" => 2, "derrotas" => 1],
    ["nome" => "Time B", "vitorias" => 4, "empates" => 4, "derrotas" => 0],
    ["nome" => "Time C", "vitorias" => 6, "empates" => 0, "derrotas" => 2],
    ["nome" => "Time D", "vitorias" => 3, "empates" => 3, "derrotas" => 2]
];

$timemaisp = "";
$timemenosp = "";
$timemaisv = "";
$spontos = 0;
$maiorvitorias = 0;
$maiorpontos = 0;
$menorpontos = 100;

foreach($times as $time){
    $pontos = ($time["vitorias"] * 3) + ($time["empates"]);
    if($pontos > $maiorpontos){
        $maiorpontos = $pontos;
        $timemaisp = $time["nome"];
    }

    if($pontos < $maiorpontos){
        $menorpontos = $pontos;
        $timemenosp = $time["nome"];
    }

    $vitorias = ($time["vitorias"]);
    if($vitorias > $maiorvitorias){
        $timemaisv = $time["nome"];
    }
}

?>