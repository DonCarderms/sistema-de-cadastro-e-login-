<?php

   $servidor = "localhost";
   $usuario = "root";
   $senha = "";
   $dbname ="cadastro";

  $connection = mysqli_connect($servidor, $usuario, $senha, $dbname);
    if (!$connection){
        die("Houve um erro: " .mysqli_connect_error());
    }
?>