<!DOCTYPE html>
<html lang="en">
<?php 
    #Testando comentário de HTML 
    #ETEC Irmã Agostina
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Testando Comentário</title>
</head>
<body>
<? 

/*Este é um comentário 
de multiplas linhas.
*/
echo  "Segundo Exemplo de PHP";
$data= "20 de agosto de 2020";

// Este é um comentário apenas de uma linha.
?>
<p>Este paragrafo está sendo interpretado como HTML</p>
Arquivo criado em <?php echo $data ?>
</body>
</html>