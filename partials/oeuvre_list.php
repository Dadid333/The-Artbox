<?php if ($work['is_enabled'] == true) : ?>
    <article class="oeuvre">
        <a href="oeuvre.php?id=<?php echo $work['id']; ?>">
            <img src="<?php echo $work['image']; ?>" alt="<?php echo $work['title']; ?>">
            <h2><?php echo $work['title']; ?></h2>
            <p class="description"><?php echo $work['author']; ?></p>
        </a>
    </article>                               
<?php endif ?>