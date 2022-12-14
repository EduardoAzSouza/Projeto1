<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="estilos/style.css">
    <link rel="stylesheet" href="estilos/media-query.css">
</head>
<body>
    <main>
        <section id="login">
            <div id="imagem">
            </div>
            <div id="formulario">
                <h1>Login</h1>
                <p>Seja bem-vindo(a) novamente. faça login para acessar sua conta
                <form action="login.php" method="post" autocomplete="on">
                    <div class="campo">
                        <i class="material-icons">person</i>
                        <input type="text" name="login" id="idlogin" placeholder="Seu CPF" autocomplete="off" required maxlength="14">
                        <label for="idlogin">Login</label>
                        <script src="./main.js"></script>
                    </div>
                    <div class="campo">
                        <i class="material-icons">vpn_key</i>
                        <input type="password" name="senha" id="idsenha" placeholder="Sua senha" autocomplete="current-password" required minlength="8" maxlength="20">
                        <label for="idsenha">Senha</label>
                    </div>
                    <input type="submit" value="Entrar">
                    <a href="#" class="botao">
                        Esqueceu a senha?
                    </a>
                    <a href="admLogin.php" class="admL">
                        Entrar como Administrador
                    </a>     
                </form>
                <br/>
            </div>

        </section>
    </main>  
</body>
</html>