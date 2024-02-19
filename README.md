# PHP - Activité 4 : classes, formulaire et CSV

Pour son site de vente en ligne, votre client souhaite que vous lui fassiez un formulaire d'inscription sur son site. On devra garder une trace de chacune des inscriptions.

## Construire le HTML
- Créer un fichier php, dans lequel on vient écrire du HTML.
- Créer le formulaire, en spécifiant la méthode POST, et le chemin du fichier `traitement.php`.
- Ajouter au formulaire les champs suivants :
  - nom
  - prénom
  - adresse mail
  - mot de passe
  - mot de passe bis

- Vous pourrez ajouter à votre convenance le style et le JS nécessaire à la vérification des champs.

## Traitement des informations
Une fois le formulaire soumis, on a besoin de s'assurer que les infos reçues sont bien celles attendues (Sécurité !).
- vérifier que tous les champs sont remplis.
- l'adresse mail a bien le bon format
- pas de code malveillant dans les champs textes
- le mot de passe contient bien 8 caractères minimum

Si les informations données ne sont pas bonnes, il faudra retourner sur le formulaire et afficher une erreur.

Si tout va bien, on passe à la suite.

## Instanciation de l'utilisateur
- Construire une classe User, avec les mêmes propriétés que demandé dans le formulaire, + un ID.
- Cette classe aura tous les getters et setters nécessaires.
- Elle aura une méthode pour créer un ID unique (pas aléatoire, mais juste le prochain chiffre qui n'est pas encore utilisé dans la liste de nos utilisateurs.) ex : $utilisateurs = [1,2,3,5,6];
le prochain utilisateur prendra l'ID 4. Celui d'après, l'ID 7.

- une méthode getObjectToArray() retournera toutes les propriétés sous le format d'un tableau.

## Une classe Database
Bien que nous travaillerons ici avec un fichier CSV comme base de données, nous allons créer une classe spécial qui gérera les connexions, lectures, écritures, ... à notre fichier, à notre base.
- Cette classe aura comme propriété le fichier CSV auquel se connecter.
- Elle aura plusieurs méthodes :
  - une méthode privée pour ouvrir le fichier
  - une méthode privée pour fermer le fichier
  - une méthode publique pour lire le fichier
  - une méthode publique pour écrire dans le fichier

## Affichage des retours
Une fois que le traitement est terminé, nous devons renvoyer des infos à l'utilisateur. Soit tout a fonctionné, et on lui renvoie un message de succès, soit quelque chose s'est mal passé, et c'est l'échec.
