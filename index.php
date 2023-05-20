<?php
require_once __DIR__ . "/header.php";
$listTreinos = $treinosNoticias->getAll();
?>
<link rel="stylesheet" href="./assets/css/pages/home.css">

<section class="home block">
    <div class="content">
        <h1 class="title">Bem vindo ao sistema de treinos</h1>

        <hr class="division">

        <h3 class="sub-title">Tipos de Treinamento</h3>
        
        <div class="cards">
            <?php foreach ($listTreinos as $key => $value) : ?>
                <div class="card">
                    <p class="title"><?= $value['titulo']; ?></p>
                    <a href="./treino.php?noticia=<?= base64_encode($value['id']); ?>">
                        <img width="100%" src="./assets/images/<?= $value['imagem']; ?>" alt="<?= $value['titulo']; ?>">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="modals">
        <div class="chat">
            <i class="fas fa-comments"></i>
            <p class="title">Chat</p>
        </div>
        <!-- chat - dados da table configuracoes -->
        <div class="modal modal-primary">
            <div class="content">
                <i class="fas fa-times close"></i>
                <div class="header">
                    <p class="title">Contatos</p>
                </div>
                <div class="body">
                    <?php $conf = $configuracoes->getAll(); ?>
                    <?php foreach ($conf as $value) : ?>
                        <div class="list">
                            <p class="title"><?= $value['nome'] . " " . $value['sobrenome']; ?></p>
                            <p class="title"><?= $value['telefone']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="contatos">
            <i class="far fa-comment-dots"></i>
            <p class="title">Contatos</p>
        </div>
        <!-- chat - dados da table configuracoes -->
        <div class="modal modal-secondy">
            <div class="content">
                <i class="fas fa-times close"></i>
                <div class="header">
                    <p class="title">Contatos</p>
                </div>
                <div class="body">
                    <?php $instrutores = $instrutor->getAll(); ?>
                    <?php foreach ($instrutores as $value) : ?>
                        <div class="list">
                            <p class="title"><?= $value['nome'] . " " . $value['sobrenome']; ?></p>
                            <p class="title"><?= $value['telefone']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <a href="./logout.php" class="contatos">
            <i class="fas fa-sign-out-alt"></i>
            <p class="title">Sair</p>
        </a>
    </div>
</section>
<script defer src="./assets/js/home.js"></script>
<?php require_once __DIR__ . "/footer.php";  ?>