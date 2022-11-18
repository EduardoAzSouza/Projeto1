<?php
    $id = $_POST["id"];
    $nome = $_POST["Nome"];
    $CPF = $_POST["CPF"];
    $CNH = $_POST["CNH"];
    $endereco = $_POST["Endereco"];
    $telefone = $_POST["Telefone"];
    $carro = $_POST["Carro"];
    $empresa = $_POST["Empresa"];

    settype($id,"integer");
    include('admautenticacao.php');
	include('../conexao.php');

    mysqli_query($conexao,"UPDATE usuario SET nome='$nome',cpf='$CPF',cnh='$CNH',endereco='$endereco',telefone='$telefone',carro='$carro',empresa_id='$empresa' WHERE id_user = $id");

    mysqli_close($conexao);

    header("Location: admpainel.php");
?>