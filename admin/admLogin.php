<?php
session_start();
include('conexao.php'); //inclui o PHP com os dasdos da conexão

//Verifica se os campos estão vazio
if(empty($_POST['login']) || empty($_POST['senha'])) { 
	header('Location: admLogin.html');
	exit();
}

//previne ataque slinjection
$usuario = mysqli_real_escape_string($conexao, $_POST['login']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

//busca no banco de dados se confere com os dados do formulario, no caso CPF da table com $usuario
//inserido e senha da table é $senha inserida
$query = "select id_user, nome, cpf from usuario where cpf = '{$usuario}' and senha ='{$senha}'";

//executa a query
$result = mysqli_query($conexao, $query);

// resultado se a query é verdadeira ou não, conta o numero de linha encontrada, onde so será 0 ou 1
$row = mysqli_num_rows($result);

// se for 1 será direcionada para proxima pagina senão será direcionada para index novamente
if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header('Location: admPainel.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: admLogin.html');
	exit();
}
