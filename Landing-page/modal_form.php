
<!-- modal du formulaire de connexion -->
    <form id="formConnexion" class="formulaire col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4" action="../Controller/formCtrl.php" method="post">
      <div class="col-xs-1 col-xs-offset-11">
        <button onclick="fermer();" class="close" type="button" name="button">&times;</button>
      </div>
      <div class="col-xs-6 col-xs-offset-3">
        <label>Se connecter</label>
      </div>
      <div class="col-xs-12">
        <input type="email" name="email" value="<?php if($email){echo $email;} ?>" placeholder="Email">
      </div>
      <div class="col-xs-12">
        <input type="password" name="mdp" value="" placeholder="Mot de passe">
      </div>
      <div class="col-xs-6 col-xs-offset-3">
        <button class="bouton" type="submit" name="submitConnexion">Connexion</button>
        <?php
          if($message != null) {
        ?>
          <p><?php echo $message; ?></p>
        <?php
          }
        ?>
      </div>
    </form>
<!-- modal du formulaire d'inscription -->
    <form id="formInscription" class="formulaire col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4" action="../Controller/formCtrl.php" method="post">
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
          if($message != null) {
        ?>
          <p><?php echo $message; ?></p>
        <?php
          }
        ?>
      </div>
    </form>
