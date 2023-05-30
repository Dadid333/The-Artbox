<main>
<div id="liste-oeuvres">          
<?php include_once('oeuvres.php'); ?>
<?php foreach ($works as $work) {
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
</main>