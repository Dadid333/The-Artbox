<?php
include_once('oeuvres1.php');

$key = array_search($_GET['id'], $works);

foreach ($works as $value) {
    $work = current($value);
    if ($work['id'] == $_GET['id'] && $work['is_enabled']) {
        ?>
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
        <?php
        break;
    }
}
?>
