<?php
/*
    1. Crie três variáveis para armazenar o seu nome, idade e esporte predileto.
    2. Crie um array com três tecnologias que você pretende aprender.
    3. Converta a variável com a idade para string e mostre com var_dump o valor dela antes e depois da conversão.
    4. Impreima na tela os valores de nome, idade e esporte predileto criados no escopo global por meio de uma função.
*/ 

// 1. Crie três variáveis para armazenar o seu nome, idade e esporte predileto.
$nome = "Francisco";
$idade = "50";
$esportePredileto = "Golfe";

// 2. Crie um array com três tecnologias que você pretende aprender.
$tecAprender = array("PHP", "Python", "SQL");

// 3. Converta a variável com a idade para string e mostre com var_dump o valor dela antes e depois da conversão.
echo "<p>Antes da conversão: </p>";
var_dump($idade);

$idade = (string)$idade;

echo "<p>Depois da conversão: </p>";
var_dump($idade);

// 4. Impreima na tela os valores de nome, idade e esporte predileto criados no escopo global por meio de uma função.
function imprimirValoresGlobais() {
    global $nome, $idade, $esportePredileto;
    echo "<p>Nome: $nome</p>";
    echo "<p>Idade: $idade</p>";
    echo "<p>Esporte Predileto: $esportePredileto</p>";
}

imprimirValoresGlobais();