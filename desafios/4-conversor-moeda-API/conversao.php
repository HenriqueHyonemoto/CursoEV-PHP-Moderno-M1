<?php 
require 'testeapi.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../../php-moderno-main/downloads/modelo-css/style.css">
</head>

<body>
    <?php
    $real = $_GET['reais'];
    $dolar = $_GET['reais'] / $cotacao;

    $padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);

    $real= numfmt_format_currency($padrao,$real,"BRL");
    $cotacao = numfmt_format_currency($padrao,$cotacao,"BRL");
    $dolar = numfmt_format_currency($padrao,$dolar,"USD");
    ?>
    <section>
        <h1>Conversor de Moedas</h1>
        <p>Seus <?= $real ?> equivalem a <strong><?= $dolar ?></strong> </p>
        <p><strong>*Cotação em período de 1 Semana: <?=$cotacao?></strong> através da api do banco central</p>
        <button onclick="javascript:history.go(-1)">Voltar</button>

    </section>

</body>

</html>