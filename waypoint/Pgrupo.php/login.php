<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Login</title>
    <style>
body {background-color:aquamarine;}

</style>
</head>

<body>
    <form action="login.php" method="post">
        <div class="logar">
            <h3>Login</h3>
            <label for="">Usuário:</label><br><br>
            <input type="text" name="nome" id=''maxlength="15" placeholder="usuário"><br>
            <label for="">Senha:</label><br><br>
            <input type="text" name="senha" id="senha" maxlength="20" placeholder="senha"><br>
            <button><a href="cadastrar.php">Possui cadastro?</a></button><br>

            <button type="submit">Entrar</button>
        </div>
    </form>
    <?php
    if ((isset($_POST['nome'])) && !empty($_POST['nome'])) {
        $nome = $_POST['nome'];
        echo "$nome, ";
    } else {
        echo $nome = 'Favor digitar seu nome.';
        exit();
    }
    if ((isset($_POST['senha'])) && !empty($_POST['senha'])) {
        $senha = $_POST['senha'];
        echo "senha ******...";
    } else {
        echo $senha = 'Favor digitar sua senha.';
        exit();
    }
    ?>
    <form action="index.php" method="post">
        <h4>Login finalizado? Se sim click abaixo!</h4>
        <button><a href="index.php">Home</a></button>
    </form>
</body>

</html>