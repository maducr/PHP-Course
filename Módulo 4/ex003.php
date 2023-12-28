<?php
/*
    1. Crie três variáveis, $autorizado, $admin e  $nome. Avalie se a variável $autorizado for igual a verdadeiro e $admin igual a verdadeiro escreva na tela se for verdadeiro: "Área Administrativa, $nome, Bem vindo!"  
    2. Crie quatro variáveis, $quantidade, $valorUnitario, $subtotal e $frete.A variável $subtotal receberá $quantidade multiplicado por $valorUnitario. Se o cliente comprar acima de 3 unidades aplique um desconto em $subtotal de 10% do valor da compra, caso contrário aplique um desconto de 5%. Em seguida será somado o valor de frete em subtotal Para a massa de teste utilize: $quantidade= 2; $valorUnitario = 1200.00; $frete = 40.00 
    3. Exibir com var_dump no final o Valor total cobrado.
    4. Crie um Contador para ir de 1920 a 2022.
    5. Este contador precisa armazenar uma instrução HTML dentro de uma variável string $option com a seguinte estrutura: '<option value="$valor">$valor</option>'.
    6. Crie uma condição dentro deste contador, se o $ano for igual a 2021 imprima o atributo selected conforme a estrutura a seguir: <option value="$valor" selected="selected">$valor</option>
    7. Crie um arquivo chamado exercicio-03-a.php declarando duas constantes IDIOMA = "pt_BR"; LOCALE = "America/Sao_Paulo";
    8. Crie um arquivo chamado exercicio-03-b.php incluindo de forma obrigatório o arquivo anterior, e crie uma condição, para caso o IDIOMA seja "pt_BR" e o LOCALE seja "America/Sao_Paulo" Imprima na tela: Idioma: Português, Fuso Horário: -3:00
*/

// 1. Crie três variáveis, $autorizado, $admin e $nome. Avalie se a variável $autorizado for igual a verdadeiro e $admin igual a verdadeiro escreva na tela se for verdadeiro: "Área Administrativa, $nome, Bem vindo!"
$autorizado = true;
$admin = true;
$nome = "João";

if ($autorizado == true && $admin == true) {
    echo "Área Administrativa, $nome, Bem vindo!";
} else {
    echo "Acesso não autorizado";
}

// 2. Crie quatro variáveis, $quantidade, $valorUnitario, $subtotal e $frete.A variável $subtotal receberá $quantidade multiplicado por $valorUnitario. Se o cliente comprar acima de 3 unidades aplique um desconto em $subtotal de 10% do valor da compra, caso contrário aplique um desconto de 5%. Em seguida será somado o valor de frete em subtotal Para a massa de teste utilize: $quantidade= 2; $valorUnitario = 1200.00; $frete = 40.00 
$quantidade = 2;
$valorUnitario = 1200;
$frete = 40.00;

$subtotal = $quantidade * $valorUnitario;

if ($quantidade > 3) {
    $desconto = 0.10 * $subtotal;
} else {
    $desconto = 0.05 * $subtotal;
}

$subtotalDesconto = $subtotal - $desconto;

$total = $subtotalDesconto + $frete;

// Resultados
echo "Subtotal: R$ " . number_format($subtotal, 2, ',', '.') . PHP_EOL;
echo "Desconto: R$ " . number_format($desconto, 2, ',', '.') . PHP_EOL;
echo "Subtotal com Desconto: R$ " . number_format($subtotalComDesconto, 2, ',', '.') . PHP_EOL;
echo "Frete: R$ " . number_format($frete, 2, ',', '.') . PHP_EOL;
echo "Total da Compra: R$ " . number_format($totalCompra, 2, ',', '.') . PHP_EOL;
echo "Valor Total Cobrado: ";
var_dump($totalCompra); // 3. Exibir com var_dump no final o Valor total cobrado.

// 4. Crie um Contador para ir de 1920 a 2022.
for ($ano = 1920; $ano <= 2022; $ano++) {
    echo $ano . PHP_EOL;
}

//

$option = '';

for ($ano = 1920; $ano <= 2022; $ano++) {
    // Verifique se o ano é igual a 2021
    if ($ano == 2021) {
        $option .= '<option value="' . $ano . '" selected="selected">' . $ano . '</option>' . PHP_EOL;// 5. Este contador precisa armazenar uma instrução HTML dentro de uma variável string $option com a seguinte estrutura: '<option value="$valor">$valor</option>'.
    } else {
        $option .= '<option value="' . $ano . '">' . $ano . '</option>' . PHP_EOL; // 6. Crie uma condição dentro deste contador, se o $ano for igual a 2021 imprima o atributo selected conforme a estrutura a seguir: <option value="$valor" selected="selected">$valor</option>
    }
}

echo $option;

//

// 7. Crie um arquivo chamado exercicio-03-a.php declarando duas constantes IDIOMA = "pt_BR"; LOCALE = "America/Sao_Paulo";
// Constanstes
define('IDIOMA', 'pt_BR');
define('LOCALE', 'America/Sao_Paulo');

echo 'IDIOMA: ' . IDIOMA . '<br>';
echo 'LOCALE: ' . LOCALE . '<br>';

// 8. Crie um arquivo chamado exercicio-03-b.php incluindo de forma obrigatório o arquivo anterior, e crie uma condição, para caso o IDIOMA seja "pt_BR" e o LOCALE seja "America/Sao_Paulo" Imprima na tela: Idioma: Português, Fuso Horário: -3:00
if (IDIOMA == 'pt_BR' && LOCALE == 'America/Sao_Paulo') {
    echo 'Idioma: Português, Fuso Horário: -3:00';
} else {
    echo 'Condição não atendida.';
}