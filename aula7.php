<?php

$nome= array ('João', 'José', 'Paulo', 'Pedro');
foreach ($nome as $item) {
    echo "<br/>" .$item;
}

?>

<?php

for ($x=1; $x<100; $x++) {

    if ($x==10)
        goto desvio;
    echo "<br/>" .$x;
}

desvio:
echo "<br/> Pronto, aqui está o desvio.";

?>

