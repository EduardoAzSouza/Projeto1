<?php

    include('admautenticacao.php');
    include('../conexao.php');

	$nome = mysqli_real_escape_string($conexao, $_POST["Nome"]);
    $CPF = mysqli_real_escape_string($conexao,$_POST["CPF"]);
    $CNH = mysqli_real_escape_string($conexao,$_POST["CNH"]);
    $endereco = mysqli_real_escape_string($conexao,$_POST["Endereco"]);
    $telefone = mysqli_real_escape_string($conexao,$_POST["Telefone"]);
    $carro = mysqli_real_escape_string($conexao,$_POST["Carro"]);
    $empresa = mysqli_real_escape_string($conexao,$_POST["Empresa"]);
    $senha = mysqli_real_escape_string($conexao,$_POST["Senha"]);

    $senha = md5($senha);

	$test = mysqli_query($conexao,"INSERT INTO usuario(nome, cpf, cnh, endereco, telefone, carro, empresa_id, senha) VALUES ('$nome', '$CPF', '$CNH', '$endereco', '$telefone', '$carro', '$empresa', '$senha')");

	mysqli_close($conexao);

	header("Location: admpainel.php");
?>