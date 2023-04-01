<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/StylePrincipal.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<?php

session_start();

?>
<!-- SIDEBAR -->
    <div class="sidebar " style=right:0;display:none; id="mySidebar">

                <button class="icon" onclick="fechado()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </button>
            <center>
                <button class="perfil-icon">  
                    <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                </button>   
            </center>

            <center>
                <a class="perfil-nickname" id="aauser">Usuario</a>
            </center>
            
        <hr>

            <div class="sidebar-nav">
                <a href="#" class="butao-sidebar">Meu painel de eventos</a>
                <a href="#" class="butao-sidebar">Minha conta</a>
                <a href="#" class="butao-sidebar">Sair</a>
                <div class="aparecer">
                    <a href="login.php" style="height: 50px;" class="butao butaologin">Entrar</a>
                    <a href="index.php" style="height: 50px;"class="butao butaocadastro">Cadastra-se</a>       
                </div>
            </div>

    </div>
<!-- SIDEBAR -->

<!-- HEADER -->
    <div class="header" id="header"> 

    
        <div class="logo">
        <a href="index.php" ><img src="./img/wp.png" class="img_logo"></a> 
        </div>    
        
        <div id="divbusca">
            <input type="text" name="pesquisar" id="busca" placeholder="buscar...">
            <button type="submit" id="ButaoDoBglho">
                <svg xmlns="http://www.w3.org/2000/svg" s width="25" height="25" fill="currentColor" class="bi bi-search" viewBox="0 0 16 15">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </button> 
        </div>
        
        <div class="navegacao_header">

            <div>
                <a href="login.php" class="butao butaologin">Entrar</a>
                <a href="cadastrar.php" class="butao butaocadastro">Junte-se a nós</a>                
            </div>
          
           
             
        </div>   
        <button class="icon" onclick="aberto()">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
        </button>
    </div>
<!-- HEADER -->

<!-- BANNER -->
<br>
    <div class="box">
        <div class="box"> <img src="./img/igrande.png" alt="" class='img1'></div>
     </div>
<br>
<!-- BANNER -->

<!-- TIPO DE EVENTOS -->

    <div div="container3">
        <center>                <div class="galeria-wrapper">
                    
                    <div class="galeria">                  
                        <img href="#" src="./img/1.png" alt="" class="image1">     
                    
                
                             
                        <img href="#" src="./img/2.png" alt="" class="image1">           
                         
                             
                    
                        <img href="#" src="./img/3.png" alt="" class="image1">           
                    

                                       
                        <img href="#" src="./img/3 2.png" alt="" class="image1">
                    

                         
                        <img href="#" src="./img/9.png" alt="" class="image1">
                        
                        
                        <img href="#" src="./img/5.png" alt="" class="image1"> 
                        

                        <img href="#" src="./img/6.png" alt="" class="image1"> 


                        <img href="#" src="./img/7.png" alt="" class="image1">
                        
                        
                        <img href="#" src="./img/8.png" alt="" class="image1"> 
                        

                        <img href="#" src="./img/4.png" alt="" class="image1">   
                    
                </div>     
            </center>

    </div>
 
<!-- TIPO DE EVENTOS -->

<!-- EVENTOS -->
<center>

<div class="container2">
    <div class="row">
        <div class="card">
            <h1>teste</h1>
            <p>teste</p>
            <a href='PagEventos.php'><img src="./img/lupa.png" alt="" class="image"></a>
        </div>
        <div class="card">
            <h1>teste</h1>
            <p>teste</p>
            <img src="./img/lupa.png" alt="" class="image">
        </div>
    </div>

    <div class="row">        
        <div class="card">
            <h1>teste</h1>
            <p>teste</p>
            <img src="./img/lupa.png" alt="" class="image">
        </div>
        <div class="card">
            <h1>teste</h1>
            <p>teste</p>
            <img src="./img/lupa.png" alt="" class="image">
        </div>
    </div>
</div>



<div class="container2">
    <div class="row">
        <div class="card">
            <h1>teste</h1>
            <p>teste</p>
            <img src="./img/lupa.png" alt="" class="image">
        </div>
        <div class="card">
            <h1>teste</h1>
            <p>teste</p>
            <img src="./img/lupa.png" alt="" class="image">
        </div>
    </div>

    <div class="row">        
        <div class="card">
            <h1>teste</h1>
            <p>teste</p>
            <img src="./img/lupa.png" alt="" class="image">
        </div>
        <div class="card">
            <h1>teste</h1>
            <p>teste</p>
            <img src="./img/lupa.png" alt="" class="image">
        </div>
    </div>

</div>
<!-- EVENTOS -->

</center>

<script>
    function aberto() {
      document.getElementById("mySidebar").style.display = "block";
    }
    
    function fechado() {
      document.getElementById("mySidebar").style.display = "none";
    }
</script>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<?php

if (isset($_SESSION['user']) && isset($_SESSION['senha'])) {
    $user = $_SESSION['user'];
    echo "
        <script>
            $('a#aauser').html('". $user ."');
        </script>
    ";
}

?>



</body>
</html>