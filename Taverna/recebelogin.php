<?php

include "include/conecta.php";
include "include/autentica.php";

$email = $_POST ['email'];
$senha= $_POST ['senha'];
$sql = "SELECT * FROM adm WHERE email ='$email' and senha= '$senha'";
$res = mysqli_query($conn, $sql);

$qtdRegistro= mysqli_num_rows($res);

if($qtdRegistro > 0){

    session_start();
    $row = mysqli_fetch_assoc($res);
    $_SESSION['id']= $row['id'];
    $_SESSION['nome']= $row['nome'];
    
    header("Location: paineladm.php");
}
else{
    header("Location: login.php?erro=1");
}

?>












