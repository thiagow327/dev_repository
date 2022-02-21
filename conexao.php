<?php
    //CONEXAO AO BANCO DE DADOS
    $hostname = 'localhost';
    $usuarios = 'root';
    $senha = '';
    $db = 'bancodedados';

    $conn = new mysqli($hostname, $usuarios, $senha, $db);
?>