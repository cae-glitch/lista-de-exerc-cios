<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2 - Operadores e Variáveis - (6 a 10)</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">    


<?php

// 6. Feira do Lucas

echo "<h2>6. Feira do Lucas</h2>";
$kgMaca = 3;
$precoMaca = 4;
$kgBanana = 5;
$precoBanana = 3;

$totalFeira = ($kgMaca * $precoMaca) + ($kgBanana * $precoBanana);
echo "Custo total da feira: R$ " . $totalFeira . "<br><hr>";

// 7. Financiamento com Entrada

echo "<h2>7. Financiamento com Entrada</h2>";
$valorCarro = 60000;
$entrada = 10000;
$parcela = 12;

$totalFinanciamento = $valorCarro - $entrada;
$valorParcela = $totalFinanciamento / $parcela;
echo "Valor financiado: R$ " . $totalFinanciamento . "<br>";
echo "Valor de cada parcela: R$ " . number_format($valorParcela, 2, ',', '.') . "<br><hr>";

// 8. Compras em Loja com Desconto

echo "<h2>8. Compras em Loja com Desconto</h2>";
$camisetas = 2 * 50;
$calcas = 3 * 80;
$jaquetas = 1 * 120;

$totalRoupas = $camisetas + $calcas + $jaquetas;

echo "Total sem desconto: R$ " . $totalRoupas . "<br>";

if ($totalRoupas > 300) {
    $desconto = $totalRoupas * 0.10;
    $totalComDesconto = $totalRoupas - $desconto;
    echo "Desconto aplicado: R$ " . $desconto . "<br>";
    echo "Total com desconto: R$ " . $totalComDesconto . "<br><hr>";
} else {
    echo "Total sem desconto: R$ " . $totalRoupas . "<br><hr>";
}

// 9. Preço Médio de Supermercado

echo "<h2>9. Preço Médio de Supermercado</h2>";
$arroz = 20;
$feijao = 12;
$oleo = 8;

$mediaPreco = ($arroz + $feijao + $oleo) / 3;
echo "Preço médio dos produtos: R$ " . number_format($mediaPreco, 2, ',', '.') . "<br><hr>";

// 10. Venda com Imposto

echo "<h2>10. Venda com Imposto</h2>";
$produto = 5;
$precoProduto = 100;
$imposto = 8;

$totalVenda = $produto * $precoProduto;
$valorImposto = $totalVenda * ($imposto / 100);
$totalPagar = $totalVenda + $valorImposto;

echo "Valor total: R$ " . $totalVenda . "<br>";
echo "Imposto (8%): R$ " . $valorImposto . "<br>";
echo "Total a pagar: R$ " . $totalPagar . "<br><hr>";

?>
    <a href="index.html" class="voltar">Voltar ao menu</a>
</div>
</body>
</html>