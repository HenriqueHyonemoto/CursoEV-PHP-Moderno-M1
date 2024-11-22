<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias Aritimeticas</title>
    <link rel="stylesheet" href="../../php-moderno-main/downloads/modelo-css/style.css">
</head>
<?php 
$nota1 = $_GET['nota1'] ?? 0;
$nota2 = $_GET['nota2'] ?? 0;

$peso1= $_GET['peso1'] ?? 1;
$peso2= $_GET['peso2'] ?? 1;

$mediaS = ($nota1+$nota2)/2;
$mediaP = (($nota1*$peso1)+($nota2*$peso2))/($peso1+$peso2);


?>
<body>
    <main>
<h1>Informe um Número</h1>
       <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="nota1">1º Valor</label>
        <input type="number" id="nota1" name="nota1" max="10" step=0.1 value="<?=$nota1?>" >
        <label for="peso1">1º Peso</label>
        <input type="number" id="peso1" name="peso1" max="10" value="<?=$peso1?>">
        
        <label for="nota2">2º Valor</label>
        <input type="number" id="nota2" name="nota2" max="10" step=0.1 value="<?=$nota2?>">
        <label for="peso2">2º Peso</label>
        <input type="number" id="peso2" name="peso2" max="10" value="<?=$peso2?>">

        <input type="submit" value="Calcular Médias">
       </form>
    </main>
    <section>
        <h1>Cálculo das Médias</h1>
       <p>Analisando os valores <?= $nota1 ?> e <?= $nota2 ?>:</p>
       <ul>
        <li><strong>A Média Aritimética Simples</strong> entre os valores é igual a <?= number_format($mediaS,2,',','.') ?></li>
        <li><strong>A Média Aritimética Ponderada</strong> com pesos <?= $peso1 ?> e <?= $peso2 ?> é igual a <?= number_format($mediaP,2,',','.') ?></li>
       </ul>

    </section>
</body>

</html>