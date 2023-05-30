<?php
include_once('oeuvres.php');

$key = array_search($_GET['id'], array_column($works, 'id'));
$work = $works[$key];
?>

<main>
    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src="<?= $work['image']; ?>" alt="<?= $work['title']; ?>">
        </div>
        <div id="contenu-oeuvre">
            <h1><?= $work['title']; ?></h1>
            <p class="description"><?= $work['author']; ?></p>
            <p class="description-complete"><?= $work['description']; ?></p>
        </div>
    </article>
</main>
