<?php
/*
    1. Crie um cookie armazenando o produto = "Curso PHP 8 - Orientação a Objetos
    2. Recuperre os dados do Cookie gravado, verifique se o usuárioainda possui o cookie, exiba: "Ganhe 5% de desconto para comprar: " e exiba o conteúdo do cookie
*/

// 1. Crie um cookie armazenando o produto = "Curso PHP 8 - Orientação a Objetos
$produto = "Curso PHP 8 - Orientação a Objetos";
setcookie("produto", $produto, time() + 60);

// 2. Recuperre os dados do Cookie gravado, verifique se o usuárioainda possui o cookie, exiba: "Ganhe 5% de desconto para comprar: " e exiba o conteúdo do cookie
if (isset($_COOKIE['produto'])) {
    $produtoDoCookie = $_COOKIE['produto'];
    echo "Ganhe 5% de desconto para comprar: $produtoDoCookie";
} else {
    echo "Você não possui o cookie do produto.";
}