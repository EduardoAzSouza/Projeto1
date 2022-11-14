<?php
include('../conexao.php');

$id = $_GET["id"];
settype($id,"integer");
mysqli_query($conexao,"delete from usuario where id_user = $id");
mysqli_close($conexao);
header("Location: admpainel.php");
?>