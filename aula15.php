<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Pagina WEB - Sessão de usuário</title>
</head>
<body>
    <?php
        session_start(); //inicia a sessão
        $_SESSION['nome'] = "Otario";
    
        session_destroy(); //elimina toda a sessão

        //session_unset(); //elimina todas as variaveis de sessão, mas mantém a sessão ativa
    ?>

    <h3>Sessão de usuário</h3>
    Bem vindo, Sr. <?php echo $_SESSION['nome']; ?>

    <?php
        session_start();
    ?>

    <h3>Sessão de usuário2</h3>

    SID desta sessão é: <?php echo session_id(); ?>

</body>
</html>