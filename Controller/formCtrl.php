<?php
require '../Model/Utilisateur.php';

session_start();

$prenom = null;
$nom = null;
$role = null;
$messageC = null;
$messageI = null;
$email = null;
$mdp = null;
$is_connected = false;

if(isset($_POST['emailC'], $_POST['mdpC'])) {
  $email = $_POST['emailC'];
  $mdp = $_POST['mdpC'];

  $donnees = obtenirUtilisateur($email, $mdp);

  if($donnees['email'] == $_POST['emailC'] && $donnees['mdp'] == $_POST['mdpC']){
    $nom = $donnees['nom'];
    $prenom = $donnees['prenom'];
    header("Location:../Controller/membreCtrl.php?page=../View/main.php");
  }else{
    $messageC = "Email et/ou Mot de passe incorrect !";
  }
}


if(isset($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['mdp'], $_POST['mdpConf'], $_POST['coach'])){

  $prenom = $_POST['prenom'];
  $nom = $_POST['nom'];
  $email = $_POST['email'];
  $mdp = $_POST['mdp'];
  $mdpConf = $_POST['mdpConf'];
  $role = $_POST['coach'];

  if($nom != null && $prenom != null && $email != null && $role != null && $mdp == $mdpConf){

    creerUtilisateur($prenom, $nom, $email, $mdp, $mdpConf, $role);

  }else{
    $messageI = "Champs manquants / mot de passe incorrect !";
  }
}

if(isset($_SESSION['nom'], $_SESSION['prenom'])) {
  $is_connected = true;
}

require '../View/landingPage.php';