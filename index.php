<?php
    $couleur_bulle_classe = "rose";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUT MMI</title>

    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-fonts.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-header.css">

    <!-- Vous n'avez pas besoin de ce fichier sur les autres pages. Ca allège le temps de chargement et diminue la consommation d'électricité -->
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-accueil.css">
    <link rel="stylesheet" href="ressources/css/accueil.css">
</head>

<body class="<?php echo $couleur_bulle_classe; ?>">
    <section class="conteneur-1280">
        <?php require_once('./ressources/includes/header.php'); ?>

        <!-- Vous allez principalement écrire votre code HTML ci-dessous -->
        <main class="conteneur-principal">
            <h1 class="titre-page">Articles sur le BUT MMI</h1>

            <section class="colonne">
                <section class="liste-articles">
                    <div class="box-shadow">
                        <img class="img-1" src="ressources/images/IMG_6897@2x.png" alt="">
                        <div class="text">
                            <p class="article-title">Developpement Web</p>
                            <p>Initier les étudiants et les étudiantes aux bases de la programmation de pages HTML. On y apprend les
                            langages HTML et CSS, simples mais énormément pratiques. Le web ayant été pensé pour être accessible, 
                            le cours enseigne également les normes d'accessibilités comme le contraste des couleurs ou encore la taille
                            des polices d'écriture.</p>
                        </div>
                    </div>
                    <div class="box-shadow">
                        <img class="img-1" src="ressources/images/IMG_6897@2x.png" alt="">
                        <div class="text">
                        <p class="article-title">Developpement Web</p>
                        <p>Initier les étudiants et les étudiantes aux bases de la programmation de pages HTML. On y apprend les
                        langages HTML et CSS, simples mais énormément pratiques. Le web ayant été pensé pour être accessible, 
                        le cours enseigne également les normes d'accessibilités comme le contraste des couleurs ou encore la taille
                        des polices d'écriture.</p>
                        </div>
                    </div>
                    <div class="box-shadow">
                        <img class="img-1" src="ressources/images/IMG_6897@2x.png" alt="">
                        <div class="text">
                        <p class="article-title">Developpement Web</p>
                        <p>Initier les étudiants et les étudiantes aux bases de la programmation de pages HTML. On y apprend les
                        langages HTML et CSS, simples mais énormément pratiques. Le web ayant été pensé pour être accessible, 
                        le cours enseigne également les normes d'accessibilités comme le contraste des couleurs ou encore la taille
                        des polices d'écriture.</p>
                        </div>
                    </div>
                </section>
                <a class="jpo-banniere" title="Ouverture dans un nouvel onglet" href="https://www.cyu.fr/salons-journee-portes-ouvertes">
                    <img src="ressources/images/logo-cyu-blanc.png" width="200" class="logo" alt="">
                    
                    <section class="textes">
                        <p class="txt-petit">Journée portes ouvertes</p>
                        <p class="txt-grand">
                            27/01/2024, <br />
                            de 10h à 17h
                        </p>
                        <p class="en-savoir-plus">EN SAVOIR PLUS</p>
                    </section>
                </a>

            </section>
            <?php require_once('./ressources/includes/footer.php'); ?>
        </main>
    </section>
</body>

</html>