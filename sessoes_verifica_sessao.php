<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bloqueando paginas por sessões2</title>
    <?php
    session_start();

    if($_SESSION["nome"] != "master"){
        session_destroy();

        header("location:sessao_bloqueando_paginas.php");
    }
    ?>

</head>
<body>
    <b>Pagina autorizada</b>
</body>
</html>