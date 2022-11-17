<?php
include('../conexao.php');

$id = $_GET["id"];
settype($id,"integer");
mysqli_query($conexao,"delete from empresa where id_emp = $id");
mysqli_close($conexao);
header("Location: admpainele.php");
?>