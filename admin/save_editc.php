<?php
    include('admautenticacao.php');
	include('../conexao.php');

    $nome = mysqli_real_escape_string($conexao, $_POST["Nome"]);
    $Nome_Fant = mysqli_real_escape_string($conexao, $_POST["nome_fant"]);
    $CNPJ = mysqli_real_escape_string($conexao, $_POST["cnpj"]);
    $endereco = mysqli_real_escape_string($conexao, $_POST["Endereco"]);
    $telefone = mysqli_real_escape_string($conexao, $_POST["Telefone"]);
    $responsavel = mysqli_real_escape_string($conexao, $_POST["Responsavel"]);

    $id = $_POST["id"];
    settype($id,"integer");
    

    mysqli_query($conexao,"UPDATE empresa SET nome='$nome',nome_fant='$Nome_Fant',cnpj='$CNPJ',endereco='$endereco',telefone='$telefone',responsavel='$responsavel' WHERE id_emp = $id");

    mysqli_close($conexao);

    header("Location: admpainele.php");
?>