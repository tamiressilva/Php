<?php
include "include/autentica.php";
include "include/conecta.php";

$id = "" ;
$nome = "";
$dtnasc = "" ;
$filme = "";
$email = "";
$senha=  "";
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT * FROM adm WHERE id = $id";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);




$nome = $row['nome'];
$dtnasc = $row['dtnasc'];
$filme =   $row['filme'];
$email =  $row ['email'];
$senha=  $row ['senha'];
}















?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Meus dados</title>
</head>
<body>
    <div > 
        <h1>Meus dados</h1>
		<form action="dadosadm.php" method="post">

        <input type="hidden" name="id" value = "<?php echo $id;?>" />

		    <label for="nome">Nome completo</label> <br>
             <input type="text" name="nome" placeholder="Digite seu nome" value = "<?php echo $nome;?>" /><br/><br/>


			<label for="dtnasc" >Data de nascimento</label> <br>
		    <input type="date" name="dtnasc" value = "<?php echo $dtnasc; ?> "/><br/><br/>
    
			<label for="filme">Gênero do filme</label> <br>
            <select name="filme" value = "<?php echo $filme; ?>" >
                <option selected value disabled>Selecionar</option>
				<option  >Ação </option>
				<option >Aventura </option>
                <option  > Comédia</option>
                <option   >Terror</option>
                <option  >Romance</option>
			</select> <br> <br>
            
            <label for="email">Digite seu email</label> <br>
            <input type="email" name="email" placeholder="maria@gmail.com" value = "<?php echo $email; ?> " /><br> <br> 

            <label for="senha">Crie uma senha</label> <br>
            <input type="password" name="senha" placeholder="12345678" value = "<?php echo $senha; ?> "/>
            <br> <br>
            

			<input type="submit" name="Salvar dados">
            
		</form> 
		<a id="voltar" href="paineladm.php">Cancelar</a>
     
    </div>
    




</body>
</html>