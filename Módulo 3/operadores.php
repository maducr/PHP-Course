<?php
// OPERADORES DE ATRIBUIÇÃO
$numero = 10;
$texto = "PHP";
echo "<p>Operadores de Atribuição: $numero, $texto</p>";

// OPERADORES DE ARITMÉTICOS
$soma = 5 + 3;
$subtracao = 10 - 4;
$multiplicacao = 2 * 6;
$divisao = 8 / 2;
$resto = 7 % 3;
echo "<p>Operadores Aritméticos: $soma, $subtracao, $multiplicacao, $divisao, $resto</p>";

// PRECEDÊNCIA DE OPERADORES
$resultado = (5 + 3) * 2;
echo "<p>Precedência de Operadores: $resultado</p>";

// OPERADORES DE TIPOS
$igual = (10 == "10"); // Igualdade de valor
$identico = (10 === "10"); // Igualdade de valor e tipo
$diferente = (5 != 3); // Diferença 
$menor = (8 < 12); // Menor que
$maior = (20 >= 15); // Maior que
echo "<p>Operadores de Comparação: $igual, $identico, $diferente, $menor, $maior</p>";

# OPERADOR NULLCOALESCE
class Pessoa {
    public function getEndereco(): ?Endereco {
        return rand(0, 1) ? new Endereco("Rua ABC", "12345-678") : null;
    }
}

class Endereco {
    public function getCidade(): ?string {
        return rand(0, 1) ? "Cidade XYZ" : null;
    }
}

// Uso do operador nullsafe no PHP 8.0
$pessoa = new Pessoa();

// Antes do PHP 8.0
$endereco = $pessoa->getEndereco();
if ($endereco !== null) {
    $cidade = $endereco->getCidade();
    if ($cidade !== null) {
        echo "Cidade: $cidade";
    } else {
        echo "Cidade não disponível.";
    }
} else {
    echo "Endereço não disponível.";
}

// Com o operador nullsafe no PHP 8.0
$cidade = $pessoa?->getEndereco()?->getCidade();
echo "Cidade: " . ($cidade ?? "Cidade não disponível.");

// OPERADORES LÓGICOS
$and = true && false;
$or = true || false;
$not = !$and;
echo "<p>Operadores Lógicos: $and, $or, $not</p>";

// OPERADORES BIT A BIT (BITWISE)
$bitAnd = 5 & 3;
$bitOr = 5 | 3;
$bitXor = 5 ^ 3;
$bitNot = ~5;
$shiftLeft = 5 << 1;
$shiftRight = 5 >> 1;
echo "<p>Operadores Bit a Bit: $bitAnd, $bitOr, $bitXor, $bitNot, $shiftLeft, $shiftRight</p>";

// CONTROLE DE ERRO
$valor = @$_GET['valor']; // Supressão de erro
echo "<p>Controle de Erro: Valor não definido</p>";

// EXECUÇÃO
$comando = `ls`; // Executa o comando 'ls' no shell
echo "<p>Execução: $comando</p>";

// INCREMENTO/DECREMENTO
$contador = 0;
$contador++;
$contador--;
echo "<p>Incremento/Decremento: $contador</p>";

// OPERADORES DE STRING
$textoConcatenado = "Olá " . "Mundo!";
$textoAtribuicao = "PHP";
$textoAtribuicao .= " é incrível!";
echo "<p>Operadores de String: $textoConcatenado, $textoAtribuicao</p>";

// OPERADORES DE ARRAY
$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$arrayConcatenado = $array1 + $array2;
$arrayUniao = array_merge($array1, $array2);
echo "<p>Operadores de Array: " . print_r($arrayConcatenado, true) . ", " . print_r($arrayUniao, true) . "</p>";

// OPERADORES DE TIPOS
$numeroString = "123";
$numeroInteiro = (int)$numeroString;
$stringNumero = (string)42;
$floatInteiro = (float)5;
echo "<p>Operadores de Tipos: $numeroString, $numeroInteiro, $stringNumero, $floatInteiro</p>";
?>