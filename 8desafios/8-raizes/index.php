<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raizes</title>
    <link rel="stylesheet" href="../../php-moderno-main/downloads/modelo-css/style.css">
</head>
<?php 
$num = $_GET['num'] ?? 1;

$raizQuadrada = $num ** (1/2);
$raizCubica= $num ** (1/3);

?>
<body>
    <main>
<h1>Informe um Número</h1>
       <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="num">Número</label>
        <input type="number" step=0.001 id="num" name="num" value ="<?= $num ?>">
        <input type="submit" value="Calcular Raizes">
       </form>
    </main>
    <section>
        <h1>Resultado Final</h1>
       <p>Analisando o <strong>número <?= $num ?></strong>, temos:</p>
       <ul>
        <li>A sua raiz quadrada é: <strong><?= number_format($raizQuadrada,3,',','.') ?></strong> </li>
        <li>A sua raiz cubica é: <strong><?= number_format($raizCubica,3,',','.') ?></strong> </li>
       </ul>

    </section>
</body>

</html>