<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="./assets/css/pages/login.css">
    <link rel="stylesheet" href="./assets/css/components/alert.css">
</head>

<body>
    <section class="container">
        <div class="content">
            <h1>Aplicativo Fitness Academia</h1>
            <hr>
            <h3>Cadastre-se</h3>
            <?php if (!empty($_GET['email'])) : ?>
                <div class="alert">
                    <p class="text">E-mail já esta registrado!</p>
                </div>
            <?php endif; ?>
            <form action="./request-cadastro.php" method="POST">
                <label for="nome">Nome</label>
                <input type="text" name="nome" value="<?= (!empty($_GET['nome'])) ? $_GET['nome'] : ""; ?>" class="input" id="nome" required>
                <label for="sobrenome">Sobrenome</label>
                <input type="text" name="sobrenome" value="<?= (!empty($_GET['sobrenome'])) ? $_GET['sobrenome'] : ""; ?>" class="input" id="sobrenome" required>
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" value="<?= (!empty($_GET['telefone'])) ? $_GET['telefone'] : ""; ?>" class="input" id="telefone" required>
                <label for="email">E-mail</label>
                <input type="email" name="email" value="<?= (!empty($_GET['email'])) ? $_GET['email'] : ""; ?>" class="input" id="email" required>
                <label for="senha">Senha</label>
                <input type="password" name="senha" class="input" id="senha" required>

                <button>Cadastrar</button>
            </form>
            <hr>
            <a href="./login.php" class="cadastrar">Login</a>
        </div>
    </section>
</body>

</html>