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

### Accès :
* accès au répertoire personnel : *chmod g+x* (exécution)
* accès au répertoire personnel sur le serveur : *chmod g+x/public.html*

* __Connexion au serveur__ mettre son propre mot de passe

## Connexion à la VirtualBox

#### Connexion à la VirtualBox via le terminal :
        ssh root@adresseIP
        password : TPweb2018
* aller dans __var/www/__ pour trouver le fichier *index.php*

#### Connexion par le gestionnaire de fichier Ubuntu
  * Autre emplacement

|catégorie                                                             | écrire :         
|----------------------------------------------------------------------|-------------------------------------:|
|  Connexion à un serveur | sftp://adresseIP
| id |root
| mot de passe | TPweb2018
| chemin | var/www

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

* utilisation de FileZilla :
* configurer la connexion sur le serveur:
* icone en dessous du button Fichier --> __Hote__ : asi-technoweb.insa-rouen.fr __Procotole__ : SFTP __Type d'authentification__ : Normale avec les identifiants usuels insa --> Connexion
* configurer les droits: onglet *site distant*: click droit sur le .php et dossier où il se trouve --> __Attributs du fichier__

## Point cours
  * nommage de variables : __$nomVariable[=valeur];__
  * référence : __&$var__
  * écrire : __echo__
  * variables superglobales :


  |catégorie                                                             | écrire :         
  |----------------------------------------------------------------------|-------------------------------------:|
  | $\_GLOBAL | contient des références sur variables *clés=nom des variables globales*
  | $\_GET | variable transmise par GET du protocole HTTP
  | $\_POST | variable transmise par POST du protocole HTTP

  * constantes : __define("CONSTANTE", valeur);__
        define("PHP", valeur);
        echo PHP; //Pas besoin de $ pour appeler une constante
  * Tableaux :
        __array([cle=>]valeur, ...);__
Ex :
        $tab=array("fruit"=>"pomme", 42, "legume"=>"salade", 1, "canape");
        //appel
        echo $tab[1] //affiche 42
        echo $tab["fruit"] //affiche "pomme"

#### fonctions :


|fonction                                                             | description :         
|----------------------------------------------------------------------|-------------------------------------:|
| count($array) |nombre d'éléments
| sort($array) |trie le tableau
| array_pop($array) | récupère et supprime le dernier élément d'une liste
| array_push($array, $element1, ..., $elementN) | ajoute _$element1,..., $elementN_ en fin de liste
| array_shift($array) | récupère et supprime le premier élément d’une liste
| array_unshift($array, $elem1, ...) | ajout d’éléments en début de liste
| array_merge($array1, $array2, ...) | fusionne plusieurs tableaux
| in_array($elem, $array) | recherche d’un élément dans un tableau
| array_key_exists($key, $array) | recherche une clef dans un tableau
| array_flip($array) | inverse les clef et les valeurs d’un tableau

#### variable
    * transtypage : __$res=(nouveau_type)$varInit__
    * tester valeur et type : __===___



|fonction                                                             | description :         
|----------------------------------------------------------------------|-------------------------------------:|
| string gettype($var) | type d'une variable
| is_integer($var) | test pour un integer
| is_double($var) | test double
| is_array($var) | test tableau
| boolean isset($var) | true si $var initialisée, false si $var==null ou non initialisée
| boolean empty($var) | true si $var n'est pas initialisé/vaut 0/vaut "0"/vaut null, false sinon
| boolean is_null($var) | test si $var==null ou non initialisée

#### boucles :
|for                                                             | while :         
|----------------------------------------------------------------------|-------------------------------------:|
| for ( $i =0; $i <N ; $i ++) {} | while {}
|foreach ( $tab as $val ) {} | do {} while()
|foreach ( $tab as $cle = > $val ) {}


  * commande shell : __'commande shell'__
  * ecrit le contenu du fichier __include_once("fichier");__
  * écrit contenu du fichier et s'arrête en cas d'erreur __require_once("fichier");__

#### Chaînes de caractères :
    * $toto="Mot"
      * 'Texte $toto' = Texte $toto
      * "Texte $toto" = Texte Mot

|description                                                             | fonction :         
|----------------------------------------------------------------------|-------------------------------------:|
| Longueur | int strlen(string $ch)
| Répétition | string str_repeat(string $cr, int nb)
| Minuscules | string strtolower(string $ch)
| Majuscules | string strtoupper(string $ch)
| Initiales en majuscules | string ucwords(string $ch)
| 1 ere lettre en majuscule | string ucfirst(string $ch)
| Suppression de caractères en début de chaîne | string ltrim(string $ch, string liste)
| Suppression de caractères en fin de chaîne | string rtrim(string $ch, string liste)
| Suppression de caractères en début et fin de chaîne | string trim(string $ch, string liste)
| Recherche sensible à la casse (retourne tous les caractères de $ch depuis la 1 ere occurence de $ch2 jusqu’à la fin) | string strstr(string $ch, string $ch2)
|Recherche insensible à la casse | string stristr(string $ch, string $ch2)
|Extraction de chaînes de caractères | string substr(string $chr, int indice, int N)
|Décompte du nombre d’occurences d’une sous-chaîne | int substr_count(string $ch, string $ssch)
|Remplacement | string str_replace(string $oldssch, string $newssch,string $ch)
|Position | int strpos(string $ch, string $ssch)

