<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador De Preços</title>
    <link rel="stylesheet" href="../../php-moderno-main/downloads/modelo-css/style.css">
</head>
<script>
    // Função para atualizar o valor em tempo real
    function atualizaPercento(valor) {
        document.getElementById('percentDisplay').textContent = valor;
    }
</script>
<?php 
$precoProduto = $_GET['precoProduto'] ?? 0;
$percent = $_GET['percent'] ?? 50;

if ($percent != 0){
    $precoFinal= $precoProduto + $precoProduto*$percent/100;
}else{
    $precoFinal= $precoProduto;;
}

$padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);


?>
<body>
    <main>
<h1>Reajustador De Preços</h1>

<form action="<?=$_SERVER['PHP_SELF']?>" method="get">
    <label for="precoProduto">Preço do Produto (R$)</label>
    <input type="number" id="precoProduto" name="precoProduto" value="<?=$precoProduto?>" >
    <label for="percent">Qual será o percentual de reajuste? <strong>(<span id="percentDisplay"><?=$percent?></span>%)</strong></label>
    <input type="range" id="percent" name="percent" min="0" max="100" value="<?=$percent?>" oninput="atualizaPercento(this.value)">

    <input type="submit" value="Reajustar">
</form>
    </main>
    <section>
        <h1>Resultado do Reajuste</h1>
        <p> O produto que custava <?=numfmt_format_currency($padrao,$precoProduto,"BRL")?>, com <strong><?=$percent?>% de aumento</strong> vai passar a custar <strong><?=numfmt_format_currency($padrao,$precoFinal,"BRL")?></strong> a partir de agora.</p>
        <?php 
        
        ?>
       
    </section>
</body>

</html>