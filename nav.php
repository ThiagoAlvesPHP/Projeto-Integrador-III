<?php
if (!isset($_GET['aba'])) {
    header('Location: index.php');
}

require_once __DIR__ . "/header.php";

$categoria_id = base64_decode($get['aba']);
$categoria = $categorias->get($categoria_id);

$list = $tiposTreinamentos->getAllCategory($categoria_id);
?>
<link rel="stylesheet" href="./assets/css/pages/categoria.css">

<section class="home categoria block">
    <div class="content">
        <h1 class="title"><?= $categoria['titulo'] ?></h1>
        <hr class="division">

        <h3 class="sub-title">Lista de Aulas</h3>

        <table class="table">
            <thead>
                <tr>
                    <th>Ação</th>
                    <th>Título</th>
                </tr>
            </thead>
            <?php foreach ($list as $value) : ?>
                <tbody>
                    <tr>
                        <td><a href="./nav.php?aba=<?= $_GET['aba']; ?>&aula=<?= base64_encode($value['id']); ?>"><button>Visualizar</button></a></td>
                        <td><?= $value['titulo'] ?></td>
                    </tr>
                </tbody>
            <?php endforeach; ?>
        </table>

        <?php if (!empty($get['aula'])) : ?>
            <?php
            $aula = $tiposTreinamentos->get(base64_decode($get['aula']));
            $urlParts = parse_url($value['link']);
            parse_str($urlParts['query'], $query);
            $videoId = $query['v'];
            $embedUrl = 'https://www.youtube.com/embed/' . $videoId;
            ?>
            <hr class="division">
            <p class="title"><?= $aula['titulo']; ?></p>
            <div class="video">
                <iframe width="560" height="315" src="<?php echo $embedUrl; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php require_once __DIR__ . "/footer.php";  ?>