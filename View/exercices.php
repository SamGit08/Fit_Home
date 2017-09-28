<?php session_start(); ?>
<section class="row">
  <h1 class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3">EXERCICES</h1>
  <?php foreach ($exercices as $exercice):?>
    <div id="form" class="video col-xs-12 col-md-6">
      <?php $video = substr($exercice['video'], 32); ?>
      <h2><?php echo strtoupper($exercice['nomExercice']);?></h2>
      <object class="col-xs-12 " height="320" data=https://www.youtube.com/embed/<?php echo $video; ?>></object>
      <div class="">
        <button class="col-xs-4 col-md-4 bouton ajout" type="button" name="button">Ajouter</button>
        <button class="col-xs-4 col-md-4 bouton modif" type="button" name="button">Modifier</button>
      </div>
    </div>
    <p><?php echo $erreurSuppr; ?></p>
  <?php endforeach ?>
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
  <div class="col-xs-12">
    <div class="col-xs-6 col-xs-offset-3 col-md-2 col-md-offset-4">
      <button class="bouton ajout" onclick="showExo();" type="button" name="button">Créer un exercice</button>
    </div>
    <div class="col-xs-6 col-xs-offset-3 col-md-3 col-md-offset-0">
      <button class="bouton suppr" onclick="showSuppr();" type="button" name="submitSuppr">Supprimer un exercice</button>
    </div>
  </div>
  </section>
</body>
<script src="../Js/menuBurger.js" type="text/javascript"></script>
<script src="../Js/form.js" type="text/javascript"></script>
</html>
