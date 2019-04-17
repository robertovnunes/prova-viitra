<?php

    $host = "localhost";
    $bd = "prova";
    $user = "phpmyadmin";
    $password = "123456";

    $conexao = mysqli_connect($host, $user, $password, $bd);
    if(!$conexao){
        echo "Não foi possivel conectar ao banco de dados :(". PHP_EOL;
        echo "Erro #".mysqli_connect_error($conexao);
    }
    $tabela = "CREATE TABLE IF NOT EXISTS tweets('date' varchar(30) NOT NULL, 'mensagem' text(300) NOT NULL)";
    mysqli_query($conexao, $tabela);

?>