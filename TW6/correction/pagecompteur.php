<?php require(’compteur.php’); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <title> Compteur </title>
  </head>
  <body>
    <p> Compteur de hits : <?php echo compteur(’/tmp/compteur.txt’); ?> </p>
  </body>
</html>
