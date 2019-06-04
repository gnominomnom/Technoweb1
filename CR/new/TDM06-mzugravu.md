#CR 6
*Noémie PRIN et Maria-Bianca ZUGRAVU*



## Configuration de la VirtualBox
* Lancez Virtual Box Importez l’image : « Fichier » > « Importer un appareil virtuel »
* Sélectionnez dans /opt/ova, l’ova de TP_WEB (tp_web.ova)
* importez-le
* Avant de la lancer, sélectionnez le réseau hôte (« Fichier » > « Host Network Manager » ).
* Si vboxnet0 n’est pas présent, ajoutez-le (bouton « Créer » en haut à gauche).
* Fermez la fenêtre avec le bouton « fermer » en bas à droite.
* Faites un clique gauche sur TP_WEB et cliquez sur le bouton « Configuration »
* Sur cette fenêtre cliquez sur « Réseau » .
* Défilé le menu déroulant « Mode d’accès réseau » et sélectionnez « Réseau privé hôte »
* Une fois sélectionné, le « Nom » devrait prendre automatiquement la valeur vboxnet0. Sinon défiler le menu déroulant et sélectionner celui-ci.
* Tout est bon ! Il ne vous reste plus qu’à lancer votre machine virtuelle, jusqu’à obtenir l’écran vous fournissant l’adresse IP à vous connecter en SFTP, SSH et bien sûr HTTP.
* Durant l’examen, vous travaillerez dans le répertoire web par défaut du serveur (var/www). Vous y déposerez vos fichiers qui seront donc accessibles depuis la racine du serveur web.
* Le serveur web, tournant sur la Virtual Box, est accessible en SSH et en SFTP. Les informations de connexion sont : TPweb2018.
* Attention, dans Firefox, si vous souhaitez pouvoir accéder à la fois au serveur web et aux sites extérieurs, pensez à ajouter votre site dans la liste des exceptions du proxy.

##### Accès :
* accès au répertoire personnel : *chmod g+x* (exécution)
* accès au répertoire personnel sur le serveur : *chmod g+x/public.html*

* __Connexion au serveur__ mettre son propre mot de passe

##### Connexion à la VirtualBox

### Connexion à la VirtualBox via le terminal :
        ssh root@adresseIP
        password : TPweb2018
* aller dans __var/www/__ pour trouver le fichier *index.php*

### Connexion Dans FileZilla

* Gestionnaire de sites
  * Nouveau Site


|catégorie                                                             | écrire :         
|----------------------------------------------------------------------|-------------------------------------:|
| Hôte  | IP
| Protocole |  SFTP
| Type d'authentification | Normale
| Id | root
| Mot de passe | TPweb2018

-> valider
    *
* utilisation de FileZilla :
* configurer la connexion sur le serveur:
* icone en dessous du button Fichier --> __Hote__ : asi-technoweb.insa-rouen.fr __Procotole__ : SFTP __Type d'authentification__ : Normale avec les identifiants usuels insa --> Connexion
* configurer les droits: onglet *site distant*: click droit sur le .php et dossier où il se trouve --> __Attributs du fichier__

## Scripts
#### Compteur visite de page

* soit par un fichier texte où on enregistre combien des fois on lance la personnage
* soit directement en utilisant __$_SESSION__

__Enoncé__

L’objectif de l’exercice est de développer le code nécessaire à la création d’un compteur sur une page web. Ce compteur s’incrémentera à chaque chargement de la page (i.e. depuis plusieurs postes différents).

__Script à nous sans fichier texte__

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


__Correction avec fichier texte__

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



#### Forum ASI (4) : PHP, 1ère version

__Enoncé__

L’objectif de l’exercice est de développer le code nécessaire à l’affichage de messages en mode anonyme, dans le forum ASI.
Vous développerez une page affichant:
— un formulaire identique à celui réalisé au cours du TDM sur Javascript,
— la liste des messages précédemment déposés.
Les différents messages seront sauvegardés dans un fichier côté serveur, dans le répertoire /tmp.
Le script devra afficher en dessous du formulaire un tableau qui contiendra tous les messages formatés comme suit : sur la première ligne, la date où le message a été enregistré suivi du nom avec l’email entre parenthèse, et sur la deuxième ligne le message enregistré.
Pensez également à mettre à jour la CSS pour un affichage plus propre de la liste de messages.


__Script__
