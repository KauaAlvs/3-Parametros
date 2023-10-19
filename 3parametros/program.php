<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3 Parametros</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1>Programa:</h1>

<form method="post">
    Valor de A: <input type="text" name="a"><br>
    Valor de B: <input type="text" name="b"><br>
    Valor de C: <input type="text" name="c"><br>
    Texto para diminuir: <input type="text" name="texto"><br>
    <input type="submit" value="Calcular">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = (int)$_POST["a"];
    $b = (int)$_POST["b"];
    $c = (int)$_POST["c"];
    $texto = $_POST["texto"];


    
    $resultado_multiplicacao = $a * $b * $c;
    echo "O resultado da multiplicação é: $resultado_multiplicacao<br>";
    
    $vetor1 = [1, 2, 3];
    $vetor2 = [4, 5, 6];
    $vetor3 = [7, 8, 9];

    $resultado_subtracao = array();

    $tamanho = min(count($vetor1), count($vetor2), count($vetor3));

    for ($i = 0; $i < $tamanho; $i++) {
        $resultado_subtracao[] = $vetor1[$i] - $vetor2[$i] - $vetor3[$i];
    }

    echo "Resultado da subtração dos vetores: " . implode(", ", $resultado_subtracao) . "<br>";

    $texto_diminuido = strtolower($texto);

    echo "Texto original: $texto<br>";
    echo "Texto diminuído: $texto_diminuido<br>";
}
?>

</body>
</html>