<div id="liste-oeuvres">          
<?php include_once('oeuvres1.php'); ?>
<?php foreach ($works as $value) {
    // Récupérer les données de l'élément
    $work = current($value);
    // Vérifier si l'œuvre est activée
    if ($work['is_enabled']) { ?>
    <article class="oeuvre">
        <a href="oeuvre.php?id=<?= $work['id']; ?>">
            <img src="<?= $work['image']; ?>" alt="<?= $work['title']; ?>">
            <h2><?= $work['title']; ?></h2>
            <p class="description"><?= $work['author']; ?></p>
        </a>
    </article> 
<?php }
} ?>
</div>