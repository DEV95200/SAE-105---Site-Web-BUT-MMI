<!-- Formulaire PHP -->


<?php

  // Définir les variables et les initialiser avec des valeurs vides

  $prenomf = $nomf = $mailf = $messagef = $choixf = "";
  $prenom = $nom = $mail = $message = $choix = "";
  $errorMessage = "";
  $successMessage = "";

// Methode POST pour envoyer les données

  if ($_SERVER["REQUEST_METHOD"] == "POST") 

// Partie prénom
  {
    if (empty($_POST["prenom"])) {
      $prenomf = "Un prénom est requis";
    } else {
      $prenom = test_input($_POST["prenom"]);

    if (!preg_match("/^[a-zA-Z-' ]*$/",$prenom)) {
      $prenomf = "Votre prénom doit contenir des lettres uniquement";
    }
  }

// Partie nom
  
  if (empty($_POST["nom"])) {
    $nomf = "Un nom est requis";
  } else {
    $nom = test_input($_POST["nom"]);

    if (!preg_match("/^[a-zA-Z-' ]*$/",$nom)) {
      $nomf = "Votre nom doit contenir des lettres uniquement";
    }
  }

// Partie mail
    
  if (empty($_POST["mail"])) {
    $mailf = "Une adresse e-mail est requise";
  } else {
    $mail = test_input($_POST["mail"]);

    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
      $mailf = "Adresse e-mail invalide";
  }
}

// Partie message

  if (empty($_POST["message"])) {
    $messagef = "Un message est requis";
  } else {
    $message = test_input($_POST["message"]);
  }

  if (empty($_POST["choix"])) {
    $choixf = "Vous devez sélectionner une option";
  } else {
    $choix = test_input($_POST["choix"]);
  }
  }

// Fonction pour tester les données

  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }
 
  // Si tout est valide, envoyer l'email 

 if (empty($nomf) && empty($mailf) && empty($choixf) && empty($prenomf) && empty($messagef)) {
  $to = "thanhtoan.dang.14@gmail.com";
  $subject = "Une personne s'est inscrite";
  $body = "Une personne s'est inscrite voici les informations : 
$nom, 
$prenom, 
$choix, 
$mail, 
$message";
  $headers = "From: sae105@premier-site.fr";

  if (mail($to, $subject, $body, $headers)) {
    $successMessage = "Merci pour votre inscription. Nous vous contacterons bientôt !";
} 
}
?>

<!-- Message erreur/confirmation --> 

<div class="error-message"><?php 
  if (!empty($prenomf) || !empty($nomf) || !empty($mailf) || !empty($messagef) || !empty($choixf)) {
    echo $errorMessage = "Echec de l'envoi du message, veuillez vérifier les champs du formulaire";
    }
?> </div>

<div class="Formulaire">
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?> <!-- Vérification de la méthode de requête -->
        <?php if (!empty($successMessage)): ?>
            <div class="success-message"><?php echo $successMessage; ?></div>
        <?php endif; ?>
    <?php endif; ?>