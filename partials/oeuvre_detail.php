<?php if ($work['is_enabled'] && $work['id'] == $_GET['id']): ?>
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
<?php endif ?>