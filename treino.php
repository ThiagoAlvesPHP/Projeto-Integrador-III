<?php
require_once __DIR__ . "/header.php";
$id = base64_decode($_GET['noticia']);
$treino = $treinosNoticias->get($id);
?>
<link rel="stylesheet" href="./assets/css/pages/treino.css">

<section class="treino block">
    <div class="content">
        <h1 class="title"><?= $treino['titulo']; ?></h1>
        <hr class="division">

        <div class="container">
            <img width="100%" src="./assets/images/<?= $treino['imagem']; ?>" alt="<?= $treino['titulo']; ?>">

            <p class="title conteudo">
                <?= $treino['conteudo']; ?>
            </p>
            <p class="title dt-registro">Data da Publicação: <?= date('d/m/Y H:i:s', strtotime($treino['dt_registro'])); ?></p>
        </div>
    </div>
</section>

<?php require_once __DIR__ . "/footer.php";  ?>