<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="./assets/css/pages/login.css">
    <link rel="stylesheet" href="./assets/css/components/alert.css">
</head>

<body>
    <section class="container">
        <div class="content">
            <h1>Aplicativo Fitness Academia</h1>
            <hr>
            <h3>Acesse aqui</h3>
            <?php if (!empty($_GET['email'])) : ?>
                <div class="alert">
                    <p class="text">E-mail e/ou senha incorretos!</p>
                </div>
            <?php endif; ?>
            <form action="./request-login.php" method="POST">
                <label for="email">E-mail</label>
                <input type="email" name="email" class="input" id="email" required>
                <label for="senha">Senha</label>
                <input type="password" name="senha" class="input" id="senha" required>

                <button>Acessar</button>
            </form>
            <hr>
            <a href="./cadastro.php" class="cadastrar">Cadastre-se</a>
        </div>
    </section>
</body>

</html>