##CR 7

###### Compteur visite de page
* soit par un fichier texte où on enregistre combien des fois on lance la personnage
* soit directement en utilisant __$_SESSION__

* utilisation de FileZilla :
 * configurer la connexion sur le serveur: icone en dessous du button Fichier --> __Hote__ : asi-technoweb.insa-rouen.fr __Procotole__ : SFTP __Type d'authentification__ : Normale avec les identifiants usuels insa --> Connexion
 * configurer les droits: onglet *site distant*: click droit sur le .php et dossier où il se trouve --> __Attributs du fichier__

##### Configuration de la VirtualBox
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
* Le serveur web, tournant sur la Virtual Box, est accessible en SSH et en SFTP. Les informations de connexion sont : root / TPweb2018.
* Attention, dans Firefox, si vous souhaitez pouvoir accéder à la fois au serveur web et aux sites extérieurs, pensez à ajouter votre site dans la liste des exceptions du proxy.
