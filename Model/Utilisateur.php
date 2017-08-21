<?php
  require 'Connexion.php';

    function inscription()
    {

      if(isset($_POST['submit'], $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['mdp'], $_POST['mdpConf'], $_POST['coach']) && $mdp == $mdpConf){
          global $bdd;

          $prenom = $_POST['prenom'];
          $nom = $_POST['nom'];
          $email = $_POST['email'];
          $mdp = $_POST['mdp'];
          $mdpConf = $_POST['mdpConf'];
          $role = $_POST['coach'];

          $req = $bdd->prepare("INSERT INTO Utilisateur (nom, prenom, email, mdp, role) VALUES ('$nom', '$prenom', '$email', '$mdp', '$role')");

          $req->execute();
          $req->closeCursor();

          //header("Location: ../Controller/index.php?page=../View/main.php");
        }else{
          echo "<div class='col-xs-12'><p>Champs manquants / mot de passe incorrect !</p></div>";
        }
      }

      function connexion($email, $mdp)
      {
        if(isset($_POST['submitConnexion'], $_POST['email'], $_POST['mdp'])){
          global $bdd;

          $email = $_POST['email'];
          $mdp = $_POST['mdp'];

          $req = $bdd->prepare("SELECT mdp FROM Utilisateur WHERE email = '$email'");
          $req->execute();

          $connecter = $req->fetch();

            if($connecter){
              session_start();
              header("Location: ../Controller/index.php?page=../View/main.php");
            }else{
              echo "<div class='col-xs-12'><p>Email et/ou Mot de passe incorrect !</p></div>";
          }
        }
      }
