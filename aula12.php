<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exemplo de Formulário</title>
</head>
<body>
    <h2>Exemplo de Formulário</h2>
    <form name="cadastro" method="get" action="pagina_form.php">
        Nome: <input type="text" name="nome" size="40"> <br/><br/>
        Senha: <input type="password" name="senha"> <br/><br/>
        <input type="checkbox" name="termouso" value="termo"/>
        Aceito o termo de uso <br/><br/>
        <input type="radio" name="sexo" value="fem"/>Feminino
        <input type="radio" name="sexo" value="mas"/>Masculino
        <br/>
        <input type="hidden" name="login" value="admin">
        <br/>
        &nbsp; &nbsp; &nbsp;
        <input type="button" name="VOLTAR">
        &nbsp; &nbsp; &nbsp;
        <input type="reset" name="LIMPAR">
        &nbsp; &nbsp; &nbsp;
        <input type="submit" name="ENVIAR">
        <a href="#" onclick="document.cadastro.reset()">LIMPAR</a>
    </form>
    
    <br/>
    <br/>
    <BUTton onclick="window.location.href='http://www.google.com.br'">Google</BUTton>
    <button onclick="window.location.reload()">Atualizar a página</button>
    <button onclick="window.history.back()">Voltar</button>
    
    <br/>
    <br/>
    <h2>Formulário - Caixa de Seleção</h2>
    <form name="cadastro" method="get" action="pagina_form.php">

    Animais:
    <select name="animais">
        <option>Elefante</option>
        <option>Hipopótamo</option>
        <option>Rinoceronte</option>
        <option>Dinossauro</option>
    </select>
    <br/>
    <br/>
    <input type="submit" name="ENVIAR"></input>
    </form>

    <br/>
    <br/>
    <h2>Formulário - Textarea</h2>
    <form name="cadastro" method="get" action="pagina_form.php">

    Mensagem:
    <Textarea name="msg" cols="50" rows="8">

    </textarea>
    <br/> <br/>
    <input type="submit" name="ENVIAR">
    </form>
</body>
</html>