<?php
    $couleur_bulle_classe = "jaune";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Contact</title>

    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-fonts.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-header.css">
    <link rel="stylesheet" href="ressources/css/contact.css">
</head>

<!-- Formulaire PHP -->

<?php require_once('form.php'); ?>
    
</div>

<!-- Bulle-->


<body class="<?php echo $couleur_bulle_classe; ?> tout">


    <!--Header --> 

      <section class="conteneur-1280">
        <?php require_once('ressources/includes/header.php'); ?>
      </section>

<!-- Intro --> 


  <div class="boite">
    <div class="titre espacement">
      <p>Plus d'infos sur la formation ?</p>
      <p>Contactez-nous !</p>
    </div>
    <p class="mini-paragraphe">
        <span class="bold">La formation s'ouvre à tous les bacheliers,</span> 
        pour rappel. Avoir des connaissances en programmation, design 
        ou encore audiovisuel n'est pas obligatoire mais reste un bon 
        atout, car il faut aimer la curiosité dans cette formation 
        pluridisciplinaire. 
        <span class="bold">Il est également possible de faire la 
        formation après une reprise d'études ou une réorientation.</span>
    </p>
    <p class="titre espacement-2">Nous contacter en ligne</p>
  </div> 




<!-- HTML -->

  
    <div class="formulaire">

 

                  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
   <div class="champerreur">* Vous devez compléter ce champ</div>
    <!-- Prénom --> 
                  <div class="display-flex">
                    <p class="mini-titre">Prénom</p> 
                    <p class="erreur">* <?php echo $prenomf;?></p>
                  </div>
                  <input type="text" name="prenom" value="<?php echo $prenom;?>" class="prenom">                    
    
    <!-- Nom -->
                  <div class="display-flex">
                    <p class="mini-titre">Nom</p> 
                    <p class="erreur">* <?php echo $nomf;?></p>
                  </div>
                  <input type="text" name="nom" value="<?php echo $nom;?>" class="nom">

    <!-- Mail -->
                  <div class="display-flex">
                    <p class="mini-titre">Mail</p> 
                    <p class="erreur">* <?php echo $mailf;?></p>
                  </div>
                  <input type="mail" name="mail" value="<?php echo $mail;?>" class="mail">
    
    <!-- Message -->
                  <div class="display-flex"> 
                    <p class="mini-titre">Message</p> 
                    <p class="erreur">* <?php echo $messagef;?></p>   
                  </div>                   
                    <textarea name="message" id="message"></textarea>
  

                    
    <!-- Choix Radio -->
      <div class="boutons">
                  <div class="display-flex">
                    <p class="mini-titre">Je suis</p>
                    <p class="erreur">* <?php echo $choixf;?></p>
                  </div>
                    <input type="radio" name="choix" <?php if (isset($choix) && $choix=="nonprecis") echo "checked";?> value="nonprecis">Je ne souhaite pas le préciser
                    <input type="radio" name="choix" <?php if (isset($choix) && $choix=="etudiant") echo "checked";?> value="etudiant">Étudiant / Étudiante
                    <input type="radio" name="choix" <?php if (isset($choix) && $choix=="parent") echo "checked";?> value="parent">Parent  
                    <input type="radio" name="choix" <?php if (isset($choix) && $choix=="autre") echo "checked";?> value="autre">Autre 
       
      </div>

    <!-- Bouton -->

    <input class="submit" type="submit" name="submit" value="ENVOYER">  


  </div>
                  </form>
<div class="margin">
  <div>
    <p class="titre">Nous contacter par courrier</p>
  </div>
  <div class="latter-espacement">
    <p>IUT de Cergy-Pontoise,</p>
    <p>Département Métiers du Multimédia et de l'Internet (MMI)</p>
    <p>34 Bis Boulevard Henri Bergson</p>
    <p>95200 Sarcelles</p>
  </div>
</div>



<!-- Footer -->

<?php require_once('ressources/includes/footer.php'); ?>


</body>
</html>