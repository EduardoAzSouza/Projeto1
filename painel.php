<?php
include('autenticacao.php');
include('conexao.php');
$resultado = mysqli_query($conexao, "select usuario.*, empresa.nome as empresa from usuario inner join empresa on usuario.empresa_id = empresa.id_emp order by id_user");
?>
<h2>Olá, <?php echo $_SESSION['usuario'];?></h2>
<h2><a href="sair.php">Sair</a></h2>

<!DOCTYPE html>
<head>
	<meta charset="utf-8"/>
	<title>Listagem de usuário</title>
</head>
<body>
	<?php if(mysqli_num_rows($resultado) < 1){ exit; } ?>
	<table width="500" border="1" align="center">
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
            
			<td><a href=\"editar.php?id=$id\">[Editar]</a>
			| <a href=\"excluir.php?id=$id\">[Excluir]</a></td>
		<tr>\n";
	}
	?>
	</table>
</body>
</html>
