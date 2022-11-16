<?php
include('admautenticacao.php');
include('../conexao.php');
$resultado = mysqli_query($conexao, "select usuario.*, empresa.nome as empresa from usuario inner join empresa on usuario.empresa_id = empresa.id_emp order by id_user");
?>
<h2>Olá, Administrado <?php echo $_SESSION['usuario'];?></h2>
<h2><a href="admlogout.php">Sair</a></h2>
<h2><a href="#">Novo Usuario</a></h2>
<h2><a href="#">Novo Administrador</a></h2>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../estilos/style.css">
</head>
<body>
	<?php if(mysqli_num_rows($resultado) < 1){ exit; } ?>
	<table width="500" border="0" align="center" style="background-color:white;">
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
