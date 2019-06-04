<!DOCTYPE html>
<html>
  <head>
    <title>Compteur</title>
    <meta http-equip="content-type" content="text/html; charset=utf-8"/>
  </head>
  <header>
  </header>
  <body>
    <a href="TW5/correction4.html"> Nouvelle page </a>
    <?php
      function compteur() {
      var $debut=session_start();
      if (isset($_SESSION['compteur'])) {
        $_SESSION['compteur']++;
      }
      else {
        $_SESSION['compteur']=0;
      }
      print($SESSION['compteur']);
    }
    ?>
  </body>
  <footer>
  </footer>
</html>
