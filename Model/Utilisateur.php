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

      // fonction qui enregisre les données pourla création d'un  exercice
      function creerExercice($nomExercice, $video)
      {
          global $bdd;

          $req = $bdd->prepare("INSERT INTO Exercice (nomExercice, video) VALUES ('$nomExercice', '$video')");

          $req->execute();
      }

      //fonction qui récupère les videos d'exercices dans la base de données
      function obtenirExercices($nomExercice, $video)
      {
          global $bdd;

          $req = $bdd->prepare("SELECT * FROM Exercice");

          $req->execute();
          $exercices = $req->fetchAll();

          return $exercices;
      }

      //fonctions qui met à jour les infos d'un exercice
      function modifierExercice($nomExercice, $nouvelExercice, $video){
        global $bdd;

        $req = $bdd->prepare("UPDATE Exercice SET nomExercice = '$nouvelExercice', video = '$video' WHERE nomExercice = '$nomExercice'");

        $req->execute();
      }

      function modifierNom($nomExercice, $nouvelExercice){
        global $bdd;

        $req = $bdd->prepare("UPDATE Exercice SET nomExercice = '$nouvelExercice' WHERE nomExercice = '$nomExercice'");

        $req->execute();
      }

      function modifierVideo($video, $nomExercice){
        global $bdd;

        $req = $bdd->prepare("UPDATE Exercice SET video = '$video' WHERE nomExercice = '$nomExercice'");

        $req->execute();
      }

      // fonction qui supprime un exercice
      function supprimerExercice($nomExercice)
      {
        global $bdd;

        $req = $bdd->prepare("DELETE FROM Exercice WHERE nomExercice = '$nomExercice'");

        $req->execute();
      }
