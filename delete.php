<?php

if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['nome_projeto'])){
    include_once 'include/conn.php';
    $sql = "delete from projetos where nome_projeto = '{$_GET['nome_projeto']}';";
    mysqli_query($conn, $sql);
    $redi = 'areaUsuario.php';
    header('location:'.$redi);
    exit;
}