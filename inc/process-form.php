<?php
/*
 * Ce fichier doit contenir le traitement PHP du formulaire
 * Et doit retourner la réponse en appelant le fichier templates/result.php contenant le modèle préformaté
 */

// Chargement des fichiers traitement
require_once(dirname(__FILE__) . "/functions.php");

// Traitement à réaliser
// echo 'appel process-form.php pour traitement  des données ';
// extract($_POST);

$success=true;
$msg= array();
$res="";
$page="";
$nom = isset($_POST['nom'])? $_POST['nom'] : '';
$prenom = isset($_POST['prenom'])? $_POST['prenom'] : '';
$tel = isset($_POST['tel'])? $_POST['tel'] : '';
$email = isset($_POST['email'])? $_POST['email'] : '';
$retour = isset($_POST['retour'])? $_POST['retour'] : '';


// Regle de gestion verification 
if (!isset($nom) || empty($nom)){
    $success=false;
    $msg[]="Votre nom est vide";

}
if (!isset($prenom) || empty($prenom)){
    $success=false;
    $msg[]="Votre pr&eacute;nom est vide";

}
if (!isset($tel) || empty($tel)){
    $success=false;
    $msg[]="Votre num&eacute;ro de t&eacute;l&eacute;phone est vide";
}else{
    if (!filter_var($tel,FILTER_SANITIZE_NUMBER_INT)){
        $success=false;
        $msg[]="Votre num&eacute;ro de t&eacute;l&eacute;phone est incorrect";
    }
}

if (!isset($email) || empty($email)){
    $success=false;
    $msg[]="Votre email est vide";
}else{
   if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $success=false;
        $msg[]="Votre email  est incorrect";
     }
}
 

//on construit la page success dynamiquement
if ($success){
    $page= get_dynamic_data_page( get_include_contents(dirname(__DIR__)."/templates/result.php"),$nom,$prenom,$tel,$email) ;
}

$res= ["success" => $success, "msg" => $msg , "ecran" => $page];
//Simulation du temps traitement serveur pour loader
sleep(1);
echo (json_encode($res));


