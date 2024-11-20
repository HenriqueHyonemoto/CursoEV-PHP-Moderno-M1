<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Aleatorios</title>
    <link rel="stylesheet" href="../../php-moderno-main/downloads/modelo-css/style.css">
</head>
<body>
    <section>
        <?php 
            $rng = rand(0,100);
        ?>
        <h1>Gerador RNG</h1>
        <p>Gerando um número aleatório entre 0 e 100</p>
        <p>O Valor gerado foi: <?= $rng?></p>
        <form action="index.php" method="get">
        <input type="submit" value="Enviar">
        </form>
    </section>
    
</body>
</html>