<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 12</title>
</head>
<body>
    <main>
        <form action="conteudo.php" method="post">
            <div>
                <label for="">informe a distância total (em km) percorrida pelo automóvel </label>
                <input type="number" name="km" id="km" >
            </div>
            <div>
                <label for="">informe a quantidade de combustível (em litros) consumida para percorrê-la </label>
                <input type="number" name="litros" id="litros" >
            </div>
            <div>
                <label for=""></label>
                <input type="submit" name="calcular" id="calcular" value="calcular" >
            </div>
            <div>
                <?php
                    if (isset($_SESSION['msg'])) {
                       echo $_SESSION['msg'];
                       unset($_SESSION['msg']);
                    }

                ?>
            </div>
        </form>
    </main>
</body>
</html>