<?php
include('admautenticacao.php');
include('../conexao.php');
$resultado = mysqli_query($conexao, "select usuario.*, empresa.nome as empresa from usuario inner join empresa on usuario.empresa_id = empresa.id_emp order by id_user");
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Painel do Administrador</title>
	<link rel="stylesheet" href="../estilos/main.css">
</head>
<body>
	<header>
		<div class="cabeca">
			<h2 class="titulo">Olá, <?php echo $_SESSION['usuario'];?></h2>
		</div>
		<h2><a class="sair" href="admlogout.php">Sair</a></h2>
	</header>
	<div class="visao">
		<h2><a class="view" href="#">Usuarios</a></h2>
		<h2><a class="view" href="admpainele.php">Empresas</a></h2>
		<h2><a class="view" href="new_User.php">Novo Usuario</a></h2>
		<h2><a class="view" href="new_com.php">Nova Empresa</a></h2>
	</div>
	<main>
		<div>
		</div>
		<?php if(mysqli_num_rows($resultado) < 1){ exit; } ?>
		<table class="tabela">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>CPF</th>
					<th>CNH</th>
					<th>Endereço</th>
					<th>Telefone</th>
					<th>Carro</th>
					<th>Empresa</th>
					<th>Editar/Excluir</th>
				</tr>
			</thead>
		<?php while($linha = mysqli_fetch_array($resultado)){
			$id = $linha["id_user"];
			$nome = $linha["nome"];
			$CPF = $linha["cpf"];
			$CNH = $linha["cnh"];
			$endereco = $linha["endereco"];
			$telefone = $linha["telefone"];
			$carro = $linha["carro"];
			$empresa = $linha["empresa"];
			
			echo"
			<tr>
				<td>$id</td>
				<td>$nome</td>
				<td>$CPF</td>
				<td>$CNH</td>
				<td>$endereco</td>
				<td>$telefone</td>
				<td>$carro</td>
				<td>$empresa</td>
				<td class='tb'><a class='edit' href=\"edit_User.php?id=$id\">Editar</a>
				<a class='delete' href=\"excluir.php?id=$id\">Excluir</a></td>
			<tr>\n";
		}
		?>
		</table>

	</main>
	<footer>
		©CRUD by Eduardo Souza.
	</footer>

</body>
</html>