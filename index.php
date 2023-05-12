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
    <header>
        <?php include_once('header.php'); ?>
    </header>
    <main>
    <div id="liste-oeuvres">
        <?php include_once('oeuvres.php'); ?>
            <?php foreach($works as $work) : ?>
                <?php if (array_key_exists('id', $work)): ?>                   
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
    <footer>
        <?php include_once('footer.php'); ?>
    </footer>
</body>
</php
>