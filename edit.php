<?php
include_once 'include/func.php';
include_once 'include/conn.php';
session_start();
Ativo();

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Edit'])){
        extract($_POST);
        $sql = "UPDATE projetos SET nome_projeto='$Nome', descricao_projeto='$Desc' WHERE id={$_SESSION['id']}";

        mysqli_query($conn,$sql);
        $redi = 'areaUsuario.php';
        header('location:'.$redi);
        exit;
    }

    if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['nome_projeto'])){
        $sql = "SELECT nome_projeto, descricao_projeto, id FROM projetos WHERE nome_projeto = '{$_GET['nome_projeto']}'";
        $result = mysqli_query($conn,$sql);
        $linha = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $linha['id'];
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Exo:wght@200;300;500&family=Lato&family=Montserrat:wght@100;200;300;400&display=swap');
    </style>
  </head>
  <body>
    <!-- sessão da logo -->
      <div class="logo-inline">
        <svg class="layer" width="49" height="45" viewBox="0 0 49 45" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M0.549316 30.6667H6.21134V34C6.21134 38 8.09868 40 15.0189 40H32.6341C40.8126 40 43.3291 38 43.3291 32C43.3291 26.6667 41.4417 25.3333 33.8924 25.3333H23.1974C6.21134 25.3333 0.549316 24 0.549316 12C0.549316 2 6.21134 0 17.5354 0H30.1177C43.9582 0 47.1037 4 47.1037 11.3333V13.3333H42.0708C42.0708 6 41.4417 5.33333 26.9721 5.33333H20.681C9.98602 5.33333 6.21134 6 6.21134 12.6667C6.21134 18 7.46957 20 16.2772 20H32.6341C43.9582 20 48.362 23.3333 48.362 30.6667V33.3333C48.362 44 40.1835 44.6667 32.005 44.6667H16.2772C7.46957 44.6667 0.549316 43.3333 0.549316 33.3333V30.6667Z" fill="white"/> </svg>
        <svg class="layer2" width="77" height="45" viewBox="0 0 77 45" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M0.686035 0.666626H6.34806L20.8177 39.3333L35.2873 0.666626H42.2076L56.6772 39.3333L71.1468 0.666626H76.8088L60.4519 44.6666H52.9025L39.062 5.99996L24.5924 44.6666H17.6721L0.686035 0.666626Z" fill="white"> </svg>
        <svg class="layer3" width="58" height="45" viewBox="0 0 58 45" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M43.2504 30.6666L28.7808 5.33329L14.9403 30.6666L12.4239 35.3333L7.39096 44.6666H0.470703L25.6353 0.666626H32.5555L57.0909 44.6666H50.7998L45.1378 35.3333L43.2504 30.6666Z" fill="white"> </svg>
        <svg class="layer4" width="49" height="45" viewBox="0 0 49 45" fill="none" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" clip-rule="evenodd" d="M1.30247 0.666626H34.6455C46.5987 0.666626 48.486 4.66663 48.486 13.3333V16.6666C48.486 22.6666 45.3404 24.6666 40.9366 25.3333C45.9696 26 47.8569 29.3333 47.8569 33.3333V44.6666H42.1949V34.6666C42.1949 28 39.0493 27.3333 34.0164 27.3333H6.33537V44.6666H0.67334L1.30247 0.666626ZM34.0164 22C40.3075 22 42.824 20 42.824 16V12C42.824 6.66663 40.9366 5.33329 32.7582 5.33329H6.96448V22H34.0164Z" fill="white"> </svg>
        <svg class="layer5" width="67" height="45" viewBox="0 0 67 45" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M0.842773 0.666626H9.65038L33.5567 37.3333L58.0922 0.666626H66.8997V44.6666H61.2377V5.99996L36.0732 44.6666H31.6694L7.13391 5.99996V44.6666H1.4719V0.666626H0.842773Z" fill="white"> </svg>

        <div class="layer6">
          <div class="layer7">
            <svg class="layer8" width="16" height="25" viewBox="0 0 16 25" fill="none" xmlns="http://www.w3.org/2000/svg" > <path d="M15.1493 3.33333V0H6.97083C3.19614 0 0.679688 3.33333 0.679688 6.66667V7.33333C0.679688 10.6667 3.19614 14 6.97083 14H8.22906C10.7455 14 12.0038 16 12.0038 18C12.0038 20 10.7455 22 8.22906 22H0.679688V24.6667H8.22906C12.0037 24.6667 15.1493 22 15.1493 18C15.1493 16 13.8911 14 12.6329 12.6667C11.3746 11.7778 9.9067 11.1111 8.22906 10.6667H6.97083C5.08348 10.6667 3.19615 9.33333 3.19615 7.33333V6.66667C3.19615 4.66667 5.08348 3.33333 6.97083 3.33333H15.1493Z"fill="white"> </svg>
          </div>
        </div>
        <div class="layer6">
          <div class="layer10">
             <svg class="layer11" width="18" height="25" viewBox="0 0 18 25" fill="none" xmlns="http://www.w3.org/2000/svg" > <path d="M5.95676 9.33333L7.84407 6.66667L4.0694 0H0.923828L5.95676 9.33333ZM10.9896 12.6667L17.2808 0H14.7643L7.84407 12.6667V24.6667H10.9896V12.6667Z"fill="white"> </svg>
          </div>
        </div>
        <div class="layer6">
          <div class="layer13">
            <svg class="layer14" width="18" height="25" viewBox="0 0 18 25" fill="none" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0418 0V24.6667H13.2671L9.49237 18L8.23416 15.3333L6.3468 12.6667L0.0556641 0H3.20123L10.1215 12.6667L13.8962 20V0H17.0418ZM0.0556641 6L3.20123 11.3333V24.6667H0.0556641V6Z" fill="white"> </svg>
          </div>
        </div>
        <div class="layer6">
          <div class="layer13">
            <svg class="layer16" width="18" height="25" viewBox="0 0 18 25" fill="none" xmlns="http://www.w3.org/2000/svg" > <path d="M17.0608 24.6667V22H11.3988C6.99498 22 2.59117 17.3333 2.59117 12.6667C2.59117 7.33333 6.99498 3.33333 11.3988 3.33333H17.0608V0H11.3988C8.25321 0 5.73673 1.33333 3.22028 3.33333C1.33293 6 0.074707 9.33333 0.074707 12.6667C0.074707 16 1.33293 18.6667 3.22028 21.3333C5.73673 23.3333 8.25321 24.6667 11.3988 24.6667H17.0608Z" fill="white"> </svg>
          </div>
        </div>
      </div>
      <!-- fim da sessão da logo -->
      <div class="linhaCabecario"></div>
      <div class="fundo"></div>
      <form name="Edit" method="post" action="#">
        <label class="editar-add">Editar Pedido</label>
        <label class="nome-do-pedido">Nome do pedido:</label>
        <input name="Nome" type="text" class="txtbNomeP" value="<?=$linha['nome_projeto']?>">
        <label class="txtDesc"> Fale mais sobre o seu projeto: </label>
        <textarea name="Desc" class="txtbDescricao"><?=$linha['descricao_projeto']?></textarea>
        <button name="Edit" class="btnConcluido">Concluido</button>
    </form>
  </body>
</html>
