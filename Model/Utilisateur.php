<?php
  require 'Connexion.php';


    function inscription($prenom, $nom, $email, $mdp, $mdpConf, $role)
    {

      if(isset($_POST['submitInscription'], $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['mdp'], $_POST['mdpConf'], $_POST['coach']) && $mdp == $mdpConf){
          global $bdd;

          $prenom = $_POST['prenom'];
          $nom = $_POST['nom'];
          $email = $_POST['email'];
          $mdp = $_POST['mdp'];
          $mdpConf = $_POST['mdpConf'];
          $role = $_POST['coach'];

          $req = $bdd->prepare("INSERT INTO Utilisateur (nom, prenom, email, mdp, role) VALUES ('$nom', '$prenom', '$email', '$mdp', '$role')");

          $req->execute();

        }else{
          echo "<div class='col-xs-12'><p>Champs manquants / mot de passe incorrect !</p></div>";
        }
      }

      function obtenirUtilisateur($email, $mdp)
      {

          global $bdd;

          $email = $_POST['email'];
          $mdp = $_POST['mdp'];

          $req = $bdd->prepare("SELECT * FROM Utilisateur WHERE email = '$email' AND mdp = '$mdp'");

          $req->execute();
          $donnees = $req->fetch();

          return $donnees;

      }
