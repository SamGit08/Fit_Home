<?php
// code permettant la connexion a la base de données
  try {
    $bdd = new PDO('mysql:host=localhost;dbname=FitHome;charset=utf8', 'samsql', 'samphp08');
  } catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
  }

 ?>
