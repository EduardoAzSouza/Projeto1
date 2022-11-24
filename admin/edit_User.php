<?php
	include('admautenticacao.php');
	include('../conexao.php');
	$id = $_GET["id"];
	settype($id,"integer");
	$resultado = mysqli_query($conexao,"select * from usuario where id_user = $id");
	$dados = mysqli_fetch_array($resultado);

?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Editar Usuario</title>
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
		<form id="form" name="form" method="POST" action="save_edit.php">
			<input type="hidden" name="id" id="id" value="<?php echo $id;?>"/>
			<table class="tabela">
				<tr>
					<th colspan=2>Editar Usuario</th>
				</tr>
				<tr>
					<td>Nome</td>
					<td><input name="Nome" type="text" id="nome" autocomplete="off"
					value="<?php echo $dados["nome"];?>"/></td>
				</tr>
				<tr>
					<td>CPF</td>
					<td><input name="CPF" type="text" id="cpf" autocomplete="off"
					value="<?php echo $dados["cpf"];?>"/></td>
				</tr>
				<tr>
					<td>CNH</td>
					<td><input name="CNH" type="text" id="cnh" autocomplete="off"
					value="<?php echo $dados["cnh"];?>"/></td>
				</tr>
				<tr>
					<td>Endereço</td>
					<td><input name="Endereco" type="text" id="endereco" autocomplete="off"
					value="<?php echo $dados["endereco"];?>"/></td>
				</tr>
				<tr>
					<td>Telefone</td>
					<td><input name="Telefone" type="text" id="telefone" autocomplete="off"
					value="<?php echo $dados["telefone"];?>"/></td>
				</tr>
				<tr>
					<td>Carro</td>
					<td><input name="Carro" type="text" id="carro" autocomplete="off"
					value="<?php echo $dados["carro"];?>"/></td>
				</tr>
				<tr>
					<td>ID Empresa</td>
					<td><input name="Empresa" type="text" id="empresa" autocomplete="off"
					value="<?php echo $dados["empresa_id"];?>"/></td>
				</tr>
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
	<footer>
		©CRUD by Eduardo Souza.
	</footer>
</body>
</html>
	
	