<?php
include_once'configura/conexao.php';
function usuario ()
{
    $conn=conectar();
    $lista= $conn->query ('SELECT * FROM cliente ORDER BY idcliente DESC ;');
    $lista->execute();
    if($lista->rowCount()>0){
        return $lista->fetchAll(PDO::FETCH_OBJ);
    }else {
        return'Vazio';
     }
}
function inserir ($nome,$cpf, $email, $senha){
    $conn=conectar();
    $lista= $conn->prepare ("INSERT INTO cliente (nome, cpf, email, senha) VALUES ('$nome','$cpf', '$email', '$senha')");
    $lista->execute();
    if($lista->rowCount()>0){
        return "Gravado";
    }else {
        return"NGravado";
     }
    }
    function inserirw ($nome, $email, $usuario,  $senha){
        $conn=conectar();
        $lista= $conn->prepare ("INSERT INTO tbcadastro (nome, email, usuario, senha) VALUES ('$nome', '$email','$usuario', '$senha')");
        $lista->execute();
        if($lista->rowCount()>0){
            return "Gravado";
        }else {
            return"NGravado";
         }
        }
    function contato ()
{
    $conn=conectar();
    $lista= $conn->query ('SELECT * FROM contato ;');
    $lista->execute();
    if($lista->rowCount()>0){
        return $lista->fetchAll(PDO::FETCH_OBJ);
    }else {
        return'Vazio';
     }
}

function inserirp ($nome, $email, $senha){
    $conn=conectar();
    $lista= $conn->prepare ("INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha');");
    $lista->execute();
    if($lista->rowCount()>0){
        return "Gravado";
    }else {
        return"NGravado";
     }
    }
    function login ($usuario, $senha){
        $login = 0;
        $conn=conectar();
        $lista= $conn->prepare ("SELECT * FROM tbcadastro WHERE (usuario = '$usuario') AND (senha = '$senha') ");
        $lista->execute();
        if($lista->rowCount()>0){
            $login = 1;
            return $login;
        }else {
            return $login;
         }
        }
?>