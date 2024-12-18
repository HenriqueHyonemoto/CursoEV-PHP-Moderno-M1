<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="../../php-moderno-main/downloads/modelo-css/style.css">
</head>
<?php
$total = $_GET['total'] ?? 604800;
$resto = $total;

$semanas = (int)($resto/604800); //1 semana = 604.800 segundos
$resto = $resto % 604800;

$dias = (int)($resto/86400); //1 dia = 86.400 segundos
$resto = $resto % 86400;

$horas = (int)($resto/3600); //1 hora = 3.600 segundos
$resto = $resto % 3600;

$minutos = (int)($resto/60); //1 min = 60 segundos
$resto = $resto % 60;

$segundos = (int)($resto/1); //1 segundo = 1 segundo



?>

<body>
    <main>
        <h1>Calculadora de Tempo</h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="total">Qual é o total em Segundos?</label>
            <input type="number" id="total" name="total" value="<?= $total ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h1>Totalizando tudo</h1>
        <p>Analisando o balor que você digitou,<strong> <?= number_format($total,0,',','.')?> segundos</strong> equivalem a um total de:</p>
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