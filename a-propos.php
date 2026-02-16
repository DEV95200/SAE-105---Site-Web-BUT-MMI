<?php
    $couleur_bulle_classe = "turquoise";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUT MMI - A propos</title>

    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-fonts.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-header.css">

    <!-- Vous n'avez pas besoin de ce fichier sur les autres pages. Ca allège le temps de chargement et diminue la consommation d'électricité -->
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-accueil.css">
    <link rel="stylesheet" href="ressources/css/a-propos.css">
</head>

<body class="<?php echo $couleur_bulle_classe; ?>">
    <section class="conteneur-1280">
        <?php require_once('./ressources/includes/header.php'); ?>

        <!-- Vous allez principalement écrire votre code HTML ci-dessous -->
        <main class="conteneur-principal">
            <section>
                <div class="border">
                    <div class="ancres">
                        <p><a href="#presentation">Présentation <a></p>
                        <p><a href="#sae">SAE<a></P>
                        <p><a href="#exemple">Exemples de SAE<a></p>
                    </div>
                </div>
                <div class="article">
                    <div class="espacement">    
                        <p id="presentation">Le BUT métiers du multimédia et de l'internet (MMI) remplace le DUT MMI à partir de la rentrée 2021, 
                        auparavant appelé DUT SRC (services et réseaux de communication) jusqu'en mai 2013, qui était lancé 
                        à la rentrée universitaire 1994 par les IUT de Vélizy, Marne-la-Vallée, Saint-Raphaël et Verdun. 
                        Ce BUT offre une alternative aux anciens diplômes Bac+3, tels que la licence professionnelle en 
                        activités et techniques de communication et la licence professionnelle en systèmes informatiques et 
                        logiciels.</p>
                    </div>
                    <div class="espacement">
                        <p>Lorsque cette formation était proposée sous la forme d'un Diplôme Universitaire Technologique 
                        (DUT), elle se déroulait sur deux années (1 800 heures). En théorie, elle est accessible à tous les 
                        bacheliers, quelle que soit leur série. En moyenne, il y a de 30 à 35 heures de cours par semaine. Cette 
                        formation se divise en trois grands pôles, auxquels il faut ajouter le projet tutoré (300 heures) et 
                        les stages (420 heures). Les trois grands axes sont les suivants :</p>
                    </div>
                    <div class="espacement">
                        <li>La culture contemporaine et langues étrangères (500 heures)</li>
                        <li>La culture scientifique et technique (700 heures)</li>
                        <li>La culture communicationnelle (600 heures)</li>
                    </div>
                </div>
                <img class="img-foret" src="ressources/images/IMG_7106@2x.png" alt="">
                <div class="article">
                    <p class="saut">A CY Cergy Paris Université, il est donné la possibilité aux étudiants de passer un semestre au Québec à 
                    l'Université du Québec à Chicoutimi (UQAC) dans une formation dont le contenu est proche de celui proposé 
                    à l'IUT. Il est également possible d'effectuer ce semestre après avoir été diplômé. Attention : les cours 
                    sont dispensés en langue française.</p>
                </div>
                <h1 id="sae" class="title">Situation d'Apprentissage et d'Évaluation</h1>
                <div class="article">
                    <div class="espacement">
                        <p>Dans l’optique de préparer au mieux les étudiants à leur future vie professionnelle, les étudiants 
                        sont regroupés en agences de communication de 3 à 7 personnes dans des projets appelés "SAÉ" ou 
                        Situation d'Apprentissage et d'Évaluation. Ces agences ont pour but d’encourager le travail d’équipe 
                        dans un cadre reprenant l'environnement du travail en entreprise.</p>
                    </div>
                    <div class="espacement">
                        <p>La situation d'apprentissage et d'évaluation ou simplement SAÉ est la situation didactique que 
                        privilégie, au Québec, le Ministère de l'Éducation, Enseignement supérieur et Recherche (MEESR) 
                        par le biais du Programme de formation de l'école québécoise (PFEQ). Une SAÉ se définit comme 
                        un ensemble constitué d’une ou plusieurs tâches à réaliser par l’élève en vue d’atteindre le but 
                        fixé. Elle permet : à l’élève, de développer et d’exercer une ou plusieurs compétences disciplinaires 
                        et transversales; à l’enseignant, d’assurer le suivi du développement des compétences dans une 
                        perspective d’aide à l’apprentissage. Elle est donc centrée sur l'élève et préconise une approche 
                        constructiviste ou socioconstructiviste à l'école</p>
                    </div>
                    <div class="espacement saut">
                        <p>Les SAÉ sont une nouveauté des diplômes BUT, elles visent à remplacer les Devoirs Sur Table et les 
                        notes à terme, en proposant une approche plus "ingénieure" de la scolarité avec des étudiants qui 
                        apprennent à résoudre des problèmes et non plus apprendre par cœur leurs cours.</p>
                    </div>
                </div>
                <h1 id="exemple" class="title">Exemples de projets réalisés en SAÉ</h1>
                <div class="column-1">
                    <div class="card">
                        <img src="ressources/images/IMG_689.png" alt="">
                        <p class="title-card">Auditer une communication numérique • SAÉ 101</p>
                        <p class="content espacement">Apprendre les bases du reportage vidéo sur un sujet libre</p>
                    </div>
                    <div class="card">
                        <img src="ressources/images/IMG_689.png" alt="">
                        <p class="title-card">Concevoir une recommandation de communication numérique • SAÉ 102</p>
                        <p class="content espacement">Apprendre les bases du reportage vidéo sur un sujet libre</p>
                    </div>
                    <div class="card">
                        <img src="ressources/images/IMG_689.png" alt="">
                        <p class="title-card">Produire les éléments d’une communication visuelle • SAÉ 103</p>
                        <p class="content espacement">Apprendre les bases du reportage vidéo sur un sujet libre</p>
                    </div>
                    </div>
                </div>  
                <div class="column-2">
                    <div class="card">
                        <img src="ressources/images/IMG_689.png" alt="">
                        <p class="title-card">Produire un contenu audio et vidéo • SAÉ 104</p>
                        <p class="content espacement">Apprendre les bases du reportage vidéo sur<br>un sujet libre</p>
                    </div>
                    <div class="card">
                        <img src="ressources/images/IMG_689.png" alt="">
                        <p class="title-card">Produire un site Web • SAÉ 105</p>
                        <p class="content espacement">Apprendre les bases du reportage vidéo sur un sujet libre</p>
                    </div>
                    <div class="card">
                        <img src="ressources/images/IMG_689.png" alt="">
                        <p class="title-card">Gérer un projet de communication numérique • SAÉ 106</p>
                        <p class="content espacement">Apprendre les bases du reportage vidéo sur un sujet libre</p>
                    </div>
                </div>
            </section>
        </main>

        <?php require_once('./ressources/includes/footer.php'); ?>
    </section>
</body>

</html>