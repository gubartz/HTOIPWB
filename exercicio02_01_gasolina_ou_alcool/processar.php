<?php
$preco_gasolina = $_POST["preco_gasolina"];
$preco_alcool = $_POST["preco_alcool"];
$melhor_combustivel = "Gasolina";

if (($preco_alcool / $preco_gasolina) < 0.7) {
    $melhor_combustivel = "Álcool";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
          href="estilo.css">
    <title>Resultado</title>
</head>

<body>
    <p class="resultado">
        O melhor combustível é: <span class="resultado"><?= $melhor_combustivel ?></span>
    </p>
</body>

</html>