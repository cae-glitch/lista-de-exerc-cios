<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3 - Operadores e Variáveis - (11 a 15)</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">    


<?php

// 11. Percentual de Desconto

echo "<h2>11. Percentual de Desconto</h2>";
$preco = 250;
$desconto = 15;

$valorDesconto = $preco * ($desconto / 100);
$precoFinal = $preco - $valorDesconto;

echo "Valor do desconto: R$ " . number_format($valorDesconto, 2, ',', '.') . "<br>";
echo "Preço final do desconto: R$ " . number_format($precoFinal, 2, ',', '.') . "<br><hr>";

// 12. Aumento Salarial

echo "<h2>12. Aumento Salarial</h2>";
$salario = 2000;
$aumento = 12;

$valorAumento = $salario * ($aumento / 100);
$novoSalario = $salario + $valorAumento;

echo "Valor do aumento: R$ " . $valorAumento . "<br>";
echo "Salário final: R$ " . $novoSalario . "<br><hr>";

// 13. Calcular Lucro

echo "<h2>13. Calcular Lucro</h2>";
$precoVenda = 120;
$custo = 80;

$lucro = $precoVenda - $custo;
$percentualLucro = ($lucro / $custo) * 100;

echo "Lucro: R$ " . $lucro . "<br>";
echo "Percentual de lucro: " . $percentualLucro . "%<br><hr>";

// 14. Imposto sobre Venda

echo "<h2>14. Imposto sobre Venda</h2>";
$preco = 500;
$imposto = 18;

$valorImposto = $preco * ($imposto / 100);
$totalPagar = $preco + $valorImposto;

echo "Valor do imposto: R$ " . $valorImposto . "<br>";
echo "Total a pagar: R$ " . $totalPagar . "<br><hr>";

// 15. Percentual de Despesas

echo "<h2>15. Percentual de Despesas</h2>";
$receita = 10000;
$despesas = 2500;

$percentualDespesas = ($despesas / $receita) * 100;
echo "O percentual de despesas sobre a receita é: " . $percentualDespesas . "%<br><hr>";


?>

    <a href="index.html" class="voltar">Voltar ao menu</a>
</div>
</body>
</html>