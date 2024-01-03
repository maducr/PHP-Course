<?php
/*
    1. Crie uma variável $q e armazene uma string que será usada para realizar uma busca = "Curso de PHP 8"
    2. Crie uma Arrow Function chamada $busca que receberá um parâ,etro de busca, e retornará um link para buscar no Google. $busca($q) deve retornar: https://www.google.com/search?q=curso+de+php+8&oq=curso+de+php+8
*/

// 1. Crie uma variável $q e armazene uma string que será usada para realizar uma busca = "Curso de PHP 8"
$q = "Curso de PHP 8";

// 2. Crie uma Arrow Function chamada $busca que receberá um parâ,etro de busca, e retornará um link para buscar no Google. $busca($q) deve retornar: https://www.google.com/search?q=curso+de+php+8&oq=curso+de+php+8
$busca = fn($busca) => "https://www.google.com/search?q=" . urlencode($busca) . "&oq=" . urlencode($busca);

// Testando a função
$resultadoBusca = $busca($q);
echo $resultadoBusca;