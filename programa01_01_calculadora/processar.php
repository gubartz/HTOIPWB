<?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operacao = $_POST["operacao"];

    if($operacao == "+"){
        $resultado = $num1 + $num2;
    }

    if($operacao == "-"){
        $resultado = $num1 - $num2;
    }

    if($operacao == "*"){
        $resultado = $num1 * $num2;
    }

    if($operacao == "/"){
        if ($num2 == 0){
            $classe = "erro";
            $resultado = "Erro. Divisão por zero.";
        } else{
            $resultado = $num1 / $num2;
        }
    }
    echo "O resultado de $num1 $operacao $num2 é $resultado";
?>