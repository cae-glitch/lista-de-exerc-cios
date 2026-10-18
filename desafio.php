<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio - Viagem Internacional da Mariana</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">

<?php

// DESAFIO - Viagem Internacional da Mariana

echo "<h1>Desafio - Viagem Internacional da Mariana</h1>";

$valorViagem = 80000; 


// Percentuais de cada área de gasto
$percPassagens = 50;
$percHospedagem = 30;
$percExtras = 20;


// Variações cambiais para cada área de gasto
$varPassagens = 2; // +2%
$varHospedagem = 1.5; // +1.5%
$varExtras = 2.5; // +2.5%


// Quanto reservar para cada gasto
echo "<h2>Valores reservados por área</h2>";

$valorPassagens = $valorViagem * ($percPassagens / 100);
$valorHospedagem = $valorViagem * ($percHospedagem / 100);
$valorExtras = $valorViagem * ($percExtras / 100);

echo "Passagens Aéreas (50%): R$ " . number_format($valorPassagens, 2, ',', '.') . "<br>";
echo "Hospedagem (30%): R$ " . number_format($valorHospedagem, 2, ',', '.') . "<br>";
echo "Despesas Extras (20%): R$ " . number_format($valorExtras, 2, ',', '.') . "<br><hr>";


// Aumento de cada gasto após 1 mês
echo "<h2>Aumento após 1 mês (variação cambial)</h2>";

$aumentoPassagens = $valorPassagens * ($varPassagens / 100);
$aumentoHospedagem = $valorHospedagem * ($varHospedagem / 100);
$aumentoExtras = $valorExtras * ($varExtras / 100);

echo "Passagens Aéreas (+2%): R$ " . number_format($aumentoPassagens, 2, ',', '.') . "<br>";
echo "Hospedagem (+1.5%): R$ " . number_format($aumentoHospedagem, 2, ',', '.') . "<br>";
echo "Despesas Extras (+2.5%): R$ " . number_format($aumentoExtras, 2, ',', '.') . "<br><hr>";


// Valores finais após o aumento
echo "<h2>Valores finais após 1 mês</h2>";

$finalPassagens = $valorPassagens + $aumentoPassagens;
$finalHospedagem = $valorHospedagem + $aumentoHospedagem;
$finalExtras = $valorExtras + $aumentoExtras;

echo "Passagens Aéreas: R$ " . number_format($finalPassagens, 2, ',', '.') . "<br>";
echo "Hospedagem: R$ " . number_format($finalHospedagem, 2, ',', '.') . "<br>";
echo "Despesas Extras: R$ " . number_format($finalExtras, 2, ',', '.') . "<br><hr>";


// Valor total final estimado da viagem
echo "<h2>Valor total final estimado</h2>";

$totalFinal = $finalPassagens + $finalHospedagem + $finalExtras;
echo "Valor total final estimado: R$ " . number_format($totalFinal, 2, ',', '.') . "<br>";
echo "Diferença em relação ao valor inicial da viagem: R$ " . number_format($totalFinal - $valorViagem, 2, ',', '.') . "<br><hr>";


// Resto da divisão do valor de hospedagem por 900
echo "<h2>Simulação de diárias de hotel</h2>";


$resto = $valorHospedagem % 900;
$diarias = intdiv($valorHospedagem, 900);

echo "Valor reservado para hospedagem: R$ " . number_format($valorHospedagem, 2, ',', '.') . "<br>";
echo "Diárias completas de R$ 900: " . $diarias . "<br>";
echo "Resto da divisão: R$ " . number_format($resto, 2, ',', '.') . "<br>";

?>
    <a href="index.html" class="voltar">Voltar ao menu</a>
</div>
</body>
</html>
