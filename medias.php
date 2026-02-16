<?php
    $couleur_bulle_classe = "rouge";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sur les Médias | BUT MMI</title>

    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-fonts.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-header.css">

    <link rel="stylesheet" href="ressources/css/medias.css">
</head>

<body class="<?php echo $couleur_bulle_classe; ?>">
    <section class="conteneur-1280">
        <?php require_once('./ressources/includes/header.php'); ?>

        <!-- Vous allez principalement écrire votre code HTML ci-dessous -->
        <main class="conteneur-principal">
            <h1 class="titre-page">Sur les Médias | BUT MMI</h1>

            <div class="video-grid">
                <div class="video-item">
                    <h2 class="video-title">La nouvelle réforme : le BUT MMI</h2>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/oiEbQF7qfBU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="video-item">
                    <h2 class="video-title">Pourquoi étudier à l'IUT CYU ?</h2>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/SyjF4h2Zb7Q" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="video-item">
                    <h2 class="video-title">Job interview en anglais au département MMI</h2>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/xD4wshE0hEg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="video-item">
                    <h2 class="video-title">L'importance de l'IUT dans les études supérieures</h2>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/t72pdxpNjyc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

            <!-- à continuer ici. Mettre le code respectif de chaque page ici -->
        </main>
        <?php require_once('./ressources/includes/footer.php'); ?>
    </section>
    
</body>
</html>
</body>
</html>