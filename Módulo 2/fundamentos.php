<?php
// COMENTÁARIO DE UMA LINHA

/*
  COMENTÁRIOS DE VÁRIAS LINHAS
*/

// TAGS PHP E HTML
echo "<html>";
echo "<head><title>Fundamentos PHP</title></head>";
echo "<body>";

// VARIÁVEIS
$nome = "João";
$idade = 25;

// IMPRIME VARIÁVEIS
echo "<p>Olá, meu nome é $nome e eu tenho $idade anos.</p>";

// CONSTANTES
define("PI", 3.14159);

// IMPRIME CONSTANTES
echo "<p>O valor de PI é: " . PI . "</p>";

// TIPO DE DADOS
$inteiro = 10;
$decimal = 5.5;
$booleano = true;
$texto = "Isso é uma string.";

// CONVERSÃO DE TIPOS
$numeroTexto = "123";
$numero = (int)$numeroTexto; // Converte para inteiro
$resultadoString = $numeroInteiro . $numeroString; // Conversão automática de int para string
$numeroConvertido = $numeroString + 10; // Conversão automática de string para int

// Imprime variáveis convertidas
echo "<p>O valor de \$numero é: $numero</p>";
echo "<p>Resultado da concatenação: $resultadoString</p>";
echo "<p>Resultado da conversão de string para int: $numeroConvertido</p>";

// Referências
$a = 10;
$b = &$a; // $b é uma referência para $a

// Modifica $a através de $b
$b = 20;

// Imprime valor modificado
echo "<p>O valor de \$a após modificar \$b é: $a</p>";

// Escopo de variável
function exemploEscopo() {
  $variavelLocal = "Esta é uma variável local.";
  return $variavelLocal;
}

$foraDaFuncao = exemploEscopo();
echo "<p>Fora da função: $foraDaFuncao</p>";

echo "</body>";
echo "</html>";
?>
