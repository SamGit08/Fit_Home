<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
  <?php require '../View/link.php'; ?>
  <body class="container-fluid">
    <?php
      require '../View/header.php';
      include $_GET['page'];
     ?>
  </body>
  <script src="../Model/js/app.js" type="text/javascript"></script>
</html>
