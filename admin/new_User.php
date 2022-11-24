<?php
	include('admautenticacao.php');
	include('../conexao.php');
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cadastro de Usuario</title>
	<link rel="stylesheet" href="../estilos/cadastro.css">
</head>
<body>
	<header>
			<div class="cabeca">
				<h2 class="titulo">Olá, <?php echo $_SESSION['usuario'];?></h2>
			</div>
			<h2><a class="sair" href="admpainel.php">Sair</a></h2>
	</header>
	<main>
		<form id="form" name="form" method="POST" action="save_user.php">
			<table class="tabela">
				<tr>
					<th colspan=2>Criar novo usuario</th>
				</tr>
				<tr>
					<td>Nome</td>
					<td><input name="Nome" type="text" id="nome" autocomplete="off"/>
				</td>
				</tr>
				<tr>
					<td>CPF</td>
					<td><input name="CPF" type="text" id="cpf" autocomplete="off"/>
				</td>
				</tr>
				<tr>
					<td>CNH</td>
					<td><input name="CNH" type="text" id="cnh" autocomplete="off" />
				</td>
				</tr>
				<tr>
					<td>Endereço</td>
					<td><input name="Endereco" type="text" id="endereco" autocomplete="off"/>
				</td>
				</tr>
				<tr>
					<td>Telefone</td>
					<td><input name="Telefone" type="text" id="telefone" autocomplete="off"/>
				</td>
				</tr>
				<tr>
					<td>Carro</td>
					<td><input name="Carro" type="text" id="carro" autocomplete="off"/>
				</td>
				</tr>
				<tr>
					<td>ID Empresa</td>
					<td><input name="Empresa" type="text" id="empresa" autocomplete="off"/>
				</td>
				</tr>
				<tr>
					<td>Senha</td>
					<td><input name="Senha" type="text" id="senha" autocomplete="off"/></td>
				</tr>
				<tr>
				<tr>
					<td><a class="botao" href="admpainel.php">Voltar</a></td>
					<td><input type="submit" value="Salvar"
					style="cursor:pointer"/></td>
				</tr>
			</table>
</form>
	</main>
	<footer>
		©CRUD by Eduardo Souza.
	</footer>
</body>
</html>
	
	