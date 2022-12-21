<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
  
</head>
<body>

    <section > 
   
        <div>
            <?php
            if(isset($_GET['erro'])){
                echo' <p style="text-align:center;color:red"> Usuário ou senha incorretos</P>';
            }
            if(isset($_GET['autentica'])){
                echo' <p style="text-align:center;color:red"> você não tem permissão, para editar este usuário</P>';
            }
            
            ?>
            <h1>Faça seu login</h1>
        <form action="recebelogin.php" method="Post">
            <label for="email">Digite seu email</label> <br>
            <input type="email" name="email" placeholder="maria@gmail.com">
            <br> <br>
            <label for="senha">Digite sua senha</label> <br>
            <input type="password" name="senha" placeholder="12345678"> 
            <br> <br>
            <input type="submit" name="enviar" >
        </form>
        <p>Não tem uma conta? <a href="cadastro.php">Criar conta</a></p>
        </div>
    </section>
    




</body>
</html>