<?php

function calc($operand1, $operand2, $operator)
{
    if ($operator == "+"){
        $result = $operand1 + $operand2;
        echo $result."\n";
    }elseif ($operator == "-"){
        $result = $operand1 - $operand2;
        echo $result."\n";
    }elseif ($operator == "*"){
        $result = $operand1 * $operand2;
        echo $result."\n";
    }elseif ($operator == "/"){
        $result = $operand1 / $operand2;
        echo $result."\n";
    }else{
        echo "Caractere inválido";
    }
}

function calcWithEval($operand1, $operand2, $operator)
{
    $conta = $operand1.$operator.$operand2;
    $result = eval("echo ".$conta.";");
    echo "\n";
}