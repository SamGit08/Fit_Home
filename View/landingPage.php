<?php session_destroy(); ?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans|Oswald" rel="stylesheet">
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Public/css/style.css">
    <title>Fit'Home - Vos séances à domicile</title>
  </head>
  <body>
    <?php
    if (!$is_connected)
    {
    ?>
    <div id="modal" class="container-fluid">
      <div class="row">
        <!-- modal du formulaire de connexion -->
            <form id="formConnexion" class="formulaire col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4" action="index.php" method="post">
              <div class="col-xs-1 col-xs-offset-11">
                <button onclick="fermer();" class="close" type="button" name="button">&times;</button>
              </div>
              <div class="col-xs-6 col-xs-offset-3">
                <label>Se connecter</label>
              </div>
              <div class="col-xs-12">
                <input type="email" name="emailC" value="<?php if($email){echo $email;} ?>" placeholder="Email">
              </div>
              <div class="col-xs-12">
                <input type="password" name="mdpC" value="" placeholder="Mot de passe">
              </div>
              <div class="col-xs-6 col-xs-offset-3">
                <button class="bouton" type="submit" name="submitConnexion">Connexion</button>
                <?php
                  if($messageC != null) {
                ?>
                  <p><?php echo $messageC; ?></p>
                <?php
                  }
                ?>
              </div>
            </form>
        <!-- modal du formulaire d'inscription -->
            <form id="formInscription" class="formulaire col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4" action="index.php" method="post">
              <div class="col-xs-1 col-xs-offset-11">
                <button onclick="fermer();" class="close" type="button" name="button">&times;</button>
              </div>
              <div class="col-xs-6 col-xs-offset-3">
                <label>S'inscrire</label>
              </div>
              <div class="col-xs-12">
                <input type="text" name="nom" value="" placeholder="Nom">
              </div>
              <div class="col-xs-12">
                <input type="text" name="prenom" value="" placeholder="Prenom">
              </div>
              <div class="col-xs-12">
                <input type="email" name="email" value="" placeholder="Email">
              </div>
              <div class="col-xs-12">
                <input type="password" name="mdp" value="" placeholder="Mot de passe">
              </div>
              <div class="col-xs-12">
                <input type="password" name="mdpConf" value="" placeholder="Confirmation mot de passe">
              </div>
              <div class="col-xs-5 col-sm-4 col-sm-offset-2">
                <label>Coach ?</label>
              </div>
              <div class="col-xs-6 col-xs-offset-1 col-sm-3">
                <select class="" name="coach">
                  <option value="0">Non</option>
                  <option value="1">Oui</option>
                </select>
              </div>
              <div class="col-xs-6 col-xs-offset-3">
                <button class="bouton" type="submit" name="submitInscription">Inscription</button>
                <?php
                  if($messageI!= null) {
                ?>
                  <p><?php echo $messageI; ?></p>
                <?php
                  }
                ?>
              </div>
            </form>
      </div>
    </div>
    <?php
    }
    ?>
    <section>
      <header>
        <img class="logo" src="images/weights.png" alt="">
        <?php
        if (!$is_connected)
        {
        ?>
        <button id="connexion" onclick='connexion();' class="bouton" type="button" name="button">Se connecter</button>
        <?php
        }
        ?>
      </header>
      <div>
        <h1>Fit'Home</h1>
        <div>
          <p>La salle de fitness chez vous !</p>
          <span>100% gratuit !</span>
        </div>
        <?php
        if (!$is_connected)
        {
        ?>
        <button id="inscription" onclick="inscription();" class="bouton" type="button" name="button">S'inscrire</button>
        <?php
        }
        ?>
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
  <script src="../Js/modalFormulaire.js" type="text/javascript"></script>
</html>
