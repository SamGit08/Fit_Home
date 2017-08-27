<section class="row">
  <h1 class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3"><?php
    print strtoupper($_SESSION['prenom'])." ".strtoupper($_SESSION['nom']); ?></h1>
  <form class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3" action="../Controller/index.php?page=../View/main.php" method="post">
    <div class="col-xs-12">
      <input type="number" name="taille" value="" placeholder="Votre taille (en cm)">
    </div>
    <div class="col-xs-12">
      <input type="number" name="poids" value="" placeholder="Votre poids (en kg)">
    </div>
    <div class="col-xs-12">
      <button class="bouton" type="submit" name="button">Calculer l'IMC</button>
      <!-- calcul de l' IMC -->
      <h2>IMC: <?php
      if(isset($imc)){
        print $imc." kg/m2";
        if(($imc >= 18) && ($imc <= 25)){
          print '<p style="color: rgb(171, 255, 147)">Corpulence normale</p>';
        }elseif($imc < 18){
            print '<p style="color: rgb(240, 152, 25)">Maigreur</p>';
          }elseif($imc > 25){
            print '<p style="color: rgb(255, 115, 115)">Surpoids</p>';
          }
        }
      ?></h2>
    </div>
  </form>
</section>
</body>
<script src="../Model/js/app.js" type="text/javascript"></script>
</html>
