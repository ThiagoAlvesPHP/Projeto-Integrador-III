<?php require_once __DIR__ . "/header.php";  ?>
<link rel="stylesheet" href="./assets/css/pages/home.css">

<section class="home">
    <h1 class="title"><?= (!empty($_GET['aba'])) ? "Menu: ".$_GET['aba'] : 'Nenhuma Aba'; ?></h1>
</section>

<?php require_once __DIR__ . "/footer.php";  ?>