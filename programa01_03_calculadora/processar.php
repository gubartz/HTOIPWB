<?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operacao = $_POST["operacao"];

    $resultado = "";

    switch ($operacao) {
        case "+":
            $resultado = $num1 + $num2;
            break;
        case "-":
            $resultado = $num1 - $num2;
            break;
        case "*":
            $resultado = $num1 * $num2;
            break;
        case "/":
            if ($num2 == 0){
                $erro = "Erro: denominador igual a zero.";
                break;
            }
            $resultado = $num1 / $num2 ;
    }

    if (empty($resultado)){
        $resultado = $erro;
        $classe = "erro";
    }
    else{
        $resultado = "O resultado da operação $num1 $operacao $num2 é $resultado.";
        $classe = "sucesso";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <p class="<?= $classe ?>">
        <?= $resultado ?>
    </p>
</body>
</html>