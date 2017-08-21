<?php
  try {
    $bdd = new PDO('mysql:host=localhost;dbname=FitHome;charset=utf8', 'samsql', 'samphp08');
  } catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
  }

 ?>
