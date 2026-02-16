# SAE-105---Site-Web-BUT-MMI

# SAÉ 105 - Site Web BUT MMI - Récapitulatif du Projet

<div align="center">

![Status](https://img.shields.io/badge/Status-Termin%C3%A9-green?style=for-the-badge)
![Année](https://img.shields.io/badge/Ann%C3%A9e-2024--2025-blue?style=for-the-badge)
![Durée](https://img.shields.io/badge/Dur%C3%A9e-Semestre%201-orange?style=for-the-badge)

</div>

---

## Présentation du Projet

> Ce projet consistait à créer un site web institutionnel pour présenter le **BUT Métiers du Multimédia et de l'Internet (MMI)** de CY Cergy Paris Université. L'objectif était de mettre en pratique nos compétences en intégration web (HTML/CSS) et développement web (PHP) dans un contexte professionnel réaliste.

---

## Mon Expérience

### Organisation

| Aspect | Détails |
|--------|---------|
| **Type de travail** | Projet en groupe (3-5 étudiants) |
| **Mon rôle** | [À personnaliser selon votre rôle] |
| **Durée** | Semestre 1 |
| **Technologies** | HTML5, CSS3, PHP, Flexbox |

---

## Ce que j'ai réalisé

### Les 6 Pages du Site

<table>
<tr>
<td width="50%">

#### Pages Principales
- **Page Accueil** : Articles sur le BUT MMI avec mise en page en colonnes
- **Page À propos** : 3 sections avec ancres et grille de projets
- **Page Contact** : Formulaire PHP avec gestion des états (succès/erreur)

</td>
<td width="50%">

#### Pages Complémentaires
- **Page Médias** : Intégration de 4 vidéos YouTube via iframe
- **Page Lieux de vie** : Présentation des locaux de l'IUT
- **Page personnalisée** : [Thème de votre 6ème page]

</td>
</tr>
</table>

---

## Technologies et Outils Utilisés

### Stack Technique

```
Frontend
  ├─ HTML5 (structure sémantique)
  ├─ CSS3 (mise en page Flexbox)
  └─ Police Open Sans (@font-face)

Backend
  ├─ PHP (traitement formulaire)
  └─ Envoi d'emails

Outils
  ├─ VS Code (éditeur)
  ├─ Adobe XD (maquette)
  ├─ AlwaysData (hébergement)
  └─ Git (optionnel - gestion de version)
```

---

## Compétences Développées

### 1. Intégration Web (HTML/CSS)

<table>
<tr>
<td width="50%">

#### Techniques Maîtrisées
- Structure HTML sémantique
- Mise en page avec **Flexbox**
- Organisation du code CSS
- Responsive design
- Réutilisation de classes CSS

</td>
<td width="50%">

#### Accessibilité Web
- Attributs `alt` sur les images
- Unités `rem` pour les tailles de police
- Balises `<title>` uniques
- Labels liés aux formulaires
- Contrastes de couleurs

</td>
</tr>
</table>

#### Ce que j'ai appris sur Flexbox

```css
/* J'ai compris comment utiliser Flexbox pour la mise en page */
.container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 20px;
}

/* Conversion px → rem */
font-size: 1.5rem; /* 24px ÷ 16 = 1.5rem */
```

> **Ressource utile** : [Flexbox Froggy](https://flexboxfroggy.com/#fr) m'a beaucoup aidé à comprendre Flexbox

---

### 2. Développement Web (PHP)

#### Fonctionnalités Développées

| Fonctionnalité | Ce que j'ai appris |
|---------------|-------------------|
| **Includes PHP** | Réutilisation de code avec `require_once()` |
| **Formulaire** | Traitement des données POST |
| **Validation** | Vérification des champs obligatoires |
| **Emails** | Envoi d'emails avec PHP (fonction `mail()`) |
| **États conditionnels** | Affichage de messages de succès/erreur |

#### Exemple de code que j'ai écrit

```php
<?php
// Traitement du formulaire de contact
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Validation
    if (!empty($nom) && !empty($email) && !empty($message)) {
        // Envoi de l'email
        $success = mail($to, $subject, $message, $headers);
        
        if ($success) {
            $etat = "succes";
        } else {
            $etat = "erreur";
        }
    }
}
?>
```

---

### 3. Gestion de Projet et Travail d'Équipe

#### Compétences Transversales

<table>
<tr>
<td width="33%" align="center">

**Communication**
<br><br>
Coordination avec l'équipe
<br>
Répartition des tâches

</td>
<td width="33%" align="center">

**Organisation**
<br><br>
Gestion du temps
<br>
Respect des deadlines

</td>
<td width="33%" align="center">

**Résolution de problèmes**
<br><br>
Debugging
<br>
Recherche de solutions

</td>
</tr>
</table>

---

## Défis Rencontrés et Solutions

### Défis Techniques

| Défi | Solution Trouvée |
|------|------------------|
| **Mise en page complexe** | Utilisation de Flexbox avec `justify-content` et `align-items` |
| **Formulaire PHP** | Recherche documentation PHP, tests en ligne sur AlwaysData |
| **Intégration vidéos YouTube** | Utilisation de la balise `<iframe>` avec les URLs d'embed |
| **Cache navigateur** | Ctrl + F5 pour forcer l'actualisation |
| **Conversion px → rem** | Création d'une formule : valeur_px ÷ 16 = valeur_rem |

### Défis Organisationnels

| Défi | Solution Trouvée |
|------|------------------|
| **Coordination équipe** | Fichiers CSS séparés par page pour éviter les conflits |
| **Fusion du code** | Nomenclature claire des fichiers (ex: `contact.php` + `contact.css`) |
| **Répartition du travail** | Une page par personne puis mise en commun |

---

## Structure du Projet Réalisé

### Architecture des Fichiers

```
DEV95200-SAE105/
 ┣ ressources/
 ┃ ┣ css/
 ┃ ┃ ┣ npm-fonts.css (fourni)
 ┃ ┃ ┣ npm-base.css (fourni)
 ┃ ┃ ┣ index.css (créé)
 ┃ ┃ ┣ contact.css (créé)
 ┃ ┃ ┣ a-propos.css (créé)
 ┃ ┃ └ [autres pages].css
 ┃ ┣ images/
 ┃ ┃ ┣ logos/
 ┃ ┃ └ photos/
 ┃ ┗ includes/
 ┃   ┣ header.php (modifié)
 ┃   └ footer.php (créé)
 ┣ index.php
 ┣ contact.php
 ┣ a-propos.php
 ┣ medias.php
 ┣ lieux.php
 ┣ [ma-page-perso].php
 └ README.md
```

---

## Bonnes Pratiques Appliquées

### HTML/CSS

```html
<!-- Structure sémantique -->
<header>
  <nav>
    <ul>
      <li><a href="index.php" class="active">Accueil</a></li>
    </ul>
  </nav>
</header>

<main>
  <article>
    <h1>Titre de l'article</h1>
    <img src="image.jpg" alt="Description de l'image">
    <p>Contenu...</p>
  </article>
</main>

<footer>
  <!-- Contenu du footer -->
</footer>
```

### PHP

```php
<!-- Réutilisation de code -->
<?php require_once('ressources/includes/header.php'); ?>

<main>
  <!-- Contenu spécifique à la page -->
</main>

<?php require_once('ressources/includes/footer.php'); ?>
```

---

## Accessibilité Web

### Normes Respectées

<table>
<tr>
<td width="50%">

#### Images
```html
<img src="photo.jpg" 
     alt="Description complète de l'image">
```

#### Formulaires
```html
<label for="email">Email :</label>
<input type="email" 
       id="email" 
       name="email">
```

</td>
<td width="50%">

#### Titres de Pages
```html
<title>Accueil - BUT MMI CYU</title>
```

#### Tailles de Police
```css
/* Toujours en rem, jamais en px */
font-size: 1.125rem; /* 18px */
```

</td>
</tr>
</table>

---

## Hébergement et Mise en Ligne

### Plateforme Utilisée

| Service | Configuration |
|---------|---------------|
| **AlwaysData** | Compte gratuit |
| **PHP** | Version 7.x ou 8.x |
| **Base de données** | Non nécessaire pour ce projet |
| **Emails** | Configuration SMTP pour l'envoi |

### Étapes de Déploiement

```
1. Création du compte AlwaysData
2. Configuration FTP / SSH
3. Upload des fichiers via FileZilla / SFTP
4. Test du site en ligne
5. Vérification de l'envoi d'emails
6. Tests d'accessibilité avec AccessibilityChecker
```

---

## Compétences Validées (Apprentissages Critiques)

<table>
<tr>
<td align="center" width="25%">

### AC14.01
**Environnement de développement**
<br><br>
VS Code, extensions, debugging

</td>
<td align="center" width="25%">

### AC14.02
**Pages statiques sémantiques**
<br><br>
HTML5, CSS3, Flexbox

</td>
<td align="center" width="25%">

### AC14.03
**Génération dynamique**
<br><br>
PHP, formulaires, includes

</td>
<td align="center" width="25%">

### AC14.04
**Mise en ligne**
<br><br>
Hébergement, déploiement

</td>
</tr>
</table>

---

## Principaux Apprentissages

### Ce que je maîtrise maintenant

#### 1. Intégration Web

```css
/* Je sais maintenant créer des mises en page flexibles */
.grille-projets {
  display: flex;
  flex-wrap: wrap;
  gap: 2rem;
  justify-content: center;
}

.projet {
  flex: 0 1 300px;
  padding: 1rem;
}
```

#### 2. Développement PHP

- Créer des formulaires fonctionnels
- Valider les données utilisateur
- Envoyer des emails
- Réutiliser du code avec `require_once()`
- Gérer les états conditionnels

#### 3. Accessibilité

- Importance des balises sémantiques
- Attributs `alt` sur toutes les images
- Utilisation de `rem` pour la typographie
- Labels pour les formulaires
- Contrastes de couleurs suffisants

#### 4. Outils de Développement

- VS Code et ses extensions
- Console de développement (Chrome DevTools)
- Validation du code
- Débogage CSS et PHP
- Hébergement web (FTP/SFTP)

---

## Difficultés Surmontées

### Problèmes Techniques Résolus

<table>
<tr>
<td width="50%">

#### Problème : Formulaire ne fonctionne pas
**Solution** : L'envoi d'emails ne fonctionne qu'en ligne, pas en local. Test sur AlwaysData obligatoire.

#### Problème : Cache navigateur
**Solution** : Ctrl + Maj + R pour forcer l'actualisation, ou désactiver le cache dans la console.

</td>
<td width="50%">

#### Problème : Vidéos YouTube
**Solution** : Utiliser l'URL d'embed (`/embed/VIDEO_ID`) dans une iframe, pas l'URL classique.

#### Problème : Page active non indiquée
**Solution** : Ajouter une classe CSS conditionnelle en PHP selon la page courante.

</td>
</tr>
</table>

---

## Ressources Utilisées

### Documentation

- [MDN Web Docs](https://developer.mozilla.org/) - Documentation HTML/CSS/PHP
- [PHP.net](https://www.php.net/) - Documentation officielle PHP
- [Flexbox Froggy](https://flexboxfroggy.com/#fr) - Apprentissage Flexbox
- [AccessibilityChecker](https://www.accessibilitychecker.org/) - Test d'accessibilité

### Outils

- **Adobe XD** : Visualisation de la maquette
- **VS Code** : Éditeur de code
- **Extension "Format HTML in PHP"** : Formatage du code
- **Chrome DevTools** : Inspection et debugging
- **AlwaysData** : Hébergement gratuit

---

## Résultats du Projet

### Livrables Fournis

- [ ] 6 pages fonctionnelles (dont 1 créée de A à Z)
- [ ] Formulaire de contact opérationnel avec envoi d'emails
- [ ] Site accessible et responsive
- [ ] Code propre et organisé
- [ ] Site hébergé en ligne
- [ ] Document "qui a fait quoi"
- [ ] Archive complète du projet

### Critères de Qualité Atteints

```
✓ Code HTML sémantique
✓ CSS organisé et réutilisable
✓ Accessibilité respectée (alt, rem, labels)
✓ Formulaire PHP fonctionnel
✓ Site en ligne et accessible
✓ Documentation complète
✓ Travail d'équipe coordonné
```

---

## Ce que je retiens

### Points Forts du Projet

<table>
<tr>
<td width="33%" align="center">

**Technique**
<br><br>
Mise en pratique concrète
<br>
HTML, CSS, PHP

</td>
<td width="33%" align="center">

**Méthodologie**
<br><br>
Travail d'équipe
<br>
Gestion de projet

</td>
<td width="33%" align="center">

**Professionnalisme**
<br><br>
Respect des consignes
<br>
Qualité du code

</td>
</tr>
</table>

### Compétences Transférables

- **Autonomie** : Recherche de solutions, documentation
- **Collaboration** : Travail en équipe, communication
- **Rigueur** : Respect des normes, accessibilité
- **Adaptabilité** : Résolution de problèmes techniques

---

## Améliorations Possibles

### Si je devais refaire ce projet

| Aspect | Amélioration |
|--------|--------------|
| **Organisation** | Utiliser Git dès le début pour la gestion de version |
| **CSS** | Créer un fichier de variables CSS pour les couleurs et tailles |
| **PHP** | Implémenter une meilleure gestion d'erreurs |
| **Accessibilité** | Ajouter des attributs ARIA pour améliorer l'accessibilité |
| **Performance** | Optimiser les images pour un chargement plus rapide |
| **JavaScript** | Ajouter des interactions dynamiques (validation formulaire côté client) |

---

## Conclusion Personnelle

### Bilan de l'Expérience

> Ce projet m'a permis de comprendre concrètement comment créer un site web de A à Z, de l'intégration à la mise en ligne. J'ai particulièrement apprécié [à personnaliser], et j'ai trouvé difficile [à personnaliser]. Cette expérience m'a donné confiance en mes compétences en développement web et m'a montré l'importance du travail d'équipe dans les projets informatiques.

### Compétences Acquises

```
✓ Maîtrise de HTML5 et CSS3
✓ Bases solides en PHP
✓ Compréhension de l'accessibilité web
✓ Utilisation de Flexbox pour la mise en page
✓ Déploiement d'un site web
✓ Travail collaboratif
```

---

<div align="center">

## Projet SAÉ 105 - Terminé avec Succès

### Compétences validées pour la poursuite du cursus BUT MMI

![Divider](https://raw.githubusercontent.com/andreasbm/readme/master/assets/lines/rainbow.png)

**Liens du Projet**

[Site en ligne](#) • [Maquette XD](https://xd.adobe.com/view/95c93a87-3bd9-475d-8adf-6d6937baace9-c09a/) • [Code Base](https://download-directory.github.io/)

---

*Projet réalisé dans le cadre de la SAÉ 105 - BUT MMI - CY Cergy Paris Université*
*Année 2024-2025 - Semestre 1*

</div>
