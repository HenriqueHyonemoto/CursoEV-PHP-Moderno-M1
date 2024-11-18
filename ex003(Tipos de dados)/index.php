<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>

<body>
    <h1>Teste de tipos primitivos</h1>
    <!-- tipos primitivos escalares -->
    <?php
    $hex = 0x1A;
    echo "O valor da variável em hex 0x1A é $hex<br>";

    $bin = 0b1010;
    echo "O valor da variável em binario 0b1010 é $bin<br>";

    $oct = 010;
    echo "O valor da variável em binario 010 é $oct<br>";

    //mostrar valor de variavel
    var_dump($hex);

    //Coersão (Forçar valor de variavel)
    $coersao = (int) 3e2;
    echo "<br>O valor da coersão de 3e2 para int é $coersao<br>";
    ?>

    <!-- tipos primitivos compostos -->
    <!-- array -->
    <?php
    $vet = [6, 2.5, "Maria", 3 , false];
    var_dump($vet);

    // objeto de classe
    class Pessoa{
        private string $nome;
    }
    echo "<br>";
    $p = new Pessoa;
    var_dump($p);

    echo "<br>";
    //Aspas simples em constantes

    const PI = 3.14;

    echo "Valor de Pi é: PI"; //jeito errado
    echo "Valor de Pi é: ". PI; //jeito certo

    //Mostrar aspas dentro de uma string.
    $nomeJogador = "Gabriel";
    $sobrenomeJogador = "Toledo";

    echo "<br>$nomeJogador \"Fallen\" $sobrenomeJogador";
    ?>

<?php
$curso = "BSI";
$ano = 2024;

echo "<br>";

echo <<< FRASE
Estou estudando 
$curso em $ano;
FRASE;
?>


<?php
$curso = "BSI";
$ano = 2024;
echo "<br>";
echo <<< 'FRASE'
Estou estudando 
$curso em $ano;
FRASE;
?>



   

    
</body>

</html>