<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Idade</title>
    <link rel="stylesheet" href="../../php-moderno-main/downloads/modelo-css/style.css">
</head>
<?php 
$dataNasc = $_GET['dataNasc'] ?? 2000;
$anoIdade = $_GET['anoIdade'] ?? 2024;

$idade = $anoIdade - $dataNasc;

?>
<body>
    <main>
<h1>Informe um Número</h1>
       <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="nota1">Em que ano você nasceu?</label>
        <input type="number" id="dataNasc" name="dataNasc" value="<?=$dataNasc?>" >
        <label for="anoIdade">Quer saber sua idade em qual ano? (Atualmente estamos em 2024)</label>
        <input type="number" id="anoIdade" name="anoIdade" value="<?=$anoIdade?>">
        <input type="submit" value="Calcular Idade">
       </form>
    </main>
    <section>
        <h1>Resultado</h1>
        <?php 
        if ($idade >= 0){
            echo "<p>Quem nasceu em $dataNasc teria <strong>$idade Anos</strong>  em $anoIdade</p>";
        }else{
            echo "<p>Em $anoIdade Faltaria <strong>" . abs($idade) . " Anos</strong> pra você nascer em $dataNasc</p>";
        }
        ?>
       
    </section>
</body>

</html>