<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
    <style>
        body {
            background-color: white;
        }
    </style>
</head>

<body>
    <table align="center" border='4px' background-color='white'>
    <tr>
            <th colspan="2">
            <h2>Cadastro concluido</h2>
            </th>
    </tr>
        <tr>
            <th>
               <p >nome:   </p>
            </th>
            <th>
                <?php
                if ((isset($_POST['nome'])) && !empty($_POST['nome'])) {
                    $nome = $_POST['nome'];
                    echo "$nome, ";
                } else {
                    echo $nome = 'Favor digitar seu nome.';
                    exit();
                }
                ?>
            </th>
        </tr>
        <tr>
            <th>
               <p >e-mail:   </p>
            </th>
            <th>
                <?php
                if ((isset($_POST['email'])) && !empty($_POST['email'])) {
                    $email = $_POST['email'];
                    echo "$email, ";
                } else {
                    echo $email = 'Favor digitar seu email.';
                    exit();
                }
                ?>
            </th>
        </tr>
        <tr>
            <th>
               <p >usuário:   </p>
            </th>
            <th>

                <?php
                if ((isset($_POST['usuario'])) && !empty($_POST['usuario'])) {
                    $usuario = $_POST['usuario'];  
                    echo "$usuario, ";
                } else {
                    echo $usuario = 'Favor digitar seu usuario.';
                    exit();
                }
                ?>
            </th>
        </tr>
        <tr>
            <th>
               <p >senha:    </p>
            </th>
            <th>
                <?php
                if ((isset($_POST['senha'])) && !empty($_POST['senha'])) {
                    $senha = $_POST['senha'];
                   
                    echo "senha: *****...,  ";
                } else {
                    echo $senha = 'Favor digitar sua senha.';
                    exit();

                }
                inserirw ($nome, $email, $usuario, $senha);
                ?>
            </th>
        </tr>
        <tr>
            <th colspan='2'> <h3> Seus dados foram salvos com sucesso aora efetue o login</h3> </th>
        </tr>
        <tr>
            <th colspan='2'>   <button> <a href="login.php">entrar</a></button></th>
        </tr>
    </table>
  
 
</body>

</html>