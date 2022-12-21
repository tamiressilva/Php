<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Painel do adm</title>
</head>
<body>
    <div class="menu">
    
    <img src="img/perfil.png" alt="nome tavaerna com um icone de livro"  height="70" widht="70" > 


		<a class="btn-menu" href="index.php">Voltar para home</a>
		<a class="btn-menu" href="login.php">Sair</a>
      
    </div>


<div >
<table>
  <tr>
    <th>Nome</th>
    <th>Data de empréstimo</th>
    <th>Gênero</th>
    <th>Editar</th>
    <th>Excluir</th>
  
  </tr>

<?php
include "include/autentica.php";
  include "include/conecta.php";
$sql = "SELECT id, nome, dtnasc, filme FROM adm";
$res = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($res)) {

  echo
  "<tr>
  
  <td>". $row['nome']  ."</td>
  <td>".$row['dtnasc']  ."</td>
  <td>".$row['filme']  ."</td>
  <td><a href='meusdados.php?id=". $row['id'] ."'>Editar</a></td>
  <td><a href='excluir.php?id=". $row['id'] ."'>Excluir</a></td>

  </tr>";
  
}





  ?>
</table>


</div>
    




<footer>Desenvolvido by @ Tamires Santos</footer>

</body>
</html>