<?php
// Estrutura condicional if-else
$idade = 25;
if ($idade >= 18) {
    echo "Você é maior de idade.";
} else {
    echo "Você é menor de idade.";
}

// Estrutura condicional elseif
$nota = 75;
if ($nota >= 90) {
    echo "Aprovado com distinção!";
} elseif ($nota >= 60) {
    echo "Aprovado!";
} else {
    echo "Reprovado.";
}

// Estrutura switch-case
$diaDaSemana = "quarta";
switch ($diaDaSemana) {
    case "segunda":
    case "terça":
    case "quarta":
    case "quinta":
    case "sexta":
        echo "Dia útil.";
        break;
    case "sábado":
    case "domingo":
        echo "Final de semana.";
        break;
    default:
        echo "Dia inválido.";
}

// Estrutura de controle match
$cor = "vermelho";
$resultado = match ($cor) {
    "vermelho", "azul" => "Cor quente",
    "verde", "azul" => "Cor fria",
    default => "Cor indefinida",
};
echo $resultado;

// Estrutura de repetição while
$contador = 0;
while ($contador < 5) {
    echo "Contador: $contador<br>";
    $contador++;
}

// Estrutura de repetição do-while
$contador = 0;
do {
    echo "Contador: $contador<br>";
    $contador++;
} while ($contador < 5);

// Estrutura de repetição for
for ($i = 0; $i < 5; $i++) {
    echo "Iteração: $i<br>";
}

// Estrutura de repetição foreach
$arrayNumeros = [1, 2, 3, 4, 5];
foreach ($arrayNumeros as $numero) {
    echo "Número: $numero<br>";
}

// Estrutura de controle break
for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        break;
    }
    echo "Número: $i<br>";
}

// Estrutura de controle continue
for ($i = 0; $i < 5; $i++) {
    if ($i == 2) {
        continue;
    }
    echo "Número: $i<br>";
}

// Estrutura de controle return
function somar($a, $b) {
    return $a + $b;
}
$resultadoSoma = somar(2, 3);
echo "Resultado da soma: $resultadoSoma<br>";

// Estrutura de inclusão require
require_once "funcoes.php"; // Supondo que haja um arquivo chamado "funcoes.php" com funções adicionais

// Estrutura de inclusão include
include "outras_funcoes.php"; // Supondo que haja um arquivo chamado "outras_funcoes.php" com funções adicionais

// Estrutura de inclusão require_once
require_once "config.php"; // Supondo que haja um arquivo chamado "config.php" com configurações

// Estrutura de inclusão include_once
include_once "utilidades.php"; // Supondo que haja um arquivo chamado "utilidades.php" com funções utilitárias

// Estrutura de controle goto
goto ponto;
echo "Esta linha será ignorada.";
ponto:
echo "Este é o ponto de destino.";
