<?php

$nome1 = "Maria";
$nome2 = "Joao";
$nome3 = "Pedro";
$nome4 = "Paulo";
$nome5 = "Lucas";

echo("$nome1<br/>$nome2<br/>$nome3<br/>$nome4<br/>$nome5<br/>");

?>


<?php
echo "<br/><br/><br/>";

$nome = array("Maria", "João", "Pedro", "Paulo", "Lucas");

echo "Os nomes no array: <br/>";

foreach ($nome as $nomes){
    echo "<br/>".$nomes;
}

?>


<?php
echo "<br/><br/><br/>";

$salarios = array ("João" => 2000, "Pedro" => 1000, "Maria" => 500);

echo "Salário de João é " .$salarios ['João'] . "</br>";
echo "Salário de Pedro é " .$salarios ['Pedro'] . "</br>";
echo "Salário de Maria é " .$salarios ['Maria'] . "</br>";

$salarios ['João'] = "Alto";
$salarios ['Pedro'] = "Médio";
$salarios ['Maria'] = "Baixo";

echo "Salário de João é " .$salarios ['João'] . "</br>";
echo "Salário de Pedro é " .$salarios ['Pedro'] . "</br>";
echo "Salário de Maria é " .$salarios ['Maria'] . "</br>";

?>
