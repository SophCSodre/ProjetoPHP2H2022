<?php

$operador = 1;
$num1 = 10;
$num2 = 20;
$result;
$operacao;

switch ($operador) {

    case 1: $result = somaValor($num1, $num2);
    $operacao = "soma";
    break;

    case 2: echo "subtraindo";
    break;

    case 3: echo "multiplicando";
    break;

    case 4: echo "dividindo";
    break;
    
    default: echo "saindo";
    break;
}

echo "o resultado da " .$operacao . " é " .$result;

function somaValor ($num1, $num2){
    return ($num1+$num2);
}

?>