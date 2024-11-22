<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="../../php-moderno-main/downloads/modelo-css/style.css">
</head>
<?php
$saque = $_GET['saque'] ?? 0;
    $qtd100 = floor($saque/100);
    $qtd50 = floor(($saque-$qtd100*100)/50);
    $qtd10 = floor(((($saque-$qtd100*100)/50)-$qtd50)*5);
    $qtd5 = ((((($saque-$qtd100*100)/50)-$qtd50)*5)-$qtd10)*2;

    $padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);

    
?>

<body>
    <main>
        <h1>Caixa Eletrônico</h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="segundosInput">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="saque" id="saque" value="<?=$saque ?>" step="5" >
            <small>*Notas disponíveis: R$100, R$50, R$10 e R$5</small>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <h1>Saque de <?= numfmt_format_currency($padrao,$saque,"BRL") ?> realizado</h1>
        <p>O caixa eletrônico vai te entregar as seguintes notas: </p>
        
        <ul>
            <li><img src="image/nota100.jpg" alt="" width="100px"> x<?=$qtd100?></li>
            <li><img src="image/nota50.jpg" alt="" width="100px"> x<?=$qtd50?></li>
            <li><img src="image/nota10.jpg" alt="" width="100px"> x<?=$qtd10?></li>
            <li><img src="image/nota5.jpg" alt="" width="100px"> x<?=$qtd5?></li>
        </ul>


        <?php

        ?>

    </section>
</body>

</html>