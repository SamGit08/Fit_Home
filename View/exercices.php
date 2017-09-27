<?php session_start(); ?>
<section class="row">
  <h1 class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3">EXERCICES</h1>
  <?php foreach ($exercices as $exercice): ?>
    <div class="video col-xs-12 col-md-6">
      <h2><?php echo  strtoupper($exercice['nomExercice']); $video = substr($exercice['video'], 32); ?></h2>
      <object class="col-xs-12 " height="320" data=https://www.youtube.com/embed/<?php echo $video; ?>></object>
      <button class="col-xs-4 col-md-4 bouton ajout" type="button" name="button">Ajouter</button>
      <button class="col-xs-4 col-md-4 bouton modif" type="button" name="button">Modifier</button>
      <button class="col-xs-4 col-md-4 bouton suppr" type="button" name="button">Supprimer</button>
    </div>
  <?php endforeach ?>
  <form id="formExo" class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3" action="../Controller/formCtrl.php" method="post">
    <div class="col-xs-12">
      <input type="text" name="nomExercice" value="" placeholder="Nom de la video">
    </div>
    <div class="col-xs-12">
      <input type="text" name="video" value="" placeholder="lien YouTube">
    </div>
    <div class="col-xs-12">
      <button class="bouton" type="submit" name="button">Soumettre</button>
      <button class="bouton" onclick="hide();" type="button" name="button">Annuler</button>
    </div>
    <p> <?php print $erreur; ?></p>
  </form>
  <button class="col-xs-4 col-md-12 bouton ajout" onclick="show();" type="button" name="button">Créer un exercice</button>
  </section>
</body>
<script src="../Js/menuBurger.js" type="text/javascript"></script>
<script src="../Js/form.js" type="text/javascript"></script>
</html>
