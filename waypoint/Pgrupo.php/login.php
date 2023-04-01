<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/StyleRegister.css">
    <title>Login</title>
    

</head>

<body>
    <Div class="containermaior">
	<div class="form-container">
		<h2>Entrar</h2>
		<form action="login.php" method="post">
			<label for="usuario">Usuário:</label>
			<input type="text" id="usuario" name="usuario"><br>

			<label for="senha">Senha:</label>
			<input type="password" id="senha" name="senha">
			<a id="esqueceu" href="#">Esqueceu a senha?</a>

			

			<div class="button-container">
                <div>
                    <button class="circle-btn"></button>
                    <button class="circle-btn"></button>
                </div>
                <div>
                    <button type="submit" class="butaologin">Entrar</button>
                </div>
                
			</div>
		</form>
	</div><br>
    
    <?php
    include_once './configura/func.php';
    session_start();
    
    if ((isset($_POST['usuario'])) && !empty($_POST['usuario'])) {
        $usuario = $_POST['usuario'];
        echo "$usuario, ";
    } else {
        echo $usuario = 'Favor digitar seu usuário.';
        exit();
    }
   
    if ((isset($_POST['senha'])) && !empty($_POST['senha'])) {
        $senha = $_POST['senha'];
        echo "senha ******...";
    } else {
        echo $senha = 'Favor digitar sua senha.';
        exit();
    }
    $login = login($usuario, $senha);
    if ($login == 1) {
        echo 'LOGADO';
        $_SESSION['user'] = $usuario;
        $_SESSION['senha'] = $senha;

    } else {
        echo 'USUARIO E/OU SENHA INCORRETOS';
        exit();
    }

    ?>
    <form action="index.php" method="post">
        <h4>Login finalizado? Se sim click abaixo!</h4>
        <button><a href="index.php">Home</a></button>
    </form>
</body>

</html>