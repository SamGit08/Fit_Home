<?php

// fonction de calcul de l'IMC
  function calculImc(){
    $taille = ($_POST['taille']) / 100;
    $poids = $_POST['poids'];

    $imc = round(($poids / ($taille*$taille)), 2);
    return $imc;
  }
