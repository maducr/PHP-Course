<?php
// CONSTANTES PRÉ-DEFINIDAS DE ERROS

// Definindo um erro fatal
echo $undefinedVariable; // E_ERROR - Variável não definida

// Definindo um aviso
$file = @fopen("arquivo_inexistente.txt", "r"); // E_WARNING - Tentativa de abrir um arquivo inexistente

// Definindo um aviso de obsolescência (note que o MySQL foi substituído por MySQLi ou PDO)
@mysqli_connect("localhost", "usuario", "senha"); // E_DEPRECATED - Uso obsoleto da extensão MySQL

// Divisão por zero
$result = 1 / 0; // E_WARNING - Divisão por zero

// ERRO_REPORTING E DISPLAY_ERRORS

error_reporting(E_ALL); // Configurando o nível de relatório de erros

// Erro de análise
// echo "Isso é um erro de análise" // E_PARSE - Falta ponto e vírgula

// MANIPULAÇÃO DE ERROS COM set_error_handler

// Função para manipulação de erros personalizada
function customErrorHandler($errno, $errstr, $errfile, $errline) {
    echo "Erro personalizado: [$errno] $errstr em $errfile na linha $errline\n";
}

// Definindo a função de manipulação de erros
set_error_handler("customErrorHandler");

// MANIPULAÇÃO DE EXCEÇÕES COM set_exception_handler

// Função para manipulação de exceções personalizada
function customExceptionHandler($exception) {
    echo "Exceção personalizada: " . $exception->getMessage() . "\n";
}

// Definindo a função de manipulação de exceções
set_exception_handler("customExceptionHandler");

// TRY, THROW, CATCH E FINALLY

try {
    // Exemplo de erro utilizando uma constante predefinida
    echo $undefinedVariable; // Gerará um E_NOTICE

    // Exemplo de lançamento de exceção
    throw new Exception("Isso é uma exceção!");

} catch (Exception $e) {
    // Captura a exceção e exibe uma mensagem personalizada
    echo "Capturou uma exceção: " . $e->getMessage() . "\n";

} finally {
    // Bloco opcional que sempre será executado, independentemente de haver ou não uma exceção
    echo "Este bloco é sempre executado.\n";
}

// Restaurando a função de manipulação de erros padrão
restore_error_handler();