<?php include_once('oeuvres.php');
if (isset($_GET['id']))
{ 
    foreach($works as $work)
    if (array_key_exists('id', $work) 
    && $work['id'] == $_GET['id']
    && $work['is_enabled'])
    { ?>
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
    } 
} else {
            echo "aucune oeuvre à afficher.";
        } ?>