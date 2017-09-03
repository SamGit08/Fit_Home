<?php session_start(); ?>
  <section class="row">
    <h1 class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3"><?php
      print strtoupper($_SESSION['prenom'])." ".strtoupper($_SESSION['nom']); ?></h1>
    <form class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3" action="../Controller/membreCtrl.php?page=../View/main.php" method="post">
      <div class="col-xs-12">
        <input type="number" name="taille" value="" placeholder="Votre taille (en cm)">
      </div>
      <div class="col-xs-12">
        <input type="number" name="poids" value="" placeholder="Votre poids (en kg)">
      </div>
      <div class="col-xs-12">
        <button class="bouton" type="submit" name="button">Calculer votre IMC</button>
        <!-- calcul de l' IMC -->
        <h2>IMC: <?php if(isset($imc)){print $imc;} ?> kg/m2</h2>
        <?php if(($imc >= 18) && ($imc <= 25)){ ?>
          <p class="normal"><?php print $note; ?></p>
          <?php }elseif($imc < 18){ ?>
            <p class="maigre"><?php print $note; ?></p>
          <?php }elseif($imc > 25){ ?>
            <p class="surpoids"><?php print $note; ?></p>
            <?php } ?>
      </div>
    </form>
  </section>
</body>
<script src="../Model/js/app.js" type="text/javascript"></script>
</html>
