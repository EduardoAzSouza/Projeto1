<?php
include('autenticacao.php');
include('conexao.php');
$resultado = mysqli_query($conexao, "select usuario.*, empresa.nome as empresa from usuario inner join empresa on usuario.empresa_id = empresa.id_emp order by nome");
?>

<!DOCTYPE html>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Painel do Usuario</title>
	<link rel="stylesheet" href="estilos/main.css">
	
</head>
<body>
	<header>
		<h2 class="titulo">Olá, <?php echo $_SESSION['usuario'];?></h2>
		<h2><a href="sair.php">Sair</a></h2>
	</header>
	<div id="Busca">
  		<input type="text" id="cxBusca" placeholder="Buscar..."/>
  		<img src="search3.png" id="btnBusca" alt="Buscar"/>
	</div>
	<main>
		<?php if(mysqli_num_rows($resultado) < 1){ exit; } ?>
		<table class="tabela">
			<thead>
				<tr>
					<th>Nome</th>
					<th>CPF</th>
					<th>CNH</th>
					<th>Endereço</th>
					<th>Telefone</th>
					<th>Carro</th>
					<th>Empresa</th>
				</tr>
			</thead>
		<?php while($linha = mysqli_fetch_array($resultado)){
			$nome = $linha["nome"];
			$CPF = $linha["cpf"];
			$CNH = $linha["cnh"];
			$endereco = $linha["endereco"];
			$telefone = $linha["telefone"];
			$carro = $linha["carro"];
			$empresa = $linha["empresa"];
			
			echo"
			<tr>
				<td>$nome</td>
				<td>$CPF</td>
				<td>$CNH</td>
				<td>$endereco</td>
				<td>$telefone</td>
				<td>$carro</td>
				<td>$empresa</td>
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
