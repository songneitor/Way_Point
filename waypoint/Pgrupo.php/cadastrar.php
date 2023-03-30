<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Cadastro</title>
    <style>
body {background-color:red;}

</style>
</head>

<body>
    <form action="p_rec_cad.php" method="post">
        <div class="cadastro">
            <label for="">Nome: </label><br>
            <input type="text" name="nome" id="" maxlength="15" placeholder='Insira o nome'><br>
            <label for="">Sobrenome:</label><br>
            <input type="text" name="sn" id="" maxlength="20" placeholder="Insira seu sobrenome"><br>
            <label for="">E-mail:</label><br>
            <input type="email" name="email" id="" placeholder="Insira o e-mail"><br>
            <label for="">Usuario:</label><br>
            <input type="text" name="usuario" id="" maxlength="20" placeholder="Insira o usuario"><br>
            <label for="">Senha</label><br>
            <input type="text" name="senha" maxlength="20" placeholder="Insira senha"><br>
            <h4>Após preencher tudo click no botão</h4>
            <button type="submit">Entrar</button><br>
        </div>
    </form>

</body>

</html>