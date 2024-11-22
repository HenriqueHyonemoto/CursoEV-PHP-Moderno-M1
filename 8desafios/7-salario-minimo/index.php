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
$salarioUsuario=numfmt_format_currency($padrao,$salarioUsuario,"BRL");
$salarioMinimo=numfmt_format_currency($padrao,$salarioMinimo,"BRL");
$restante=numfmt_format_currency($padrao,$restante,"BRL");
?>

<body>
    <main>

        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="salarioUsuario">Salário (R$)</label>
        <input type="number" step=0.01 id="salarioUsuario" name="salarioUsuario">
        <p>Considerando o salário minimo de <strong><?=$salarioMinimo?></strong></p>
        <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h1>Resultado Final</h1>
        <p>Quem recebe um salário de <?= $salarioUsuario?> ganha <strong><?=$qtdVezes?> Salários minimos </strong>+ <?=$restante  ?> </p>

    </section>
</body>

</html>