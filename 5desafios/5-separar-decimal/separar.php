
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
    $num = $_GET['num'];
    
    $numInt = (int)$num;

    var_dump($numInt);
    $numFrac = $num - $numInt;

    $numInt = number_format($numInt,0,',','.');
    $numFrac = number_format($numFrac,3,',','.');
    ?>
    <section>
        <h1>Analisador de Número Real</h1>
        <p>Analisando o número <?= $num ?> informado pelo usuario:</p>
        <ul>
            <li>A parte inteira do número é <strong><?=$numInt ?></strong></li>
            <li>A parte fracionaria do número é <strong><?=$numFrac ?></strong></li>
        </ul>
        <button onclick="javascript:history.go(-1)">Voltar</button>

    </section>

</body>

</html>