<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Adicionar itens</title>
  
</head>
<body>
    <section > 
   
        <div>
            <h1>Adicionar texto</h1>
        <form action="recebetexto.php" method="Post">
            <label for="nome">Titulo do texto</label> <br>
            <input type="text" name="nome" placeholder="Revista do ben 10">
            <br> <br>
            <label for="dscitem">Escreva o texto</label> <br>
     
            <textarea >Ex; a revista em quadrinhos é sobre o ben 10 e as aventuras do peixonauta</textarea>
            <br> <br>
          
            <input type="submit" name="enviar" >
        </form>
        <a id="voltar" href="paineladm.php">Voltar</a>
        </div>
    </section>
    




</body>
</html>