<?php
  session_start();
 include("connection.php");

#Verifica se tem um email para pesquisa
if(isset($_POST['email'])){ 
 
   #Recebe o Email Postado
   $emailPostado = $_POST['email'];
   $senhaPostado = md5($_POST['senha']);

   #Conecta banco de dados 
 
   $sql = mysqli_query($connection, "SELECT * FROM usuario WHERE email = '{$emailPostado}' AND senha  = '{$senhaPostado}' ") or print mysql_error();

   #Se o retorno for maior do que zero, diz que já existe um.
   if(mysqli_num_rows($sql)>0) {
      echo "E-mail já cadastrado"; 
      header("Location: dashboard/dashboard.php");
   }else {
      $msg = '<p style="text-align:center;color:red;background-color:#fcde00;margin: 0px 0px 10px 15px;padding: 10px 0px;"> dados incorretos! </P>';
      $_SESSION['msg'] = $msg;
      header("Location: /");
   }
   
}
 
mysqli_close();
  

?>