# Compte-rendu TP 3: JAVASCRIPT

* <span style="color:red"> __Bonnes pratiques__ </span>:

 * placer le script Java dans le <__footer__> ou dans  le <__head__>
 * à cause du traitement séquentiel des pages par le navigateur si on place les scripts dans le <__footer__> ils vont être interprétés après les chargements des éléments visuels
 * appel d'une fonction ou exécution d'une commande Javascript dans le < __body__ >
 * utilisation du JAVASCRIPT dans une URL

 <*p*>
 Dans une fonction appelée en cliquant <*a href="javascript:appel_fonction()"*> ici <*/a*>
 <*p*>

 * __Syntaxe générale du script :__

        <script type="text/javascript">

        // < !--

        Code JAVASCRIPT

        // -- >
        </script>


* <span style="color:red"> __Notions importantes : __ </span>

 * __getElementByTagName(tagname)__ ressort un tableau
 * __getElementById(elementID)__ ressort un seul élément
 * Une __nodeList__ est un tableau d'éléments, comme celui qui est renvoyé par la méthode __document.getElementsByTagName()__. Les éléments d'une nodeList sont accessibles par un index de deux manières différentes :

    * list.item(1)
    * list[1]



#### Question 1: Calculatrice

* <span style="color:red"> __Quelques méthodes utiles__ </span>:
  * __getElementById()__: retourne un élément représentant l'élément dont l'ID correspond à la chaîne entrée

   __Syntaxe__ : var element = document.getElementById(id);
  * __createTextNode()__:

   __Syntaxe__ : var text = document.createTextNode(données);

    *texte* est un nœud de texte;
    *donnees* est une chaîne contenant les données à placer dans le nœud de texte.

 * __insertBefore()__ : pour insérer un noeud comme étant un fils, juste avant un fils existant, que l'on spécifie; cette méthode pourrait être utile pour déplacer un élément existant


#### Question 2: Calculatrice v2

* à l'aide de <__onclick="calculer()"__> on fait l'appel au Javascript pour donner le résultat
* evenements d'exécution de la fonctino :
  * __onclick__
  * __onmouseover__
  * __onfocus__
  * __onselect__
  * __onchange __: modification du contenu
  * __onsubmit__ : pour un formulaire
  * __onload__ : au chargement d'un formulaire
  * __onunload __: à la fermeture d'un élément chargé ou au chargement d'une autre page que la courante

* à l'aide de la méthode <span style="color:red"> __value__ </span> on peut interpreter l'opération entrée par l'utilisateur :

  __Syntaxe__ : var expression = document.getElementById("expression").__value__

* __à propos du Javascript__:
  On a 2 cas à traiter en fonction du choix de l'affichage. Pour faire ceci on rajoute une fonction test qui retourne un int correspondant au choix (0: champ texte, 1: fenêtre alerte et -1: si aucun choix a été effectué).

  * Petites remarques:
    * on peut utiliser __radio.length__ pour compter combien d'éléments de type radio ont été définis
    * on utilise une notation pointée par __affichage__ pour indiquer qu'on veut passer comme paramètres seulement les éléments qui ont le __name__ = "affichage" qui sont compris dans <__form__>
    * les éléments qui ont le même nom sont régroupés dans un tableau qui a pour nom le type de ces éléments.

          <input type= __"radio"__ name=__"affichage"__ id= "texte" checked= "checked"/>

          <input type= __"radio"__ name= __"affichage"__ id= "pop-up" />

          if (__radio[i]__.checked)

  __Syntaxe__: test(document.getElementById("formulaire").__affichage__)


#### Question 3: Gestion d'un horloge

* La seule façon d'instancier un object __Date__ c'est de passer par l'opérateur __new__:

__Syntaxe__ : var maintenant = __new__ Date()

* Si on appele simplement Date() la valeur retournée est un string et pas un object de type Date. On peut aussi fait un appel : *new Date(value)* (ex: var date = new Date('December 17, 1995') qui nous retourne un object de type Date qui a pour valeur le string entré)


<span style="color:red"> __Quelques méthodes utiles__: </span>


* __body.appendChild(date)__ : on insére la date après le fils de <*body*>
* __getDate()__ : pour retourner l'object de type Date
* __getMonth()__ __getFullYear()__ __getHours()__ etc
* __body.replaceChild(date)__ : remplacer le fils de <*body*> par *date*
* __getElementByTagName()__ : *document.getElementsByTagName("body")[0]*  : on accède au premier élément du <*body*>


#### Question 4: Gestion de fenêtrage

* __window.open("correctionV1.html" ,"Calculette")__ : pour ouvrir un script html
__Syntaxe générale__ :  *window.open(URL, name, specs, replace)*
* Question : Pour les 3 on a "Calculette" comme name, pourtant la fenêtre ouverte porte les noms de chaque script: Calculette, Horloge, Calculette 2 ??


#### Question 5: Forum ASI
#### Remarques pratiques
#### Points importants CM
#### Scripts