#### Expression rationnelle :


  |description                                                             | fonction :         
  |----------------------------------------------------------------------|-------------------------------------:|
  | "*caractère*" ou '*caractère*' | caractère
  | [xyz] ou [a_z] | classe de caractères
  | [[:digit:]] | chiffres

#### Cardinalité

|description                                                             | syntaxe :         
|----------------------------------------------------------------------|-------------------------------------:|
|0 ou 1 fois | ?
|Au moins une fois | +
|0, 1 ou plusieurs fois | *
|Exactement n fois | "{n}"
|Au moins n fois | "{n,}"
|Entre n et m fois | "{n,m}"
|Groupements | ()
|Alternative | | |

##### Fichiers

|description                                                             | fonction :         
|----------------------------------------------------------------------|-------------------------------------:|
| Ouverture | $fichier=fopen("NOM", "MODE");
| Verrouillage d’un fichier | bool flock($fichier, int $operation)
|Fermeture | fclose($fichier);
|Présence | file_exists($fichier);
|Lecture d’une ligne |string fgets($fichier [, integer nbOctets])
|Lecture d’un caractère |string fgetc($fichier)
|Ecriture d’une ligne |integer fputs($fichier, string)
|Test de fin de fichier | boolean feof($fichier)
|Positionnement | fseek($fichier, int $position);

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

    <?php
      header('Content-Type:text/html;charset=UTF-8');
      setlocale(LC_TIME,"fr_FR.utf8");
      require('forum.inc.php');
    ?>
    <!DOCTYPE html>
      <html>
        <head>
          <title> Forum ASI </title>
          <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
          <link href ="style.css" rel="stylesheet" type="text/css" />
          <link href ="Ressources/style.css" rel="stylesheet" type="text/css"/>
        </head>
        <body>
        <header id="top">
          <img id="logo" src="Images/logo-asi.png" alt="ASI" width="125" height="58" />
          <h1> Forum ASI </h1>
        </header>
        <p id ="probleme"> </p>
        <form name ="formulaire" action ="forum.php" method ="post">
          <fieldset>
            <legend> Coordonnées : </legend>
            <label for ="name"> Nom : </label> <input placeholder="Saisissez votre nom" id="name" name ="name" type="text" size="30" />
            <label for ="email">E-mail : </label> <input placeholder="Saisissez votre email " id ="email" name ="email" type ="text" size="30"/>
          </fieldset>
          <fieldset>
            <legend> Message : </legend>
            <textarea rows ="4" cols ="50" id="message" name="message"> </textarea>
          </fieldset>
          <input type="button" value="Poster le message" onclick="Javascript:verification();"/>
          <input type ="button" value="Effacer" onclick="Javascript:nettoyage();"/>
        </form>
        <?php //enregistrement du message si submit
          if (isset($\_POST) && !empty($_POST['name'])) {
            $message=construireMessage($_POST['name']."(".$_POST['email'].")",$_POST['message']);
            ecrireMessage('/tmp/livredor.dat', $message);
          }
        ?>
        <h1> Liste des messages postés </h1>
        <? php // affichage du livre d ’ or
          foreach(lireMessages('/tmp/livredor.dat') as $message):
        ?>
        <table>
          <tr>
            <td class="date"> <?php echo htmlentities($message[0])?> </td>
            <td class="auteur"> <?php echo htmlentities($message[1])?> </td>
          </tr>
          <tr>
          <td colspan="2"><pre> <?php echo htmlentities($message[2])?> </pre> </td>
          </tr>
        </table>
        <?php
          endforeach;
        ?>
        <footer>
          <style type="text/css" scoped>
            object{overflow : auto;}
          </style>
          <style type="text/css" scoped>
            p #probleme{color:Red;}
          </style>
          <script type ="text/javascript">
            function verification() {
            var emailBox=document.getElementById("email");
            var probleme=document.getElementById("probleme");
            if (emailBox.value==" ") {
              if (!probleme.hasChildNodes()) {
                emailBox.style.outline="solid Red";
                probleme.appendChild(document.createTextNode("Champ obligatoire."));
              }
              } else {
                document.forms['formulaire'].submit();
              }
            };
            function nettoyage() {
              if (confirm('Etes vous sur ?')) {
                document.getElementById("email").style.outline="initial";
                var probleme=document.getElementById("probleme");
                if (probleme.hasChildNodes()) {
                  probleme.removeChild(probleme.childNodes.item(0));
                }
                document.forms['formulaire'].reset();
              }
            };
          </script>
        </footer>
      </body>
    </html>
