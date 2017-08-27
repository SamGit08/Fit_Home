<?php
session_start();
  require '../Model/Connexion.php';
  require '../Model/calculImc.php';
  require '../Model/Utilisateur.php';
  require '../View/header.php';
  $imc = calculImc();
  $donnees = obtenirUtilisateur();
  require $_GET['page'];
?>
