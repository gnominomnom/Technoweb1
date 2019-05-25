### CR 5 HTTP

#### 1. Serveur Web Apache HTTP

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

##### Exercice 3 : Modification de la page d'inscription pour que le traitement du formulaire soit effectué en POST par le CGI

 Pareil : <*form action="http://asi-technoweb.insa-rouen.fr/cgi-bin/inscription-get.cgi" action="POST*>

#### Différence entre GET et POST
Au niveau de lien sur le navigateur: pour __GET__ on obtient un lien qui contient les donnees transmises par le formulaire, separees par des caracteres speciaux representant les espaces entre les differents elements.

#### Différence entre GET interne et externe



#### 2. Protocole HTTP

#### Remarques pratiques
#### Points importants CM
#### Scripts
