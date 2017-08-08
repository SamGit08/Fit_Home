<!-- modal du formulaire de connexion -->
    <form id="formConnexion" class="formulaire col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4" action="index.php" method="post">
      <div class="col-xs-1 col-xs-offset-11">
        <button onclick="fermer();" class="close" type="button" name="button">&times;</button>
      </div>
      <div class="col-xs-6 col-xs-offset-3">
        <label>Se connecter</label>
      </div>
      <div class="col-xs-12">
        <input type="email" name="mail" value="" placeholder="Email">
      </div>
      <div class="col-xs-12">
        <input type="password" name="mdp" value="" placeholder="Mot de passe">
      </div>
      <!-- condition if pour l'erreur de connexion -->
      <!-- <div class="col-xs-12">
        <p>votre mot de passe/email est incorrect !</p>
      </div> -->
      <!-- fin de la condition -->
      <div class="col-xs-6 col-xs-offset-3">
        <!-- mettre le bouton en type submit -->
        <button id="connexion" onclick='' class="bouton" type="button" name="button">Connexion</button>
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
        <input type="email" name="prenom" value="" placeholder="Prenom">
      </div>
      <div class="col-xs-12">
        <input type="email" name="mail" value="" placeholder="Email">
      </div>
      <div class="col-xs-12">
        <input type="password" name="mdp" value="" placeholder="Mot de passe">
      </div>
      <div class="col-xs-12">
        <input type="password" name="mdpConf" value="" placeholder="Confirmation mot de passe">
      </div>
      <!-- condition if pour l'erreur d'inscription -->
      <!-- <div class="col-xs-12">
        <p>Erreur à l'inscription !</p>
      </div> -->
      <!-- fin de la condition -->
      <div class="col-xs-6 col-xs-offset-3">
        <!-- mettre le bouton en type submit -->
        <button id="connexion" onclick='' class="bouton" type="button" name="button">Inscription</button>
      </div>
    </form>
