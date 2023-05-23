<!doctype php>
<php lang="fr">
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
        <?php include_once('oeuvres.php');     
        if (isset($_GET['id']))
        {
            foreach($works as $work)
            if (array_key_exists('id', $work) && $work['id'] == $_GET['id'] && $work['is_enabled'])
            {
            include('partials/work_details.php');
            }
        } else {
            echo "aucune oeuvre à afficher.";
        } ?>
    </main>
    <?php include_once('partials/footer.php'); ?>
</body>
</php>
