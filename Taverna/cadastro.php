<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Cadastro</title>
</head>
<body>
    <div > 
        <h1>Cadastre-se para poder Emprestar</h1>
		<form action="dadosadm.php" method="post">
		    <label for="nome">Nome completo</label> <br>
			 <input type="text" name="nome" placeholder="Digite seu nome" /><br/><br/>
			<label for="dtnasc">Data de empréstimo</label> <br>
		    <input type="date" name="dtnasc" /><br/><br/>
    
            <label for="filme">Gênero do filme</label> <br>
            <select name="filme" >
                <option selected value disabled>Selecionar</option>
				<option  name="filme" >Ação </option>
				<option name="filme">Aventura </option>
                <option name="filme"> Comédia</option>
                <option name="filme">Terror</option>
                <option name="filme">Romance</option>
			</select> <br> <br>
            
            <label for="email">Digite seu email</label> <br>
            <input type="email" name="email" placeholder="maria@gmail.com"><br> <br>

            <label for="senha">Crie uma senha</label> <br>
            <input type="password" name="senha" placeholder="12345678"> 
            <br> <br>
            

			<input type="submit" name="Enviar">
            
		</form> 
		<a id="voltar" href="index.php">Voltar</a>
        <p>Já tem uma conta? <a href="login.php">Fazer login</a></p>
    </div>
    




</body>
</html>