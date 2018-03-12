<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AlugarToo</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/js/bootstrap.min.js" rel="stylesheet">
    <link href="bootstrap/css/signin.css" rel="stylesheet">
</head>
<body>
<div id="navbar">
    <?php include 'navbar.php'; ?>
</div>
<div class="container">
    <div class="form-signin" style="background: #42dea4;">
        <h2>Cadastrar Usuário</h2>
        <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        <form method="POST" action="">
            <!--<label>Nome</label>-->
            <input type="text" name="nome" placeholder="Digite o nome e o sobrenome" class="form-control"><br>

            <!--<label>E-mail</label>-->
            <input type="text" name="email" placeholder="Digite o seu e-mail" class="form-control"><br>

            <!--<label>Senha</label>-->
            <input type="password" name="senha" placeholder="Digite a senha" class="form-control"><br>

            <!--<label>Senha</label>-->
            <input type="password" name="senha" placeholder="Confirme a senha" class="form-control"><br>

            <input type="button" name="btnCadUsuario" value="Cadastrar" class="btn btn-success"><br><br>

            <div class="row text-center" style="margin-top: 20px;">
                Lembrou? <a href="login.php">Clique aqui</a> para logar
            </div>
        </form>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<div id="rodape">
    <?php include "rodape.php"; ?>
</div>
</body>
</html>