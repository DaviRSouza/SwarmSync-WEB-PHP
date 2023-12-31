<?php
function Ativo():void
{
      if(!isset($_SESSION)){ session_start();}
      if(!isset($_SESSION['conectado']) || $_SESSION['conectado'] !== true){
            $redi = 'login.php?aviso=invasao';
            header('location:'.$redi);
            exit;
      }
}
function MontaTabela($result, $line): string
{
    $tabela = '';  // Inicializa a variável que vai conter o HTML da tabela
    while ($linha = mysqli_fetch_assoc($result)) {
        $tabela .= '<tr>';
        $tabela .= '<td style="width: 10%;">'. $linha ['nome_projeto'] . '</td>';
        $tabela .= '<td>'. $linha ['descricao_projeto'] . '</td>';
        $tabela .= '<td style="width: 9%;">' . $linha ['status'] . '</td>';
        $tabela .= '<td style="width: 1%;">';
        $tabela .= '<a href="delete.php?nome_projeto=' . $linha['nome_projeto'] . '">';
        $tabela .= '<svg class="lixeira" width="15" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg" > <path fill-rule="evenodd" clip-rule="evenodd" d="M15 3.4C15 3.70058 14.8784 3.98885 14.662 4.20139C14.4457 4.41393 14.1522 4.53333 13.8462 4.53333H13.2692V14.7333C13.2692 15.3345 13.0261 15.911 12.5933 16.3361C12.1605 16.7612 11.5736 17 10.9615 17H4.03846C3.42642 17 2.83945 16.7612 2.40668 16.3361C1.9739 15.911 1.73077 15.3345 1.73077 14.7333V4.53333H1.15385C0.847827 4.53333 0.554342 4.41393 0.337954 4.20139C0.121566 3.98885 0 3.70058 0 3.4V2.26667C0 1.96609 0.121566 1.67782 0.337954 1.46528C0.554342 1.25274 0.847827 1.13333 1.15385 1.13333H5.19231C5.19231 0.832755 5.31387 0.544487 5.53026 0.331946C5.74665 0.119404 6.04013 0 6.34615 0L8.65385 0C8.95987 0 9.25335 0.119404 9.46974 0.331946C9.68613 0.544487 9.80769 0.832755 9.80769 1.13333H13.8462C14.1522 1.13333 14.4457 1.25274 14.662 1.46528C14.8784 1.67782 15 1.96609 15 2.26667V3.4ZM3.02077 4.53333L2.88462 4.6002V14.7333C2.88462 15.0339 3.00618 15.3222 3.22257 15.5347C3.43896 15.7473 3.73244 15.8667 4.03846 15.8667H10.9615C11.2676 15.8667 11.561 15.7473 11.7774 15.5347C11.9938 15.3222 12.1154 15.0339 12.1154 14.7333V4.6002L11.9792 4.53333H3.02077ZM1.15385 3.4V2.26667H13.8462V3.4H1.15385Z" fill="white"> </svg>';
        $tabela .= '</a> </td>';
        $tabela .= '<td style="width: 1%;"> <a href="edit.php?nome_projeto=' . $linha['nome_projeto'] . '">';
        $tabela .= '<svg class="lapis" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M15.1816 0.183609C15.2396 0.125408 15.3086 0.0792312 15.3845 0.0477245C15.4605 0.0162178 15.5419 0 15.6241 0C15.7063 0 15.7877 0.0162178 15.8636 0.0477245C15.9395 0.0792312 16.0085 0.125408 16.0666 0.183609L19.8164 3.93344C19.8746 3.9915 19.9208 4.06047 19.9523 4.13639C19.9838 4.21232 20 4.29372 20 4.37593C20 4.45813 19.9838 4.53953 19.9523 4.61546C19.9208 4.69139 19.8746 4.76035 19.8164 4.81841L7.31694 17.3179C7.25696 17.3774 7.18552 17.4242 7.10695 17.4554L0.85722 19.9552C0.743645 20.0007 0.619225 20.0118 0.499385 19.9873C0.379545 19.9627 0.269555 19.9035 0.18305 19.8169C0.0965462 19.7304 0.0373319 19.6205 0.0127486 19.5006C-0.0118346 19.3808 -0.000705711 19.2564 0.0447556 19.1428L2.54465 12.8931C2.57581 12.8145 2.62258 12.743 2.68214 12.6831L15.1816 0.183609ZM14.0079 3.12598L16.874 5.99211L18.4902 4.37593L15.6241 1.5098L14.0079 3.12598ZM15.9903 6.87582L13.1242 4.00969L4.99954 12.1343V12.5006H5.62451C5.79026 12.5006 5.94923 12.5664 6.06643 12.6836C6.18364 12.8008 6.24948 12.9598 6.24948 13.1255V13.7505H6.87446C7.04021 13.7505 7.19917 13.8164 7.31638 13.9336C7.43358 14.0508 7.49943 14.2097 7.49943 14.3755V15.0005H7.86566L15.9903 6.87582ZM3.78959 13.3443L3.6571 13.4768L1.74718 18.2528L6.52322 16.3429L6.65572 16.2104C6.5365 16.1659 6.43372 16.086 6.36112 15.9814C6.28853 15.8769 6.24958 15.7527 6.24948 15.6254V15.0005H5.62451C5.45876 15.0005 5.29979 14.9346 5.18259 14.8174C5.06538 14.7002 4.99954 14.5412 4.99954 14.3755V13.7505H4.37457C4.2473 13.7504 4.12309 13.7115 4.01855 13.6389C3.91402 13.5663 3.83414 13.4635 3.78959 13.3443Z" fill="white"> </svg>';
        $tabela .= '</a> </td> </tr>';
    }
    return $tabela;  // Retorna a string HTML da tabela preenchida
}

function addDB():void
{
    include 'include/conn.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add'])) {
        extract($_POST);
        session_start();
        $sql = "INSERT INTO projetos (email, nome_projeto, descricao_projeto, status)
        VALUES ('{$_SESSION['email']}', '$Nome', '$Desc', 'Em Análise')";
        mysqli_query($conn, $sql);
        $redi = 'areaUsuario.php';
        header('location: ' . $redi);
        exit;
    }
}