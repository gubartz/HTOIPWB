<?php
    $valor_vendido = $_POST["valor_vendido"];
    $comissao = $_POST["comissao"];

    $resultado = $valor_vendido * ($comissao / 100);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        Você vendeu <?= $valor_vendido ?> e sua comissão de <?= $comissao ?>% é <?= $resultado ?>.
    </p>
</body>

</html>