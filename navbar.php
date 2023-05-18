<?php $menus = $categorias->getAll(); ?>

<header class="header">
    <nav class="navbar">
        <ul class="list">
            <li class="item">
                <a href="./index.php">
                    <div class="icon">
                        <i class="fas fa-dumbbell"></i>
                    </div>
                    <strong>Home</strong>
                </a>
            </li>
            <?php foreach ($menus as $value) : ?>
                <li class="item">
                    <a href="./nav.php?aba=<?= base64_encode($value['id']); ?>">
                        <div class="icon">
                            <i class="fas fa-dumbbell"></i>
                        </div>
                        <strong><?= $value['titulo']; ?></strong>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>