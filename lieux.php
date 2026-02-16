<?php
    $couleur_bulle_classe = "bleu";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lieux de vie | BUT MMI</title>

    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-fonts.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-header.css">
    <link rel="stylesheet" href="ressources/css/lieux.css">
</head>

<body class="<?php echo $couleur_bulle_classe; ?>">
    <section class="conteneur-1280">
        <?php require_once('./ressources/includes/header.php'); ?>

        <!-- Vous allez principalement écrire votre code HTML ci-dessous -->
        <main class="conteneur-principal">


            <div class="article-grid">
                <div class="article1">
                    <h2 class="article-title">Lieux de vie</h2>
                    <p class="article-description">Entre les cours, l’université et ses IUT proposent de nombreux lieux de convivialité ou d’idéation. Divers et variés, ils permettent aux étudiants, de toute formation, de découvrir de nouveaux horizons et surtout de rencontrer les étudiants d’autres BUT.</p>
                </div>
                <div class="article2">
                    <img src="ressources/images/bibliotheque.jpg" alt="bibliotheque" class="article-photo">
                    <div class="article-text">
                        <h2 class="article-title">Bibliothèque universitaire</h2>
                        <p class="article-description">La bibliothèque universitaire est un atout indispensable à votre réussite. Elle met à votre disposition des collections (livres, revues, ressources numériques accessibles sur place et à distance) ainsi que des postes informatiques et des espaces de travail.</p>
                    </div>
                </div>
                <div class="article3">
                <div class="article-text-no-margin">
                    <h2 class="article-title">Se restaurer</h2>
                    <p class="article-description">Les restaurants du CROUS vous permettent de déjeuner pour un tarif social, fixé au plus à 3,30€. Pour bénéficier de ce tarif, il vous suffit de présenter votre carte d’étudiant multiservices. <br> Si vous êtes étudiant boursier, vous bénéficiez automatiquement lors de votre passage en caisse du tarif à 1€ pour un repas complet.</p>
                </div>
                    <img src="ressources/images/crous.jpg" alt="crous" class="article-photo-right">
                </div>
                <div class="article4">
                    <img src="ressources/images/faclab.jpg" alt="faclab" class="article-photo">
                    <div class="article-text">
                        <h2 class="article-title">Réseau des fablabs de CY Cergy Paris Université</h2>
                        <p class="article-description">Intégré au Centre d’appui aux enseignements, le réseau des fablabs de CY Cergy Paris Université comprend le fablabs LabBoite de Cergy (Grand centre) et le Faclab de Gennevilliers (site de l’université). Ce réseau permet d’expérimenter, tester et échanger dans des lieux collaboratifs, accueillants, et ouverts à toutes et tous.</p>
                    </div>
                </div>
            </div>
        </main>
        <!-- old footer
        <footer class="site-footer">
            <div class="footer-left">
                <img src="ressources/images/logo-cyu-couleur.svg" alt="Logo" class="footer-logo">
            </div>
            <div class="footer-separator"></div>
            <div class="footer-right">
                <p>Certains textes sont issus de Wikipédia</p>
                <div class="footer-links">
                    <a href="https://www.facebook.com/CYCergyParisUniversite" target="_blank">Facebook</a>
                    <a href="https://twitter.com/UniversiteCergy" target="_blank">Twitter</a>
                    <a href="https://www.cyu.fr" target="_blank">Université CY Paris Université</a>
                    <a href="#" class="remonter">Remonter</a>
                </div>
                <p> © 2013–2021 - BUT MMI - CY Paris Université - SAE 105</p>
                
            </div>
        </footer>
        -->
        <?php require_once('./ressources/includes/footer.php'); ?>
    </section>
</body>
</html>