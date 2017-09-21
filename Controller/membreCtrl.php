<?php
session_start();
  require '../Model/Connexion.php';
  require '../Model/calculImc.php';
  require '../Model/Utilisateur.php';
  require '../View/header.php';
  $imc = calculImc();

  if(isset($imc)){
    if(($imc >= 18) && ($imc <= 25)){
      $note = "Corpulence normale";
      $_SESSION['imc'] = $imc;
    }elseif($imc < 18){
      $note = "Maigreur";
      $_SESSION['imc'] = $imc;
      }elseif($imc > 25){
        $note = "Surpoids";
        $_SESSION['imc'] = $imc;
      }
    }

  $donnees = obtenirUtilisateur($email, $mdp);

  $_SESSION['nom'] = $donnees['nom'];
  $_SESSION['prenom'] = $donnees['prenom'];

  creerUtilisateur();

  // $exercices = obtenirVideos();
  // obtenirExercices();

  require $_GET['page'];
?>
