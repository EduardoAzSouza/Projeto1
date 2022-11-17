<?php
include('autenticacao.php');
include('conexao.php');
$resultemp = mysqli_query($conexao, "select * from empresa order by nome");
?>

<!DOCTYPE html>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Painel do Usuario</title>
	<link rel="stylesheet" href="estilos/main.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
	<header>
		<div class="cabeca">
			<h2 class="titulo">Olá, <?php echo $_SESSION['usuario'];?></h2>
		</div>
		<h2><a class="sair" href="sair.php">Sair</a></h2>
	</header>
	<div class="visao">
		<h2><a class="view" href="painel.php">Usuarios</a></h2>
		<h2><a class="view" href="#">Empresas</a></h2>
	</div>
	<main>
		<div>
		</div>
		<?php if(mysqli_num_rows($resultemp) < 1){ exit; } ?>
		<table class="tabela">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Nome Fantasia</th>
					<th>CNPJ</th>
					<th>Endereço</th>
					<th>Telefone</th>
					<th>Responsavel</th>
				</tr>
			</thead>
		<?php while($linha = mysqli_fetch_array($resultemp)){
			$nome = $linha["nome"];
			$Nome_Fant = $linha["nome_fant"];
			$CNPJ = $linha["cnpj"];
			$endereco = $linha["endereco"];
			$telefone = $linha["telefone"];
			$responsavel = $linha["responsavel"];
			
			echo"
			<tr>
				<td>$nome</td>
				<td>$Nome_Fant</td>
				<td>$CNPJ</td>
				<td>$endereco</td>
				<td>$telefone</td>
				<td>$responsavel</td>
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
