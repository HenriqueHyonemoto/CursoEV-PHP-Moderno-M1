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
    $cotação = 0.17;
    $dolar = $_GET['reais'] * $cotação;

    $padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);

    $real= numfmt_format_currency($padrao,$real,"BRL");
    $dolar = numfmt_format_currency($padrao,$dolar,"USD");
    ?>
    <section>
        <h1>Conversor de Moedas</h1>
        <p>Seus <?= $real ?> equivalem a <strong><?= $dolar ?></strong> </p>
        <p><strong>*Cotação fixa de R$5,77</strong> informada diretamente no código</p>
        <button onclick="javascript:history.go(-1)">Voltar</button>

    </section>

</body>

</html>