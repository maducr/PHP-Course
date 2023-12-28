<?php
// 1. Utilizando o bloco try, throw, catch, crie uma condição para a variável $cpf, referente os sinais de (.) ponto e (-) traço da variável, verifique, se o conteúdo da variável é menor que 11 caracteres, se for lance uma exceção, CPF inválido!

$cpf = '123.456.789-09';

try {
    // Verificando se o CPF possui menos de 11 caracteres
    if (strlen($cpf) < 11) {
        throw new Exception("CPF inválido!");
    }
    // Verificando se o CPF contém os sinais de ponto (.) e traço (-)
    if (strpos($cpf, '.') === false || strpos($cpf, '-') === false) {
        throw new Exception("CPF inválido!");
    }
    echo "CPF válido: $cpf\n";
} catch (Exception $e) {
    echo "Exceção: " . $e->getMessage() . "\n"; // Captura a exceção e exibe a mensagem personalizada
}