<?php
include_once 'include/func.php';
include_once 'include/conn.php';
include_once 'include/warning.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Exo:wght@200;300;500&family=Lato&family=Montserrat:wght@100;200;300;400&display=swap');
    </style>
    <title>Document</title>
  </head>
  <body class="cadastroLogin">
      <img class="fundoEscuro" src="assets/login fundo escuro.png"> 
        <img class="fotoEsquerda" src="assets/Cadastro e login.jpeg">
      <a href="index.html" class="logo-inline-svg-1">
        <svg class="layer" width="46" height="41" viewBox="0 0 46 41" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M0.09375 27.9222H5.414V30.8666C5.414 34.4 7.18742 36.1666 13.69 36.1666H30.2419C37.9267 36.1666 40.2912 34.4 40.2912 29.1C40.2912 24.3889 38.5178 23.2111 31.4241 23.2111H21.3748C5.414 23.2111 0.09375 22.0333 0.09375 11.4333C0.09375 2.59998 5.414 0.833313 16.0545 0.833313H27.8773C40.8824 0.833313 43.8381 4.36665 43.8381 10.8444V12.6111H39.1089C39.1089 6.13331 38.5178 5.54442 24.9216 5.54442H19.0102C8.96084 5.54442 5.414 6.13331 5.414 12.0222C5.414 16.7333 6.59628 18.5 14.8722 18.5H30.2419C40.8824 18.5 45.0203 21.4444 45.0203 27.9222V30.2778C45.0203 39.7 37.3355 40.2889 29.6507 40.2889H14.8722C6.59628 40.2889 0.09375 39.1111 0.09375 30.2778V27.9222Z" fill="white" > </svg>

        <svg class="layer2" width="73" height="40" viewBox="0 0 73 40" fill="none" xmlns="http://www.w3.org/2000/svg" > <path d="M0.660645 0.422241H5.9809L19.5771 34.5778L33.1733 0.422241H39.6758L53.272 34.5778L66.8682 0.422241H72.1885L56.8189 39.2889H49.7252L36.7201 5.13335L23.1239 39.2889H16.6214L0.660645 0.422241Z" fill="white"> </svg>

        <svg class="layer3" width="54" height="40" viewBox="0 0 54 40" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M40.7063 26.9222L27.1101 4.54446L14.105 26.9222L11.7404 31.0445L7.01132 39.2889H0.508789L24.1544 0.422241H30.6569L53.7113 39.2889H47.7999L42.4797 31.0445L40.7063 26.9222Z" fill="white"> </svg>

        <svg class="layer4" width="46" height="40" viewBox="0 0 46 40" fill="none" xmlns="http://www.w3.org/2000/svg" > <path fill-rule="evenodd" clip-rule="evenodd" d="M1.12533 0.422241H32.4557C43.6874 0.422241 45.4608 3.95557 45.4608 11.6111V14.5556C45.4608 19.8556 42.5051 21.6222 38.3671 22.2111C43.0962 22.8 44.8696 25.7445 44.8696 29.2778V39.2889H39.5494V30.4556C39.5494 24.5667 36.5937 23.9778 31.8646 23.9778H5.85444V39.2889H0.53418L1.12533 0.422241ZM31.8646 19.2667C37.776 19.2667 40.1405 17.5 40.1405 13.9667V10.4334C40.1405 5.72224 38.3671 4.54446 30.6823 4.54446H6.44557V19.2667H31.8646Z" fill="white" > </svg>

        <svg class="layer5" width="63" height="40" viewBox="0 0 63 40" fill="none" xmlns="http://www.w3.org/2000/svg" > <path d="M0.830566 0.422241H9.10653L31.5698 32.8111L54.6243 0.422241H62.9002V39.2889H57.5799V5.13335L33.9344 39.2889H29.7964L6.74196 5.13335V39.2889H1.42172V0.422241H0.830566Z" fill="white"> </svg>

        <div class="layer6">
          <div class="layer7">
            <svg class="layer8" width="14" height="23" viewBox="0 0 14 23" fill="none" xmlns="http://www.w3.org/2000/svg" > <path d="M13.6939 3.21111V0.266663H6.00905C2.46221 0.266663 0.0976562 3.21111 0.0976562 6.15555V6.74444C0.0976562 9.68888 2.46221 12.6333 6.00905 12.6333H7.19133C9.55589 12.6333 10.7382 14.4 10.7382 16.1667C10.7382 17.9333 9.55589 19.7 7.19133 19.7H0.0976562V22.0556H7.19133C10.7382 22.0556 13.6939 19.7 13.6939 16.1667C13.6939 14.4 12.5116 12.6333 11.3293 11.4556C10.147 10.6704 8.7677 10.0815 7.19133 9.68888H6.00905C4.23563 9.68888 2.46222 8.51111 2.46222 6.74444V6.15555C2.46222 4.38889 4.23563 3.21111 6.00905 3.21111H13.6939Z" fill="white" > </svg>
          </div>
        </div>
        <div class="layer6">
          <div class="layer10">
            <svg class="layer11" width="16" height="23" viewBox="0 0 16 23" fill="none" xmlns="http://www.w3.org/2000/svg" > <path d="M4.96985 8.51111L6.74325 6.15555L3.19642 0.266663H0.240723L4.96985 8.51111ZM9.69894 11.4556L15.6103 0.266663H13.2458L6.74325 11.4556V22.0556H9.69894V11.4556Z" fill="white" > </svg>
          </div>
        </div>
        <div class="layer6">
          <div class="layer13">
            <svg class="layer14" width="17" height="23" viewBox="0 0 17 23" fill="none" xmlns="http://www.w3.org/2000/svg"> <path fill-rule="evenodd" clip-rule="evenodd" d="M16.1175 0.266663V22.0556H12.5707L9.02383 16.1667L7.84157 13.8111L6.06813 11.4556L0.156738 0.266663H3.11243L9.615 11.4556L13.1618 17.9333V0.266663H16.1175ZM0.156738 5.56666L3.11243 10.2778V22.0556H0.156738V5.56666Z" fill="white"> </svg>
          </div>
        </div>
        <div class="layer6">
          <div class="layer13">
            <svg class="layer16" width="17" height="23" viewBox="0 0 17 23" fill="none" xmlns="http://www.w3.org/2000/svg" > <path d="M16.8075 22.0556V19.7H11.4872C7.34923 19.7 3.21125 15.5778 3.21125 11.4556C3.21125 6.74444 7.34923 3.21111 11.4872 3.21111H16.8075V0.266663H11.4872C8.53151 0.266663 6.16693 1.44444 3.80238 3.21111C2.02896 5.56666 0.84668 8.51111 0.84668 11.4556C0.84668 14.4 2.02896 16.7556 3.80238 19.1111C6.16693 20.8778 8.53151 22.0556 11.4872 22.0556H16.8075Z" fill="white"> </svg>
          </div>
        </div>
      </a>
      <form name="cadastro" action="auth.php" method="POST">
        <div class="junte-se-revolucao">Junte-se à Revolução</div>
        <label class="nome-do-seu-projeto">Nome do seu Projeto:</label>
        <input name="nome_projeto" type="text" class="txtbProjeto">
        <label class="seu-e-mail">Seu E-mail:</label>
        <input name="email" class="txtbEmail" type="email">
        <label class="senha">Senha:</label>
        <input name="senha" class="txtbSenha" type="password">
        <label class="digite-novamente">Digite novamente:</label>
        <input name="senhanvm" class="txtbNvm" type="password">
        <div class="btnCima">
          <input name="cadastro" type="submit" value="Criar Conta" class="buttonCima">
        </div>
        <div class="linEsq"></div>
        <div class="ou">ou</div>
        <div class="linDir"></div>
        <a href="Login.php" class="btnBaixo">
          <input type="button" value="Acesse Sua Conta" class="buttonBaixo">
        </a>
      </form>
  </body>
</html>
