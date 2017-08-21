<?php session_destroy(); ?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans|Oswald" rel="stylesheet">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Fit'Home - Vos séances à domicile</title>
  </head>
  <body>
    <div id="modal" class="container-fluid">
      <div class="row">
        <?php
          require 'modal_form.php';
        ?>
      </div>
    </div>
    <section>
      <header>
        <img class="logo" src="images/weights.png" alt="">
        <button id="connexion" onclick='connexion();' class="bouton" type="button" name="button">Se connecter</button>
      </header>
      <div>
        <h1>Fit'Home</h1>
        <div>
          <p>La salle de fitness chez vous !</p>
          <span>100% gratuit !</span>
        </div>
        <button id="inscription" onclick="inscription();" class="bouton" type="button" name="button">S'inscrire</button>
      </div>
    </section>
    <main class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <h2>Pour vous</h2>
        </div>
        <!-- 1ere fonction -->
        <div class="col-xs-12 col-sm-6">
          <div class="col-xs-12">
            <img class="icone" src="images/house.png" alt="">
          </div>
          <div class="col-xs-12">
            <span>Séances à domicile</span>
          </div>
          <div class="col-xs-12">
            <p>Effectuer votre entraînement libre chez vous sans materiel</p>
          </div>
        </div>
        <!-- fin de la fonction -->
        <!-- 2eme fonction -->
        <div class="col-xs-12 col-sm-6">
          <div class="col-xs-12">
            <img class="icone" src="images/list_sport.png" alt="">
          </div>
          <div class="col-xs-12">
            <span>Programme sportif</span>
          </div>
          <div class="col-xs-12">
            <p>Suiver un programme sportif adapté à l'évolution voulu</p>
          </div>
        </div>
        <!-- fin de la fonction -->
        <!-- 3eme fonction -->
        <div class="col-xs-12 col-sm-6">
          <div class="col-xs-12">
            <img class="icone" src="images/chat.png" alt="">
          </div>
          <div class="col-xs-12">
            <span>Conseils nutritionnel</span>
          </div>
          <div class="col-xs-12">
            <p>En accompagnement de votre programme sportif</p>
          </div>
        </div>
        <!-- fin de la fonction -->
        <!-- 4eme fonction -->
        <div class="col-xs-12 col-sm-6">
          <div class="col-xs-12">
            <img class="icone" src="images/graph.png" alt="">
          </div>
          <div class="col-xs-12">
            <span>Suivi sportif</span>
          </div>
          <div class="col-xs-12">
            <p>Consulter votre progression</p>
          </div>
        </div>
        <!-- fin de la fonction -->
          <div class="col-xs-12">
            <h2>Le plus coach</h2>
          </div>
          <!-- 1ere fonction -->
          <div class="col-xs-12">
            <div class="col-xs-12">
              <img class="icone" src="images/list_prog.png" alt="">
            </div>
            <div class="col-xs-12">
              <span>Création de programmes</span>
            </div>
            <div class="col-xs-12">
              <p>Créer vos programmes sportifs et nutritionnels pour la communauté</p>
            </div>
          </div>
          <!-- fin de la fonction -->
      </div>
    </main>
    <footer class="container-fluid">
      <div class="row">
        <div class="contacts col-xs-12 col-sm-6 col-md-3">
          <span>Contacts</span>
        </div>
        <div class="contacts col-xs-12 col-sm-6 col-md-3">
          <div class="col-xs-12">
            <span>@Fithome</span>
          </div>
          <div class="col-xs-2 col-xs-offset-3">
            <img class="social_logo" src="images/facebook.png" alt="">
          </div>
          <div class="col-xs-2">
            <img class="social_logo" src="images/twitter.png" alt="">
          </div>
          <div class="col-xs-2">
            <img class="social_logo" src="images/instagram.png" alt="">
          </div>
        </div>
        <div class="contacts col-xs-12 col-sm-6 col-md-3">
          <span>Conditions générales</span>
        </div>
        <div class="contacts col-xs-12 col-sm-6 col-md-3">
          <span>Aide</span>
        </div>
      </div>
    </footer>
  </body>
  <script src="js/app.js" type="text/javascript"></script>
</html>
