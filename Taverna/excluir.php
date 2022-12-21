<?php
include "include/conecta.php";
$id = $_GET['id'];
$sql = "DELETE FROM adm WHERE id = $id";
$res = mysqli_query($conn, $sql);
header("Location: paineladm.php")




?>
