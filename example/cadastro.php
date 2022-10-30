<?php

    include("connection.php");

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha =md5($_POST['senha']);

    $sql = "INSERT INTO `usuario` (`nome`, `sobrenome`, `email`, `senha`) VALUES ('$nome', '$sobrenome', '$email', '$senha')";

    if(mysqli_query($connection, $sql)){
        // echo "usuário cadastrado com sucesso";
        header("Location: dashboard/dashboard.php");
    }else{
        header("Location: /");
        echo "Erro" .mysqli_connect_error($connection);
    }

    mysqli_close();
?>