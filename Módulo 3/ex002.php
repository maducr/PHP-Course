<?php
/*
    1. Crie três variáveis: preço, desconto e frete sendo os valores 1000.00, 10 e 35.49 respectivamente.
    2. Em uma linha crie uma variável chamada total que conterá o desconto aplicado ao valor e no final somado o frete.
    3. Crie uma variável chamava compra que conterá um valor boolean verdadeiro se o valor da variável total for até o valor do proço e menor que mil e veinte.
    4. Exiba com var_dump no final as variáveis total e compra.
*/ 

// 1. Crie três variáveis: preõ, desconto e frete sendo os valores 1000.00, 10 e 35.49 respectivamente.
$preco = 1000.00;
$desconto = 10;
$frete = 35.49;

// 2. Em uma linha crie uma variável chamada total que conterá o desconto aplicado ao valor e no final somado o frete.
$total = ($preco - $desconto) + $frete;

// 3. Crie uma variável chamava compra que conterá um valor boolean verdadeiro se o valor da variável total for até o valor do proço e menor que mil e vinte.
$compra = ($total >= $preco && $total < 1020);

// 4. Exiba com var_dump no final as variáveis total e compra.
var_dump($total, $compra);