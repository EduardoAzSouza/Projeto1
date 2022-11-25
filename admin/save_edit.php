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

    $id = $_POST["id"];
    settype($id,"integer");

    if ($senha != null){
        $senha = md5($senha);
        mysqli_query($conexao,"UPDATE usuario SET nome='$nome',cpf='$CPF',cnh='$CNH',endereco='$endereco',telefone='$telefone',carro='$carro',empresa_id='$empresa',senha='$senha' WHERE id_user = $id"); 
    }else{
        mysqli_query($conexao,"UPDATE usuario SET nome='$nome',cpf='$CPF',cnh='$CNH',endereco='$endereco',telefone='$telefone',carro='$carro',empresa_id='$empresa' WHERE id_user = $id");
    }
    
    mysqli_close($conexao);

    header("Location: admpainel.php");
?>