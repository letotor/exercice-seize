<?php
// Chargement des fichiers traitement
require_once(dirname(__FILE__) . "/inc/functions.php");
?>

<html>
  <head>
    <title>Mon formulaire de test</title>
    <link rel="stylesheet" type="text/css" media="screen" href="/assets/styles.css">
  </head>
  <body>

    <div id="container">
      <?php
      // Charge la variable
      $GLOBALS["agence"] = "Seize";
      echo get_include_contents( dirname(__FILE__) . "/templates/form.php" );
      ?>
    </div>

    <script type="text/javascript" src="/assets/scripts.js"></script>
  </body>
</html>
