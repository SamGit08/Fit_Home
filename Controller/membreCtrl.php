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
  $nom = $_SESSION['nom'];
  $prenom = $_SESSION['prenom'];
  $exercices = obtenirExercices($nomExercice, $video);
  supprimerExercice($nomExercice);


  require $_GET['page'];
?>
