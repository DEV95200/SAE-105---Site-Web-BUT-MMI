<?php
    $couleur_bulle_classe = "xxx";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos</title>

    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-fonts.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-header.css">
    <link rel="stylesheet" href="resources/css/style.css">
    <style>
        .conteneur-principal {
            max-width: 1280px;
            margin: 0 auto;
            padding: 20px;
        }

        #box-contact {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border: 2px solid #eee;
            border-radius: 10px;
            background-color: #fff;
            text-align: left;
            margin-left: 1px;
        }

        #box-contact form {
            margin-top: 20px;
        }

        #box-contact form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        #box-contact form input,
        #box-contact form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        #box-contact form button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        #box-contact form button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <section class="conteneur-1280">
        <?php require_once('./ressources/includes/header_contact.php'); ?>

        <main class="conteneur-principal">
            <h1 class="titre-page">CONTACT</h1>

           

            <section id="box-contact">
                <h2>Nous contacter</h2>
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $prenom = htmlspecialchars($_POST['prenom']);
                    $nom = htmlspecialchars($_POST['nom']);
                    $email = htmlspecialchars($_POST['email']);
                    $message = htmlspecialchars($_POST['message']);

                  
                }
                ?>

                <form method="post" action="">
                    <label for="prenom">Prénom :</label>
                    <input type="text" id="prenom" name="prenom" >

                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom" >

                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" >

                    <label for="message">Message :</label>
                    <textarea id="message" name="message" rows="5" ></textarea>

                    <button type="submit">Envoyer</button>
                </form>
            </section>
        </main>
    </section>
</body>
</html>
