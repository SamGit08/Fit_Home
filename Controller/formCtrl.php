<?php
require '../Model/Utilisateur.php';

$prenom = null;
$nom = null;
$role = null;
$message = null;
$email = null;
$mdp = null;

if(isset($_POST['email'], $_POST['mdp'])) {
  $email = $_POST['email'];
  $mdp = $_POST['mdp'];

  $donnees = obtenirUtilisateur($email, $mdp);

  if($donnees['email'] == $_POST['email'] && $donnees['mdp'] == $_POST['mdp']){
      session_start();
      header("Location: index.php?page=../View/main.php");
      $_SESSION['nom'] = $donnees['nom'];
      $_SESSION['prenom'] = $donnees['prenom'];
  }else{
    header("Location:../Landing-page/index.php");
    $message = "Email et/ou Mot de passe incorrect !";
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

    header("Location:../Landing-page/index.php");
  }else{
    header("Location:../Landing-page/index.php");
    $message = "Champs manquants / mot de passe incorrect !";
  }
}
?>
