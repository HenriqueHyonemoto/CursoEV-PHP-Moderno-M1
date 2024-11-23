<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="../../php-moderno-main/downloads/modelo-css/style.css">
</head>
<?php
$segundosInput = $_GET['segundosInput'] ?? 604800;

$semanas = floor($segundosInput/604800);
$dias = floor(($segundosInput-$semanas*604800)/86400);
$horas= floor(((($segundosInput-$semanas*604800)/86400)-$dias)*24);
$minutos= floor(((((($segundosInput-$semanas*604800)/86400)-$dias)*24)-$horas)*60);
$segundos= round(((((((($segundosInput-$semanas*604800)/86400)-$dias)*24)-$horas)*60)-$minutos)*60);

?>

<body>
    <main>
        <h1>Calculadora de Tempo</h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="segundosInput">Qual é o total em Segundos?</label>
            <input type="number" id="segundosInput" name="segundosInput" value="<?= $segundosInput ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h1>Totalizando tudo</h1>
        <p>Analisando o balor que você digitou,<strong><?= $segundosInput?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><?=$semanas?> semanas</li>
            <li><?=$dias?> dias</li>
            <li><?=$horas?> horas</li>
            <li><?=$minutos?> minutos</li>
            <li><?=$segundos?> segundos</li>
        </ul>

        <?php

        ?>

    </section>
</body>

</html>