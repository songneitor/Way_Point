<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/StyleRegister.css">
    <title>Cadastro</title>
    <style>


</style>
</head>

<body>
    
    
       
     <Div class="containermaior">
        <div class="form-container">
		    <h2>Cadastrar</h2>
            <form action="p_rec_cad.php" method="post">
			<label for="usuario">Nome:</label>
			<input type="text" id="usuario" name="nome"
            maxlength="15"><br>

			<label for="usuario">Usuário:</label>
			<input type="text" id="usuario" name="usuario" maxlength="20"><br>

            <label for="usuario">Email:</label>
			<input type="text" id="usuario" name="email"><br>

			<label for="senha">Senha:</label>
			<input type="password" id="senha" name="senha" maxlength="20">
			<a href="#">Esqueceu a senha?</a>

			

			<div class="button-container">
                <div>
                    <button class="circle-btn"></button>
                    <button class="circle-btn"></button>
                </div>
                <div>
                    <button type="submit" class="butaoCadastro">Cadastrar</button>
                </div>
            </div>
            </form>
                
			</div>
        </div>
    
</div>
</body>

</html>