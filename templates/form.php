<?php
/*
 * Template d'accueil
 */
?>

<h1>Bienvenue sur le test de l'agence <?= $GLOBALS["agence"]; ?></h1>

<h2>Veuillez compléter le formulaire suivant :</h2>

<form name="form" method="post" action="">
  <div id="return"></div>

  <div class="field_nom">
    <label for="nom">Votre nom</label>
    <input id="nom" name="nom" type="text" />
  </div>

  <div class="field_prenom">
    <label for="prenom">Votre prénom</label>
    <input id="prenom" name="prenom" type="text" />
  </div>

  <div class="field_tel">
    <label for="tel">Votre téléphone</label>
    <input id="tel" name="tel" type="tel" />
  </div>

  <div class="field_email">
    <label for="email">Votre email</label>
    <input id="email" name="email" type="email" />
  </div>

  <input type="submit" name="submit" value="Valider" />
</form>
