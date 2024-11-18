<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../php-moderno-main/downloads/modelo-css/style.css">
</head>

<body>
    <header>
        <h1>Dados do Formulário</h1>
    </header>
    <main>
        <?php 
        $nome = $_GET["nome"] ?? "sem nome";
		$sobrenome = $_GET["sobrenome"] ?? "sem sobrenome";

        echo "É um prazer te conhecer <strong>$nome $sobrenome!</strong><br> Esse é meu site!<br>";

        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>


</html>