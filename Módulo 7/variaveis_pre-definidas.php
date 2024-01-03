<?php
// $GLOBALS: Variáveis globais
$globalVar = "Variável Global";

function exampleFunction() {
    // Acessando uma variável global dentro de uma função
    echo $GLOBALS['globalVar'] . "\n";
}

exampleFunction();

// $_SERVER: Informações do servidor web
echo "Nome do servidor: " . $_SERVER['SERVER_NAME'] . "\n";

// $_GET: Parâmetros passados pela URL (via método GET)
$paramGet = isset($_GET['param']) ? $_GET['param'] : 'Nenhum parâmetro GET';
echo "Parâmetro GET: $paramGet\n";

// $_POST: Dados submetidos por formulários (via método POST)
$paramPost = isset($_POST['param']) ? $_POST['param'] : 'Nenhum parâmetro POST';
echo "Parâmetro POST: $paramPost\n";

// $_FILES: Informações sobre arquivos enviados por formulários
if (isset($_FILES['file'])) {
    echo "Nome do arquivo enviado: " . $_FILES['file']['name'] . "\n";
}

// $_REQUEST: Combinação de $_GET, $_POST e $_COOKIE
$paramRequest = isset($_REQUEST['param']) ? $_REQUEST['param'] : 'Nenhum parâmetro REQUEST';
echo "Parâmetro REQUEST: $paramRequest\n";

// $_SESSION: Variáveis de sessão
session_start();
$_SESSION['user'] = 'JohnDoe';
echo "Usuário da sessão: " . $_SESSION['user'] . "\n";

// $_ENV: Variáveis de ambiente
echo "Diretório de trabalho: " . $_ENV['PWD'] . "\n";

// $_COOKIE: Cookies HTTP
$cookieValue = isset($_COOKIE['myCookie']) ? $_COOKIE['myCookie'] : 'Nenhum cookie';
echo "Valor do Cookie: $cookieValue\n";

// $http_response_header: Cabeçalhos da resposta HTTP
file_get_contents("http://www.example.com");
echo "Status da resposta HTTP: " . $http_response_header[0] . "\n";

// $argc e $argv: Argumentos da linha de comando
echo "Número de argumentos: " . $argc . "\n";
echo "Argumentos passados:\n";
print_r($argv);