<!doctype php
>
<php
 lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
    <?php include_once('partials/header.php'); ?>
    <main>
    <div id="liste-oeuvres">
        <?php include_once('oeuvres.php'); ?>
            <?php foreach($works as $work) : ?>
                <?php if ($work['is_enabled'] == true) : ?>
                    <article class="oeuvre">
                        <a href="oeuvre.php?id=<?php echo $work['id']; ?>">
                            <img src="<?php echo $work['image']; ?>" alt="<?php echo $work['title']; ?>">
                            <h2><?php echo $work['title']; ?></h2>
                            <p class="description"><?php echo $work['author']; ?></p>
                        </a>
                    </article>                               
                <?php endif ?>
            <?php endforeach ?>
        </div>
    </main>
    <?php include_once('partials/footer.php'); ?>
</body>
</php
>