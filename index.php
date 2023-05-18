<?php
require_once __DIR__ . "/header.php";
$listTreinos = $treinosNoticias->getAll();
?>
<link rel="stylesheet" href="./assets/css/pages/home.css">

<section class="home block">
    <div class="content">
        <h1 class="title">Entretenimento</h1>
        <hr class="division">

        <h3 class="sub-title">Tipos de Treinamento</h3>
        <div class="cards">
            <?php foreach ($listTreinos as $key => $value) : ?>
                <div class="card">
                    <p class="title"><?=$value['titulo']; ?></p>
                    <a href="./treino.php?noticia=<?=base64_encode($value['id']); ?>">
                        <img width="100%" src="./assets/images/<?=$value['imagem']; ?>" alt="<?=$value['titulo']; ?>">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require_once __DIR__ . "/footer.php";  ?>