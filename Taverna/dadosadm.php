<?php 
include "include/autentica.php";
include "include/conecta.php";

$id = $_POST ['id'];
$nome = $_POST ['nome'];
$dtnasc = $_POST ['dtnasc'];
$filme = $_POST ['filme'];
$email = $_POST ['email'];
$senha= $_POST ['senha'];


if (empty($id)){
$sql = "INSERT INTO adm ( nome, dtnasc, filme, email, senha) 

VALUES ('$nome', '$dtnasc', '$filme',  '$email', '$senha')";

echo $sql;

$res = mysqli_query ($conn, $sql);


if($res){
    header("Location: paineladm.php");
} 


}
else {
    $sql = "UPDATE adm SET 
    nome = '$nome',
    dtnasc = '$dtnasc',
    filme = '$filme',
    email = '$email',
    senha = '$senha'
   WHERE id = $id  ";

   
$res = mysqli_query ($conn, $sql);


if($res){
    header("Location: paineladm.php");
} 
else {
    echo "dados nao";
}
}


/*
echo "ESSES SÃO OS SEUS DADOS <br>"; 
echo "Nome: " . $_POST["nome"] . "<br>";
echo "CPF: " . $_POST["cpf"] . "<br>";
echo "Número de telefone: " . $_POST["telefone"] . "<br>";
echo "Data de nascimento :" . $_POST["dtnasc"] . "<br>";
echo "Gênero: " . $_POST["genero"] . "<br>";
echo "Email: " . $_POST["email"] . "<br>";
echo "Senha: " . $_POST["senha"] . "<br>"; */


?>