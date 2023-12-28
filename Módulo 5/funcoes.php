<?php
// FUNÇÃO DEFINIDAPELO USUÁRIO
function soma($a, $b) {
    return $a + $b;
}

// PARÂMETROS E ARGUMENTOS
$resultado = soma(3, 5);
echo "Soma: $resultado\n";

// Função com parâmetros padrão
function saudacao($nome = "Usuário") {
    echo "Olá, $nome!\n";
}

// Função com e sem argumento
saudacao();
saudacao("João");

// FUNÇÃO RETORNADO VALORES
function quadrado($num) {
    return $num * $num;
}

// Valor retornado
$quadrado_de_4 = quadrado(4);
echo "Quadrado de 4: $quadrado_de_4\n";

// FUNÇÃO RECURSIVA
function fatorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * fatorial($n - 1);
    }
}

// Chamada da função recursiva
$fatorial_de_5 = fatorial(5);
echo "Fatorial de 5: $fatorial_de_5\n";

// FUNÇÃO VARIÁVEIS
function soma_variavel(...$numeros) {
    return array_sum($numeros);
}

// Chamada da função com diferentes números de argumentos
$resultado_variavel = soma_variavel(1, 2, 3, 4, 5);
echo "Soma variável: $resultado_variavel\n";

// FUNÇÃO INTERNA
function externa() {
    function interna() {
        echo "Função interna\n";
    }
    interna();
}

// Chamada da função externa
externa();

// FUNÇÃO ANÔNIMA
$quadrado_anonimo = function($x) {
    return $x * $x;
};

// Chamada da função anônima
$resultado_anonimo = $quadrado_anonimo(3);
echo "Quadrado anônimo de 3: $resultado_anonimo\n";

// ARROW FUCTIONS
$cubo = fn($x) => $x * $x * $x;

// Chamada da arrow function
$resultado_cubo = $cubo(2);
echo "Cubo de 2 (arrow function): $resultado_cubo\n";

// FUNÇÃO GERADORA (YIELD)
function numeros_ate($limite) {
    for ($i = 1; $i <= $limite; $i++) {
        yield $i;
    }
}

// Utilização da função geradora
foreach (numeros_ate(5) as $numero) {
    echo "$numero ";
}