<?php
/*
 * Template d'accueil
 */
?>

<h1 class="title">Bienvenue sur le test de <br> <span> l'agence <?= $GLOBALS["agence"]; ?></span></h1>

<h2>Veuillez compléter le formulaire suivant :</h2>

<form id="inscription" name="form" method="post" action="">
  <div id="retour" style="display:none">information </div>


 <div class="fullGrid " >

    <div class="field_nom">
      <label for="nom">Votre nom</label>
      <input id="nom" name="nom" type="text" placeholder="Votre nom" />
    </div>

    <div class="field_prenom">
      <label for="prenom">Votre prénom</label>
      <input id="prenom" name="prenom" type="text" placeholder="Votre prénom"/>
    </div>

    <div class="field_tel">
      <label for="tel">Votre téléphone</label>
      <input id="tel" name="tel" type="tel" placeholder="Votre téléphone" />
    </div>

    <div class="field_email">
      <label for="email">Votre email</label>
      <input id="email" name="email" type="email" placeholder="Votre email" />
    </div>

  </div>
      <input id="btn-submit" class="form-submit-button" type="submit" name="submit" value="Valider" />
  <div id="loader" class="loader" style="display:none">
    <img src="img/ajax-loader.gif"  alt="loader"/>
  </div>


</form>
