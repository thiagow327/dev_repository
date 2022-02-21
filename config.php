<?php

    //CONEXAO AO BANCO DE DADOS
    $hostname = 'localhost';
    $usuarios = 'root';
    $senha = '';
    $db = 'bancodedados';
    $msg = $_POST['mensagem'];

    $conn = new mysqli($hostname, $usuarios, $senha, $db);

    //INSERIR DADOS NO BANCO
    $sql = "INSERT INTO tabela (criadoEm, mensagem) VALUES (NOW(), '$msg')";
    $sql = mysqli_query($conn, $sql);

    if (mysqli_insert_id($conn)) {
        header("Location: index.php");
    }else {
        header("Location: index.php");
    }
?>

