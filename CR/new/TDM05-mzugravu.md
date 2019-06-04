#  CR 5 HTTP

### Scripts

#### 1. Serveur Web Apache HTTP

### 1 Tester le script CGI

# mdp: TPweb2018

On le test le fichier __hello-perl.cgi__  directement dans le navigateur: http://asi-technoweb.insa-rouen.fr/cgi-bin/hello-perl.cgi

### 2 Test des script depuis le navigateur

__Connexion au serveur__ : ssh asi-technoweb.insa-rouen.fr

__Copier des fichiers dans /public-html__ :
 * on se deconnecte de ssh et on se place dans le repertoire depuis lequel on veut copier les fichiers à déposer sur le serveur --> commande __scp__ : * pour selectionner tous les fichiers

  scp * nprin@asi-technoweb.insa-rouen.fr:~/public_html/

__Pour ouvrir un fichier depuis serveur et dans navigateur__ : http://asi-technoweb.insa-rouen.fr/~nprin/<fichier_a_ouvrir.html>

##### Exercice 3 : Modification de la page d'inscription pour que le traitement du formulaire soit effectué en GET par le CGI
*Fichier modifié*: TP1/inscription.html

 * __externe__ : <*form action="http://asi-technoweb.insa-rouen.fr/cgi-bin/inscription-get.cgi" action="GET"*>
 * __en interne__ :   <*form action="/cgi-bin/nprin/inscription-get.cgi" method="GET"*>
 * __pour modifier directement dans le terminal__ : utilisation de __vim__

  * __vim nom_fichier__
  * i: pour inserer du texte et on se place où on veut faire l'insertion
  * __esc__ et __:wp__ pour sauvegarder
  * pour tout quitter: __:qa!__

__Script forum_ASI.php qui se trouve dans public-public_html__






##### Exercice 3 : Modification de la page d'inscription pour que le traitement du formulaire soit effectué en POST par le CGI

 Pareil : <*form action="http://asi-technoweb.insa-rouen.fr/cgi-bin/inscription-get.cgi" action="POST*>

#### Différence entre GET et POST
Au niveau de lien sur le navigateur: pour __GET__ on obtient un lien qui contient les donnees transmises par le formulaire, separees par des caracteres speciaux representant les espaces entre les differents elements.

#### Différence entre GET interne et externe

* __GET EXTERNE__: <*form name="formulaire" action="http://asi-technoweb.insa-rouen.fr/cgi-bin/inscription-get.cgi"*>
* __GET INTERNE__: <*form name="formulaire" action="/cgi-bin/inscription-get.cgi" method="get"*>
* __POST EXTERNE__: <*form name="formulaire" action="http://asi-technoweb.insa-rouen.fr/cgi-bin/inscription-post.cgi" method="post" enctype="application/x-www-form-urlencoded"*>
* __POST INTERNE__: <*form name="formulaire" action="/cgi-bin/inscription-post.cgi" method="post" enctype="application/x-www-form-urlencoded"*>
* __POST HOME__: <*form name="formulaire" action="/cgi-bin/apauchet/inscription-post.cgi" method="post" enctype="application/x-www-form-urlencoded"*>


#### 2. Protocole HTTP

### Test des requêtes aupres de la VirtualBox

__Connexion__ : *>>> ssh root@192.168.56.101*

mdp: *TPweb2018*

__Verifier les scripts php__ : directement dans le navigateur en tapant: 192.168.56.101 (l'ip trouvé dans la VirtualBox)

__Si on veut modifier les fichiers directement dans le repertoire local et pas en passant par le terminal__ : on clique sur __autres emplacements__. Puis dans le champ __Connexion à un serveur__: sftp://192.168.56.101/ et on se connecte (identifiant: __root__ mdp: __TWweb2018__). Puis le répertoire distant sera disponible et on retrouvera les fichiers .php qui nous intéressent dans *2REMOVE*

###### 1. Requête pour la date de dernière modification d’une page
* __si page modifiée depuis une certaine date__:

GET /~apauchet/index.html HTTP/1.1

Host: asi-technoweb.insa-rouen.fr

If-Modified-Since: 'Sun, 09 Sep 2007 17:00:00 GMT'
* __si la page n’a pas été modifiée depuis une certaine date__:

GET /~apauchet//index.html HTTP/1.1

Host: asi-technoweb.insa-rouen.fr

If-Unmodified-Since: 'Sun, 09 Sep 2007 17:00:00 GMT'

###### 2. Requête récupérant que les caractères 2 à 5 d’une page web
__Le premier caractere est a 0!__

GET /~apauchet/index.html HTTP/1.1

Host: asi-technoweb.insa-rouen.fr

Range: bytes=1-4

###### 3. Requête effectuant une négociation sur le type de média demandé
<span style="color:red"> 2 fichiers coexistent, image.png et image.jpg. </span>
* __negociation pour privilégier les images au format jpeg par rapport au format png__
HEAD /~apauchet/image HTTP/1.1

Host: asi-technoweb.insa-rouen.fr

Accept: image/jpeg; q=1, image/png; q=0.5
* __l'inverse__
HEAD /~apauchet/image HTTP/1.1

Host: asi-technoweb.insa-rouen.fr

Accept: image/jpeg; q=0.5, image/png; q=1

###### 4. Requêteavec négociation de contenu sur la langue

GET /~apauchet/index.html HTTP/1.1

Host: asi-technoweb.insa-rouen.fr

Accept-Language: en;q=0.5, fr;q=1

###### 5. Requête HTTP/1.1 sans connexion persistante
<span style="color:red"> Par défaut pour un telnet, la connexion n’est pas persistante avec un GET; il faut donc tester avec un HEAD. Pour netcat, la connexion est persistante avec un GET. </span>

HEAD /~apauchet/index HTTP/1.1

Host: asi-technoweb.insa-rouen.fr

Connection: close

###### 6. 2 requêtes retournant les codes suivants : 404, 501.
* __404__: *page inconnue*

HEAD /~apauchet/Fichier-N-Existant.pas HTTP/1.1

Host: asi-technoweb.insa-rouen.fr
* __501__: *commande inconnue*

COMMANDE-INCONNUE /~apauchet/index HTTP/1.1

Host: asi-technoweb.insa-rouen.fr


#### Remarques pratiques

__Comment donner les droit d'acces?__

* donner accès en exécution à leur répertoire personnel __chmod g+x~__
* donner accès en exécution, lecture et écriture à leur répertoire personnel : __dhmod g+x/~public_html__
* Pour les scripts CGI, une moulinette créé les liens symboliques depuis /var/www/cgi-bin/LOGIN vers
/home/pnom/cgi-bin. Les scripts CGI seront alors accessibles via l’URL racine http://asi-technoweb. insa-rouen.fr/cgi-bin/LOGIN/

#### Points importants CM
#### Scripts
