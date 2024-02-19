<?php
$code_erreur = null; 
if (isset($_GET['erreur'])) {
    $code_erreur = (int) $_GET['erreur'];
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription Newsletter</title>
    <link rel="stylesheet" href="./assets/style.css">
    <script src="./assets/script.js" defer></script>
</head>

<body>
    <form action="./src/traitement.php" method="post" onsubmit="return Validation()">
    <h1>Formulaire d'inscription à la Newsletter</h1>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>
        <label for="mail">Mail :</label>
        <input type="email" id="mail" name="mail" required>
        <?php if ($code_erreur === 1){ ?>
            <div class="message echec">Votre email doit être au format email.</div>
        <?php }?>
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password"  required>
        <?php if ($code_erreur === 3){ ?>
            <div class="message echec">Les mots de passe doivent être identiques.</div>
        <?php }?>
        <?php if ($code_erreur === 4){ ?>
            <div class="message echec">Votre mot de passe doit contenir au moins 8 caractères.</div>
        <?php }?>
        <label for="password2">Vérifier le Mot de passe :</label>
        <input type="password" id="password2" name="password2"  required>
        <?php if ($code_erreur === 3){ ?>
            <div class="message echec">Les mots de passe doivent être identiques.</div>
        <?php }?>
        <?php if ($code_erreur === 2){ ?>
            <div class="message echec">Merci de remplir tous les champs.</div>
        <?php }?>
        <?php if ($code_erreur === 5){ ?>
            <div class="message echec">Nous sommes désolés, quelque chose s'est mal passé.</div>
        <?php }?>
        <input type="submit" name="submit" value="S'inscrire">
    </form>
</body>

</html>