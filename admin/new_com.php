<?php
	include('admautenticacao.php');
	include('../conexao.php');
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cadastro de empresa</title>
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
		<form id="form" name="form" method="POST" action="save_com.php">
			<table class="tabela">
				<tr>
					<th colspan=2>Criar nova empresa</th>
				</tr>
				<tr>
					<td>Nome</td>
					<td><input name="Nome" type="text" id="nome" autocomplete="off"/>
				</td>
				</tr>
				<tr>
					<td>Nome Fantasia</td>
					<td><input name="nome_fant" type="text" id="nome_fant" autocomplete="off"/>
				</td>
				</tr>
				<tr>
					<td>CNPJ</td>
					<td><input name="cnpj" type="text" id="cnpj" autocomplete="off" />
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
				<tr>
					<td>Responsavel</td>
					<td><input name="Responsavel" type="text" id="responsavel" autocomplete="off"/>
				</td>
				</tr>
				<tr>
					<td><a class="botao" href="admpainele.php">Voltar</a></td>
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
	
	