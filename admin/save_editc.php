<?php
    $id = $_POST["id"];
    $nome = $_POST["Nome"];
    $Nome_Fant = $_POST["nome_fant"];
    $CNPJ = $_POST["cnpj"];
    $endereco = $_POST["Endereco"];
    $telefone = $_POST["Telefone"];
    $responsavel = $_POST["Responsavel"];

    settype($id,"integer");
    include('admautenticacao.php');
	include('../conexao.php');

    mysqli_query($conexao,"UPDATE empresa SET nome='$nome',nome_fant='$Nome_Fant',cnpj='$CNPJ',endereco='$endereco',telefone='$telefone',responsavel='$responsavel' WHERE id_emp = $id");

    mysqli_close($conexao);

    header("Location: admpainele.php");
?>