<?php
    include 'conecta.php';
    date_default_timezone_set('America/Sao_Paulo');
    

    if(isset($_POST['texto'])){
        $date = date('H:i \- d \d\e M \d\e Y');
        $publica = "INSERT INTO tweets('date', 'mensagem') VALUES('{$date}', '{$_POST['texto']}')";
        $test_publica = mysqli_query($conexao, $publica);
        if(!$test_publica){
            echo "<script type='javascript'>alert('Erro ao postar mensagem');</script>";
        }
        header('location:/');
    }

?>