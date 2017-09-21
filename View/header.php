<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans|Oswald" rel="stylesheet">
    <link rel="stylesheet" href="../View/css/style.css">
    <title>Fit'Home - Mon espace</title>
  </head>
  <body class="container-fluid">
    <header>
      <img class="menuBurger" onclick="menuShowHide();" src="../View/images/menu.png" alt="">
      <img class="logo" src="../View/images/weights.png" alt="">
      <!-- menu navbar horizontal pour tablettes et ordinateurs -->
      <nav id='menu'>
        <div class="contacts col-xs-12">
          <a href="../Controller/membreCtrl.php?page=../View/main.php"><span>Accueil</span></a>
        </div>
        <div class="contacts col-xs-12">
          <a href="../Controller/membreCtrl.php?page=../View/exercices.php"><span>Exercices</span></a>
        </div>
        <div class="contacts col-xs-12">
          <a href="#"><span>Programmes</span></a>
        </div>
        <div class="contacts col-xs-12">
          <a href="#"><span>Progression</span></a>
        </div>
      </nav>
      <a href="../public/index.php"><button class="bouton" type="button" name="button">Déconnexion</button></a>
      <!-- menu burger pour mobiles -->
      <nav id='burger'>
        <div class="contacts col-xs-12">
          <a href="../Controller/membreCtrl.php?page=../View/main.php"><span>Accueil</span></a>
        </div>
        <div class="contacts col-xs-12">
          <a href="../Controller/membreCtrl.php?page=../View/exercices.php"><span>Exercices</span></a>
        </div>
        <div class="contacts col-xs-12">
          <a href="#"><span>Programmes</span></a>
        </div>
        <div class="contacts col-xs-12">
          <a href="#"><span>Progression</span></a>
        </div>
      </nav>
    </header>
