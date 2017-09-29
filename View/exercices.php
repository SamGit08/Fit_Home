<?php session_start(); ?>
<section class="row">
  <h1 class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3">EXERCICES</h1>
  <?php foreach ($exercices as $exercice):?>
    <div id="form" class="video col-xs-12 col-md-6">
      <?php $video = substr($exercice['video'], 32); ?>
      <h2><?php echo strtoupper($exercice['nomExercice']);?></h2>
      <object class="col-xs-12 " height="320" data=https://www.youtube.com/embed/<?php echo $video; ?>></object>
    </div>
    <p><?php echo $erreurSuppr; ?></p>
  <?php endforeach ?>
  <!-- formulaire de creation d'exercices -->
  <form id="formExo" class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3" action="../Controller/formCtrl.php" method="post">
    <div class="col-xs-12">
      <input class="col-xs-10 col-xs-offset-1" type="text" name="nomExercice" value="" placeholder="Nom de la video">
    </div>
    <div class="col-xs-12">
      <input class="col-xs-10 col-xs-offset-1" type="text" name="video" value="" placeholder="lien YouTube">
    </div>
    <div class="col-xs-12">
      <button class="bouton" type="submit" name="button">Soumettre</button>
      <button class="bouton" onclick="hideExo();" type="button" name="button">Annuler</button>
    </div>
    <p> <?php print $erreur; ?></p>
  </form>
  <!-- formulaire de modification d'exercices -->
  <form id="modifExo" class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3" action="../Controller/formCtrl.php" method="post">
    <div class="col-xs-12">
      <input class="col-xs-10 col-xs-offset-1" type="text" name="nomActuel" value="" placeholder="Nom de la video à modifier">
    </div>
    <div class="col-xs-12">
      <input class="col-xs-10 col-xs-offset-1" type="text" name="nouveauNom" value="" placeholder="Nouveau nom de la video">
    </div>
    <div class="col-xs-12">
      <input class="col-xs-10 col-xs-offset-1" type="text" name="lienModif" value="" placeholder="Lien de la video">
    </div>
    <div class="col-xs-12">
      <button class="bouton" type="submit" name="button">Soumettre</button>
      <button class="bouton" onclick="hideModif();" type="button" name="button">Annuler</button>
    </div>
    <p> <?php print $erreur; ?></p>
  </form>
  <!-- formulaire de suppression d'exercices -->
  <form id="supprExo" class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3" action="../Controller/formCtrl.php" method="post">
    <div class="col-xs-12">
      <input class="col-xs-10 col-xs-offset-1" type="text" name="exerciceSuppr" value="" placeholder="Nom de la video à supprimer">
    </div>
    <div class="col-xs-12">
      <button class="bouton" type="submit" name="button">Soumettre</button>
      <button class="bouton" onclick="hideSuppr();" type="button" name="button">Annuler</button>
    </div>
    <p> <?php print $erreur; ?></p>
  </form>
  <!-- boutons d'ouverture des formulaires -->
  <div class="col-xs-12 col-md-offset-2 col-md-8">
    <div class="col-md-4">
      <button class="bouton ajout" onclick="showExo();" type="button" name="button">Ajouter un exercice</button>
    </div>
    <div class="col-md-4">
      <button class="bouton modif" onclick="showModif();" type="button" name="button">Modifier un exercice</button>
    </div>
    <div class="col-md-4">
      <button class="bouton suppr" onclick="showSuppr();" type="button" name="button">Supprimer un exercice</button>
    </div>
  </div>
  </section>
</body>
<script src="../Js/menuBurger.js" type="text/javascript"></script>
<script src="../Js/form.js" type="text/javascript"></script>
</html>
