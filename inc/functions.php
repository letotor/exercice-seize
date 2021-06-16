<?php
/*
 * Ce fichier contient les fonctions développées spécifiquement pour cet exercice
 */

/*
 * Fonction pour récupérer en template PHP éxécuté
 ---------------------------------------------------------------------------- */
function get_include_contents($filename) {
  if ( is_file($filename) ) :
    ob_start();
    include $filename;
    return ob_get_clean();
  endif;
  return false;
}

/*
 * Fonction pour injection dynamique suivant patern
 * 
 * 
 * 
 * posibilité amerliration pour utiliser regexp et remplaceer #test# par ${test}
 ---------------------------------------------------------------------------- */
function get_dynamic_data_page($inputstream,$nom,$prenom,$tel,$email) {
    $patterns = array();
    $patterns[0] = '/#prenom#/';
    $patterns[1] = '/#nom#/';
    $patterns[2] = '/#email#/';
    $patterns[3] = '/#tel#/';

    $replacements = array();
    $replacements[0] = $prenom;
    $replacements[1] = $nom;
    $replacements[2] = $email;
    $replacements[3] = $tel;
    $output= preg_replace($patterns, $replacements, $inputstream);
return $output;
}


/**
 * 
 */
// function maFonctionCallback($param){
//   // $output2= preg_replace_callback( '#\[img\]([a-zA-Z0-9]+)\[\/img\]#','maFonctionCallback',$inputstream);
//   // $inputstream = 'Le renard marron #agile# saute par dessus le chien paresseux.';
//       var_dump($param);
//       return $param[1];
//   }