<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulário - Função GET</title>
</head>
<body>
    <h2>Formulário - Função GET</h2>

    <form name="cadastro" method="get" action="pagina_funcao_get.php">

        Login:
        <input type="text" name="nome"><br><br>

        Senha:
        <input type="password" name="senha"><br><br>
    
        <input type="submit" value="Enviar"><br><br>

    </form>
    
</body>
</html>

<?php

echo "<h3>Recuperando os dados - função GET</h3>";

echo "Nome: ".$_GET['nome'];
echo "<br>";
echo "Senha: ".$_GET['senha'];

?>