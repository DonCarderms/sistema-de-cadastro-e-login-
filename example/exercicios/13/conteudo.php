<?php
 session_start(); 

$km = intval($_POST['km']);
$litros = intval($_POST['litros']);


// echo $km . $litros;

if ($_POST && !empty( $_POST['km']) && !empty( $_POST['litros']) && $km > 0 && $litros > 0) {
   
    echo "0 consumo médio de combustível é => " .  $consumo_medio = $km / $litros . " litros por kilometros percorrida";
} else {
   $msg = '<P style="background:beige;text-align:center;width: 200px;margin: 0 auto;font-size: 20px;padding: 5px 20px;color: red;">informe um valor valido</P>';
   $_SESSION['msg'] = $msg;
   header("Location: ./");
}
