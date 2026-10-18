<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1 - Operadores e Variáveis - (1 a 5)</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">    
 

<?php

// Exercícios de PHP - OPERADORES E VARIÁVEIS

echo "<h1>Exercícios de PHP - OPERADORES E VARIÁVEIS</h1>";

// 1. Venda de Roupas

echo "<h2>1. Venda de Roupas</h2>";
$camisetas = 3;
$calcas = 2;
$precoCamiseta = 50;
$precoCalca = 80;

$totalroupas = ($camisetas * $precoCamiseta) + ($calcas * $precoCalca);
echo "Total da venda: R$ " . $totalroupas . "<br><hr>";

// 2. Supermercado

echo "<h2>2. Supermercado</h2>";
$arroz = 4;
$feijao = 6;
$precoArroz = 20;
$precoFeijao = 12; 

$totalSupermercado = ($arroz * $precoArroz) + ($feijao * $precoFeijao);
$diferencaProdutos = abs($precoArroz - $precoFeijao);

echo "Valor total: R$ " . $totalSupermercado . "<br>";
echo "Diferença de preço entre arroz e feijão: R$ " . $diferencaProdutos . "<br><hr>";

// 3. Loja de Carros

echo "<h2>3. Loja de Carros</h2>";
$carro = 1;
$moto = 2;
$precoCarro = 50000;
$precoMoto = 15000;

$totalVeiculos = ($carro * $precoCarro) + ($moto * $precoMoto);
$diferencaVeiculos = abs($precoCarro - $precoMoto);

echo "Valor total: R$ " . $totalVeiculos . "<br>";
echo "O carro custa R$ " . $diferencaVeiculos . " a mais que a moto.<br><hr>";

// 4. Desconto para Cliente VIP

echo "<h2>4. Desconto para Cliente VIP</h2>";
$valorCompra = 800;
$desconto = 0.1; 

$valorDesconto = $valorCompra * $desconto;
$valorFinal = $valorCompra - $valorDesconto;

echo "Valor do desconto: R$ " . $valorDesconto . "<br>";
echo "Valor final: R$ " . $valorFinal . "<br><hr>";

// 5. Estoque de Mercado 

echo "<h2>5. Estoque de Mercado</h2>";
$leite = 15;
$biscoito = 20;

$totalEstoque = ($leite + $biscoito);
$diferencaEstoque = $leite - $biscoito;
$divisaoEstoque = $leite / $biscoito;

echo "Total de produtos: " . $totalEstoque . "<br>";
echo "Diferença (biscoito - leite): " . $diferencaEstoque . "<br>";
echo "Quantas vezes o leite cabe no biscoito: " . $divisaoEstoque . "<br><hr>";

?>
    <a href="index.html" class="voltar">Voltar ao menu</a>
</div>
</body>
</html>