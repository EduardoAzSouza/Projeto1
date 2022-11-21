<?php
    $nome = $_POST["Nome"];
    $Nome_Fant = $_POST["nome_fant"];
    $CNPJ = $_POST["cnpj"];
    $endereco = $_POST["Endereco"];
    $telefone = $_POST["Telefone"];
    $responsavel = $_POST["Responsavel"];

	include('admautenticacao.php');
	include('../conexao.php');

	mysqli_query($conexao,"INSERT INTO empresa (nome, nome_fant, cnpj, endereco, telefone, responsavel) VALUES('$nome', '$Nome_Fant', '$CNPJ', '$endereco', '$telefone', '$responsavel')");

	mysqli_close($conexao);
	
    header("Location: admpainele.php");
?>