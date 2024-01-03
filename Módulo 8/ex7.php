<?php
/*
    1. Crie uma função chamada formataMoeda((float) $valor): string. Devolvendo o valor formatado em Reais e com casas decimais.
    2. Crie uma string $aerea com 5 companhias. Transforme em um array de 2 índices, e exiba com var_dump
*/

// 1. Crie uma função chamada formataMoeda((float) $valor): string. Devolvendo o valor formatado em Reais e com casas decimais.
function formataMoeda(float $valor): string {
    return 'R$ ' . number_format($valor, 2, ',', '.');
}

// Exemplo de uso
$valor = 1234.56;
$valorFormatado = formataMoeda($valor);
echo "Valor formatado: $valorFormatado\n";

// 2. Crie uma string $aerea com 5 companhias. Transforme em um array de 2 índices, e exiba com var_dump
$aerea = "Gol Tam Webjet Azul Avianca";
$companhias = explode(" ", $aerea, 2);

// Exibe o array resultante
var_dump($companhias);