<?php

$ano = 2020;

//implementação da função

function exibir(){
    GLOBAL $ano; //definição da variavel
    $ano++;
    return $ano;
}

echo "<br/> Ano: ".$ano;
echo "<br/> Ano: ".exibir();
echo "<br/> Ano: ".exibir();
echo "<br/> Ano: ".$ano;

?>