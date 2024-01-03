<?php
// URL de destino para o POST
$url = "https://exemplo.com/api/endpoint";

// Dados a serem enviados no corpo da requisição POST
$data = [
    'nome' => 'João',
    'idade' => 25,
    'email' => 'joao@example.com'
];

// Inicializa a sessão cURL
$ch = curl_init();

// Configura as opções da requisição cURL
curl_setopt($ch, CURLOPT_URL, $url); // Define a URL de destino
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // Retorna o resultado da requisição como uma string
curl_setopt($ch, CURLOPT_POST, 1); // Indica que a requisição será um POST
curl_setopt($ch, CURLOPT_POSTFIELDS, $data); // Define os dados a serem enviados no corpo da requisição

// Executa a requisição cURL e armazena a resposta
$response = curl_exec($ch);

// Verifica por erros durante a requisição
if (curl_errno($ch)) {
    echo 'Erro cURL: ' . curl_error($ch);
}

// Fecha a sessão cURL
curl_close($ch);

// Exibe a resposta da requisição
echo "Resposta da Requisição:\n$response\n";
