<?php 

$operador = 0;
$num1 = 20;

$div1 = $num1 % 2;
$div2 = $num1 % 5;
$div3 = $num1 % 10;

if ($div3 == 0){
    $operador = 3;
}else if ($div2 == 0){
    $operador = 2;
}elseif ($div1 == 0){
    $operador = 1;
}
else {
	$operador = 4;
}
 ?>