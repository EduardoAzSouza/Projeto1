<?php
    include('admautenticacao.php');
	include('../conexao.php');

    $nome = mysqli_real_escape_string($conexao, $_POST["Nome"]);
    $Nome_Fant = mysqli_real_escape_string($conexao, $_POST["nome_fant"]);
    $CNPJ = mysqli_real_escape_string($conexao, $_POST["cnpj"]);
    $endereco = mysqli_real_escape_string($conexao, $_POST["Endereco"]);
    $telefone = mysqli_real_escape_string($conexao, $_POST["Telefone"]);
    $responsavel = mysqli_real_escape_string($conexao, $_POST["Responsavel"]);

	

	mysqli_query($conexao,"INSERT INTO empresa (nome, nome_fant, cnpj, endereco, telefone, responsavel) VALUES('$nome', '$Nome_Fant', '$CNPJ', '$endereco', '$telefone', '$responsavel')");

	mysqli_close($conexao);
	
    header("Location: admpainele.php");
?>