<?php
include_once 'include/func.php';
include 'include/conn.php';
if(isset($_POST['login'])){
    extract($_POST);
    $sql = "select * from usuarios where email='$email' AND senha='$senha';";
    $result = mysqli_query($conn,$sql);
    $resposta = mysqli_num_rows($result);
    if($resposta == 1){
        $registro = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['conectado']=true;
        $_SESSION['email']=$email;
        $redi="areaUsuario.php";
    }else{ $redi="login.php?aviso=tentativa"; }
} elseif(isset($_POST['cadastro'])){
    include_once 'include/conn.php';
    extract($_POST);
    if($senha != $senhanvm){
        $redi="cadastro.php?aviso=senha";
    }else{
        $sql = "INSERT INTO usuarios (nome_projeto, email, senha) VALUES ('$nome_projeto', '$email', '$senha')";
        $result = mysqli_query($conn,$sql);
        $redi = "login.php?aviso=cadastroCriado";
    }
} else{ $redi="login.php?aviso=invasao"; }
header('location:'.$redi);