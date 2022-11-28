<?php
include('admautenticacao.php');
include('../conexao.php');
$pesquisa = mysqli_real_escape_string($conexao, $_POST['busca'] ?? '');
$resultemp = mysqli_query($conexao, "select * from empresa Where nome LIKE '%$pesquisa%' order by id_emp");
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Painel do Administrador</title>
	<link rel="stylesheet" href="../estilos/main.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<header>
		<div class="cabeca">
			<h2 class="titulo">Olá, <?php echo $_SESSION['usuario'];?></h2>
		</div>
		<h2><a class="sair" href="admlogout.php">Sair</a></h2>
	</header>
	<div class="visao">
		<h2><a class="view" href="admpainel.php">Ver Usuarios</a></h2>
		<h2><a class="view" href="new_com.php">Nova Empresa</a></h2>
		<form class="serc_bar" action="admpainele.php" method="POST">
              <input class="pesquisa" type="search" placeholder="Nome" aria-label="Search" autocomplete="off" name="busca" autofocus>
              <button class="buscar" type="submit"><i class="material-icons">search</i></button>
        </form>
	</div>
	<main>
		<div>
		</div>
		<?php if(mysqli_num_rows($resultemp) < 1){ exit; } ?>
		<table class="tabela">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>Nome Fantasia</th>
					<th>CNPJ</th>
					<th>Endereço</th>
					<th>Telefone</th>
					<th>Responsavel</th>
					<th>Editar/Excluir</th>
				</tr>
			</thead>
		<?php while($linha = mysqli_fetch_array($resultemp)){
			$id = $linha["id_emp"];
			$nome = $linha["nome"];
			$Nome_Fant = $linha["nome_fant"];
			$CNPJ = $linha["cnpj"];
			$endereco = $linha["endereco"];
			$telefone = $linha["telefone"];
			$responsavel = $linha["responsavel"];
			
			echo"
			<tr>
				<td>$id</td>
				<td>$nome</td>
				<td>$Nome_Fant</td>
				<td>$CNPJ</td>
				<td>$endereco</td>
				<td>$telefone</td>
				<td>$responsavel</td>
				<td class='tb'><a class='edit' href=\"edit_com.php?id=$id\">Editar</a>
				<a class='delete' href=\"excluirEmp.php?id=$id\">Excluir</a></td>
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