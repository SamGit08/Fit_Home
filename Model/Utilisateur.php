<?php
  require 'Connexion.php';

    // fonction qui enregisre les données de l'Utilisateur
    function creerUtilisateur($prenom, $nom, $email, $mdp, $mdpConf, $role)
    {
          global $bdd;

          $req = $bdd->prepare("INSERT INTO Utilisateur (nom, prenom, email, mdp, role) VALUES ('$nom', '$prenom', '$email', '$mdp', '$role')");

          $req->execute();
    }

      // fonction qui recupère les données de l'Utilisateur
      function obtenirUtilisateur($email, $mdp)
      {
          global $bdd;

          $req = $bdd->prepare("SELECT * FROM Utilisateur WHERE email = '$email' AND mdp = '$mdp'");

          $req->execute();
          $donnees = $req->fetch();

          return $donnees;
      }
      
      //fonction qui récupère les videos d'exercices dans la base de données
      function obtenirExercices()
      {
          global $bdd;

          $req = $bdd->prepare("SELECT * FROM Exercice");

          $req->execute();
          $exercices = $req->fetchAll();

          return $exercices;
      }
