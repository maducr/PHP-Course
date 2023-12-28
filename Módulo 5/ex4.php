<?php
/*
    1. Crie uma função para calcular o imposto de renda, chamada calcIRPF ($salario, $dependentes)
    - Fórmula: $imposto = (($salario - ($dependentes * 189.59)) * ($aliquota/100)) - $deducao;

    Base de cálculo                      Alíquota       Parcela a deduzir do IRPF
    até R$ 1.903,98                       Isento               R$ 0,00
    de R$ 1.903,99 até R$ 2.826,65        7,5%                 R$ 142,80
    de R$ 2.856,66 até R$ 3.751,05        15%                  R$ 354,80
    de R$ 3.751,06 até R$ 4.664,68        22,5%                R$ 636,13
    acima de R$ 4.664,68                  27,5%                R$ 869,36

    2. Crie uma arrow function formataLink com dois parâmetros $url, $texto que imprime um link com os dados enviados
*/

// 1. Crie uma função para calcular o imposto de renda, chamada calcIRPF ($salario, $dependentes)
function calcIRPF ($salario, $dependentes) {
    $baseCalculo = $salario - ($dependentes * 189.59);

    if ($baseCalculo <= 1903.98) {
        $imposto = 0.00;
    } elseif ($baseCalculo <= 2826.65) {
        $imposto = ($baseCalculo * ($aliquota / 100)) - 142.80;
    } elseif ($baseCalculo <= 3751.05) {
        $imposto = ($baseCalculo * ($aliquota / 100)) - 354.80;
    } elseif ($baseCalculo <= 4664.68) {
        $imposto = ($baseCalculo * ($aliquota / 100)) - 636.13;
    } else {
        $imposto = ($baseCalculo * ($aliquota / 100)) - 869.36;
    }

    return $imposto;
}

$salario = 3.086;
$dependentes = 4;
$aliquota = 15;
$deducao = 354.80;

$calcIRPF = calcIRPF($salario, $dependentes, $aliquota, $deducao);

echo "Imposto de Renda: R$ " . number_format($calcIRPF, 2, ',', '.');
