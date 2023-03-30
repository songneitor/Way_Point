<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
    <style>
body {background-color:pink;}

</style>
</head>

<body>
    <div>
        <?php
        if ((isset($_POST['nome'])) && !empty($_POST['nome'])) {
            $nome = $_POST['nome'];
            echo "$nome, ";
        } else {
            echo $nome = 'Favor digitar seu nome.';
            exit();
        }
        if ((isset($_POST['sn'])) && !empty($_POST['sn'])) {
            $sn = $_POST['sn'];
            echo "$sn, ";
        } else {
            echo $sn = 'Favor digitar seu sobrenome.';
            exit();
        }
        if ((isset($_POST['email'])) && !empty($_POST['email'])) {
            $email = $_POST['email'];
            echo "$email, ";
        } else {
            echo $email = 'Favor digitar seu email.';
            exit();
        }
        if ((isset($_POST['usuario'])) && !empty($_POST['usuario'])) {
            $usuario = $_POST['usuario'];
            echo "$usuario, ";
        } else {
            echo $usuario = 'Favor digitar seu usuario.';
            exit();
        }
        if ((isset($_POST['senha'])) && !empty($_POST['senha'])) {
            $senha = $_POST['senha'];
            echo "senha: *****..., ";
        } else {
            echo $senha = 'Favor digitar sua senha.';
            exit();
        }

        ?>
    </div>
    <h2>Cadastro concluido</h2>
   <button> <a href="index.php">entrar</a></button>
</body>

</html>