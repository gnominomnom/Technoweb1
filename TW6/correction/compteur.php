<?php
function compteur ($nomdufichier) {
  if (file_exists($nomdufichier)) {
    $fichier = fopen($nomdufichier,’r+’);
    flock($fichier,LOCK_EX);
    $compteur = fgets($fichier,100);
    if (empty($compteur))
      $compteur = 0;
    else
      settype($compteur,"integer");
    $compteur++;
 }else {
    $fichier = fopen($nomdufichier,’c’);
    flock($fichier,LOCK_EX);
    $compteur = 1;
  }
  fseek($fichier,0);
  fputs($fichier,$compteur);
  flock($fichier,LOCK_UN);
  fclose($fichier);
  return $compteur;
}
?>
