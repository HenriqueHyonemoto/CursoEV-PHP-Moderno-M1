<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia Divisao</title>
    <link rel="stylesheet" href="../../php-moderno-main/downloads/modelo-css/style.css">
</head>


<body>
    <main>
        <?php
        $dividendo = $_GET["dividendo"] ?? "";
        $divisor = $_GET["divisor"] ?? "";
        if (!empty($dividendo) && !empty($divisor)) {
            $resto = (int)($dividendo % $divisor);
            $quociente = (int)($dividendo / $divisor);
        }

        ?>


        <h1>Anatomia de uma Divisão</h1>

        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" id="dividendo" name="dividendo" value="<?= $dividendo ?>">
            <label for="divisor">Divisor</label>
            <input type="number" id="divisor" name="divisor" value="<?= $divisor ?>">
            <input type="submit" value="Analisar">
        </form>
    </main>

    <?php
    if ($divisor == 0) {
        echo "<section>";
        echo "<h1>Impossivel fazer Divisão por 0</h1>";
        echo "</section>";
    }

    if (!empty($dividendo) && !empty($divisor)) {
        echo "<section>"; 
    echo "<h1>Estrutura da Divisão</h1>";
    echo "<table class=\"divisao\"";
    echo "<tr>";
    echo "<td>" . (int)$dividendo . "</td>";
    echo "<td>" . (int)$divisor . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>" . (int)$resto . "</td>";
    echo "<td>" . (int)$quociente . "</td>";
    echo "</tr>";
    echo "</table>";
    echo "</section>";  
    }

    ?>




</body>

</html>