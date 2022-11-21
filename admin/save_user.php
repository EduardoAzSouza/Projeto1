<?php
	$nome = $_POST["Nome"];
    $CPF = $_POST["CPF"];
    $CNH = $_POST["CNH"];
    $endereco = $_POST["Endereco"];
    $telefone = $_POST["Telefone"];
    $carro = $_POST["Carro"];
    $empresa = $_POST["Empresa"];
    $senha = $_POST["Senha"];
	
	include('admautenticacao.php');
	include('../conexao.php');

	mysqli_query($conexao,"INSERT INTO usuario(nome, cpf, cnh, endereco, telefone, carro, empresa_id, senha) VALUES ('$nome', '$CPF', '$CNH', '$endereco', '$telefone', '$carro', '$empresa', '$senha')");

	mysqli_close($conexao);

	header("Location: admpainel.php");
?>