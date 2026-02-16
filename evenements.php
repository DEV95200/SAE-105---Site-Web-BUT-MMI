<?php
    $couleur_bulle_classe = "vert";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Événements | BUT MMI</title>

    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-fonts.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-header.css">
    <link rel="stylesheet" href="ressources/css/evenements.css">
</head>

<body class="<?php echo $couleur_bulle_classe; ?>">
    <section class="conteneur-1280">
        <?php require_once('./ressources/includes/header.php'); ?>

        <!-- Vous allez principalement écrire votre code HTML ci-dessous -->
        <main class="conteneur-principal">
            <h1 class="titre-page">Événements | BUT MMI</h1>

            <div class="event-grid">
                <div class="event-item">
                    <h2 class="event-title">Journée Portes Ouvertes</h2>
                    <p class="event-description">Venez découvrir notre université et ses formations lors de notre journée portes ouvertes. Date : 27 janvier 2024, de 10h à 17h.</p>
                    <img src="ressources/images/IMG_6897@2x.png" alt="Journée Portes Ouvertes" class="event-photo">
                </div>
                <div class="event-item">
                    <h2 class="event-title">Conférence sur le Multimédia</h2>
                    <p class="event-description">Participez à notre conférence sur les dernières tendances en multimédia. Date : 15 février 2024, de 14h à 18h.</p>
                    <img src="ressources/images/IMG_6897@2x.png" alt="Conférence sur le Multimédia" class="event-photo">
                </div>
                <div class="event-item">
                    <h2 class="event-title">Hackathon Étudiant</h2>
                    <p class="event-description">Rejoignez-nous pour un hackathon de 48 heures où les étudiants pourront développer des projets innovants. Date : 10 mars 2024, de 9h à 11 mars 2024, 17h.</p>
                    <img src="ressources/images/IMG_6897@2x.png" alt="Hackathon Étudiant" class="event-photo">
                </div>
                <div class="event-item">
                    <h2 class="event-title">Exposition des Projets Étudiants</h2>
                    <p class="event-description">Venez voir les projets réalisés par nos étudiants au cours de l'année. Date : 25 avril 2024, de 10h à 16h.</p>
                    <img src="ressources/images/IMG_6897@2x.png" alt="Exposition des Projets Étudiants" class="event-photo">
                </div>
            </div>
        </main>
        <?php require_once('./ressources/includes/footer.php'); ?>
    </section>
</body>
</html>