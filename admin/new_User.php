<?php
	include('admautenticacao.php');
	include('../conexao.php');

	$result = mysqli_query($conexao, "select distinct id_emp, empresa.nome from empresa order by nome");
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
					<td><input name="Nome" type="text" id="nome" autocomplete="off" required minlength="8" maxlength="40"/>
					</td>
				</tr>
				<tr>
					<td>CPF</td>
					<td><input name="CPF" type="text" id="cpf" autocomplete="off" required minlength="14" maxlength="14"/>
					<script src="./cpf.js"></script>
					</td>
				</tr>
				<tr>
					<td>CNH</td>
					<td><input name="CNH" type="text" id="cnh" autocomplete="off" maxlength="14"/>
					</td>
				</tr>
				<tr>
					<td>Endereço</td>
					<td><input name="Endereco" type="text" id="endereco" autocomplete="off" required minlength="10" maxlength="100"/>
					</td>
				</tr>
				<tr>
					<td>Telefone</td>
					<td><input name="Telefone" type="text" id="telefone" autocomplete="off" required minlength="9" maxlength="16"/>
				</td>
				</tr>
				<tr>
					<td>Carro</td>
					<td><input name="Carro" type="text" id="carro" autocomplete="off" maxlength="30"/>
					</td>
				</tr>
				<tr>
					<td>ID Empresa</td>
					<td><select name="Empresa" id="empresa" required>
					<?php 
						echo "<option value = '' >Selecione uma Empresa</option>";
						while($linha = mysqli_fetch_array($result)){
								echo "<option value='{$linha['id_emp']}'>{$linha['nome']}</option>";
							}
						?>
					</select>
					</td>
				</tr>
				<tr>
					<td>Senha</td>
					<td><input name="Senha" type="password" id="senha" autocomplete="off" required minlength="8" maxlength="20"/></td>
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
	
	