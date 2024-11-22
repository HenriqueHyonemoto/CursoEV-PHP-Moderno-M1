<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario Minimo</title>
    <link rel="stylesheet" href="../../php-moderno-main/downloads/modelo-css/style.css">
</head>
<?php 
$salarioUsuario = $_GET["salarioUsuario"] ?? 1380.00;

$salarioMinimo = 1380.00;


$qtdVezes = floor($salarioUsuario/$salarioMinimo);
$restante = $salarioUsuario-($salarioMinimo*$qtdVezes);

$padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);
?>

<body>
    <main>

        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="salarioUsuario">Salário (R$)</label>
        <input type="number" step=0.01 id="salarioUsuario" name="salarioUsuario" value ="<?=$salarioUsuario?>">
        <p>Considerando o salário minimo de <strong><?=numfmt_format_currency($padrao,$salarioMinimo,"BRL")?></strong></p>
        <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h1>Resultado Final</h1>
        <p>Quem recebe um salário de <?= numfmt_format_currency($padrao,$salarioUsuario,"BRL");?> ganha <strong><?=$qtdVezes?> Salários minimos </strong>+ <?=numfmt_format_currency($padrao,$restante,"BRL")?> </p>

    </section>
</body>

</html>