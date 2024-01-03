<?php

/*
    - Cifra: Um algoritmo usado para criptografar ou descriptografar dados
    - Chave: Um valor usado como parâmetro para a cifra
    - AES (Advanced Encryption Standard): Um algoritmo de cifra simétrica amplamente utilizado
    - IV (Initialization Vector): Um valor usado para aumentar a segurança na cifra
*/

// Criptografia com Sodium
echo "Criptografia com Sodium:\n";
$message = "Mensagem confidencial";
$key = sodium_crypto_secretbox_keygen(); // Gera uma chave secreta
$nonce = random_bytes(SODIUM_CRYPTO_SECRETBOX_NONCEBYTES); // Gera um IV (nonce)
$ciphertext = sodium_crypto_secretbox($message, $nonce, $key); // Criptografa
$decryptedMessage = sodium_crypto_secretbox_open($ciphertext, $nonce, $key); // Descriptografa

echo "Mensagem Original: $message\n";
echo "Mensagem Criptografada: " . bin2hex($ciphertext) . "\n";
echo "Mensagem Descriptografada: $decryptedMessage\n\n";

// Criptografia com OpenSSL
echo "Criptografia com OpenSSL:\n";
$plaintext = "Texto sensível";
$opensslKey = openssl_random_pseudo_bytes(32); // Gera uma chave
$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc')); // Gera um IV
$encryptedText = openssl_encrypt($plaintext, 'aes-256-cbc', $opensslKey, 0, $iv);
$decryptedText = openssl_decrypt($encryptedText, 'aes-256-cbc', $opensslKey, 0, $iv);

echo "Texto Original: $plaintext\n";
echo "Texto Criptografado: $encryptedText\n";
echo "Texto Descriptografado: $decryptedText\n\n";

// Função crypt
echo "Função crypt:\n";
$password = "senha_secreta";
$salt = base64_encode(random_bytes(32)); // Gera um salt aleatório
$hashedPassword = crypt($password, $salt);
echo "Senha Original: $password\n";
echo "Senha Criptografada: $hashedPassword\n\n";

// Password Hashing
echo "Password Hashing:\n";
$userPassword = "senha_super_secreta";
$hashedPassword = password_hash($userPassword, PASSWORD_BCRYPT);
$verifyResult = password_verify($userPassword, $hashedPassword);

echo "Senha Original: $userPassword\n";
echo "Senha Criptografada: $hashedPassword\n";
echo "Verificação de Senha: " . ($verifyResult ? "Correta" : "Incorreta") . "\n";