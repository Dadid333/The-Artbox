<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
<header>
    <?php include_once('header.php'); ?>
</header>
<main>
<?php include_once('oeuvres.php'); ?>
    <?php foreach($works as $work) : ?>
        <?php if (array_key_exists('is_enabled', $work) && $work['id'] == $_GET['id']): ?>
            <article id="detail-oeuvre">
                <div id="img-oeuvre">
                    <img src="<?php echo $work['image']; ?>" alt="<?php echo $work['title']; ?>">
                </div>
                <div id="contenu-oeuvre">
                    <h1><?php echo $work['title']; ?></h1>
                    <p class="description"><?php echo $work['author']; ?></p>
                    <p class="description-complete"><?php echo $work['description']; ?></p>
                </div>
            </article>
        <?php endif ?>
    <?php endforeach ?>
</main>
<footer>
    <?php include_once('footer.php'); ?>
</footer>
</body>
</html>
