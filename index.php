<?php
// Chargement des fichiers traitement
require_once(dirname(__FILE__) . "/inc/functions.php");
?>

<html>
  <head>
    <title>Mon formulaire de test</title>
    <link rel="stylesheet" type="text/css" media="screen" href="assets/styles.css">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </head>
  
  
  <body>
  <header>
    <img  class=logo src="/img/rocket.svg" width='30px' height='30'px' alt="logo"/>
      <nav class="nav" role="navigation">
        <ul clas="menu">
          <li><a href="#">Services</a></li>
          <li><a href="#">Projet</a></li>
          <li><a href="#">Equipe</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
  </nav>
  </header>

    <section>
   
    <div id="container">
      <div class="contact-box">
        
        <div class="left">
            <!-- <div class="imgBx"> -->
              <img src="./img/ariane.jpg" alt="ariane">
            <!-- </div> -->
          </div> 

        <div class="right result">
          <?php
          // Charge la variable
          $GLOBALS["agence"] = "Seize";
          echo get_include_contents( dirname(__FILE__) . "/templates/form.php" );
          ?>
        </div>
      </div>
     
    </div>


    </section>
    <script type="text/javascript" src="assets/scripts.js"></script>
  </body>


</html>
