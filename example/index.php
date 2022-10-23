
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>meu primeiro servidor</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main class="principal">
        <div class="contenu">
            <div class="align_center">
                 <img class="m-50" width="100" src="https://upload.wikimedia.org/wikipedia/commons/c/c7/Commons-logo-square.png" alt="logo">
            </div>
           
            <form action="cadastro.php" method="POST" class="login" id="login" >
                <input type="email" name="email" placeholder="Email" required class="input-style width-100" ><br>

                <input type="password" name="senha"  placeholder="Senha" class="input-style width-100" ><br>
                <div class="align_center">
                    <button type="button" class="button-style">Entrar</button>         
                </div>
                <div class="button-cadastrar align_center">
                    <button onclick="showRegister()" type="button" class="button-style" id="button-cadastrar" >cadastrar-se</button>
                </div>
                
            </form>

            <form style="display:none;"  action="cadastro.php" method="POST" class="cadastrar" id="cadastrar" >
                <input type="text" name="nome" placeholder="Nome"  class="input-style width-100"><br>

                <input type="text" name="sobrenome" placeholder="Sobrenome"  class="input-style width-100"><br>
       
                <input type="email" name="email" placeholder="Email"  class="input-style width-100" required ><br>
  
                <input type="password" name="senha" placeholder="Senha"  class="input-style width-100"><br>

                <div class="align_center">
                   <button type="submit" class="button-style">cadastrar</button> 
                </div> 
                <div class="align_center">
                    <button onclick="showLogin()" type="button" class="button-style">Fazer login</button>         
                </div>            
            </form>
        </div>
       
    </main>

    <script>
        // mostrar o formulario de cadastro
       let showRegister = () => {
            document.getElementById("login") .style.display = "none";
            document.getElementById("cadastrar") .style.display = "block";
        }
        // mostrar o formulario de login
        let showLogin = () => { 
            document.getElementById("cadastrar") .style.display = "none";
            document.getElementById("login") .style.display = "block";         
        }
    </script>
</body>
</html>