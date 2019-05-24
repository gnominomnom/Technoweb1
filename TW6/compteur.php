<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <title>Compteur PHP</title>
  </head>
  <body>
    <?php
    session_start();
    if (isset($_SESSION['views'])) {
        $_SESSION['views'] = $_SESSION['views']+1;
    }
     else {
        $_SESSION['views']=1;
      }
    echo "views = ".$_SESSION['views'];
    ?>
  </body>
</html>
