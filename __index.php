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
    <a href="#">
    <img href="#" class=logo src="/img/rocket.svg" width='30px' height='30'px' alt="logo"/>
    </a>
      <nav class="nav" role="navigation">
        <ul clas="menu">
          <li><a href="#services">Services</a></li>
          <li><a href="#projets">Projet</a></li>
          <li><a href="#equipe">Equipe</a></li>
          <li><a href="#contact">Contact</a></li>
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
  
 <script type="text/javascript" src="index.js"></script>


  </body>


</html>
