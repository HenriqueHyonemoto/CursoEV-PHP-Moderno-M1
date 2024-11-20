<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostra Antecessor e Sucessor</title>
    <link rel="stylesheet" href="../../php-moderno-main/downloads/modelo-css/style.css">
</head>
<body>
    <main>
        <h1>Resultado</h1>
        <P>Você digitou: <?= ($_GET["numero"])?></P>
        <P>O Antecessor é <?= ($_GET['numero']-1)?></P>
        <P>O Sucessor é <?= ($_GET['numero']+1)?></P>
        <a href= "index.php"><button>Voltar</button></a>
    </main>
</body>
</html>