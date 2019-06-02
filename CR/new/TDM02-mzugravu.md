# CR TDM02 XML
*Noémie PRIN et Maria-Bianca ZUGRAVU*


#### Points importants CM
* __(EMPTY|ANY)__ peut être vide ou contenir n'importe quel élément de la dtd.
* XML est une forme extensible de HTML: __définition de balises__ (en HTML les balises et les sémantiques associées sont prédéfinies)
* Les fichiers xml peuvent être utilisés avec les protocoles HTTP, URL
* Un document XML est une structure logique __arborescente__.

On utilise un élément(__balise__) lorsque:

  - le contenu comporte plusieurs mots

  - l'ordre est important (__il n'y a pas d'ordre sur les attributs__)

On utilise un __attribut__ lorsque:

  - l'info qu'on veut définir modifie la balise :

          <liste type="numerotee"> ... </liste>

  - si on veut controler les valeurs

  - l'info est un id

__Déclaration d'un attribut__:

          <!ATTLIST element attribut type value>


__value__ :

 * une valeur par défaut spécifiée entre guillemets:

        <personne individual_id="e10001">

 * __#REQUIRED__ : instanciation de l'attribut obligatoire. ne fonctionne pas dans toutes les configurations
 * __#IMPLIED__ : valeur d'attribut optionnelle, instanciation non obligatoire
 * __#FIXED 'val'__ : valeur constante

__type__:

 * __CDATA__ : chaîne de caractère
 * __(a|b)__ : valeurs possibles
 * __ID__ : 2 valeurs d'attributs d'un élément utilisé 2 fois ne peuvent être les mêmes
 * __IDREF__ : si référence à un seul ID d'un autre attribut
 * __IDREFS__ : référence à plusieurs ID d'attribut (__chaque valeur est séparée par un espace__)
 * __ENTITY__
 * __NOTATION__

__Cardinalités__ :

 * __+__ : 1 -> inf
 * * : 0 ou inf
 * __?__ : 0 ou 1
 * __e1 | e2__

          <!ELEMENT nomElement (element1+, element28,element3?)>

Un élément peut contenir:

- uniquement des données: __PCDATA__

          <!ELEMENT nomElement (#PCDATA)>

- uniquement d'autre éléments:

          <!ELEMENT nomElement (element1,element2,...)>

- des données et d'autre éléments:

          <!ELEMENT type(#PCDATA|element1|element2)>


  __Exemple DTD__

          <?xml version="1.0" encoding="UTF-8"?>
          <!ELEMENT personne (identite, activite*)>
          <!ELEMENT identite (prenom, nom)>
          <!ELEMENT prenom (#PCDATA)>
          <!ELEMENT nom (#PCDATA)>
          <!ELEMENT activite (#PCDATA)>

  __Exemple arbre XML__

          <?xml version="1.0" encoding="UTF-8" standalone="no"?>
          <!DOCTYPE arbre SYSTEM "./personne.dtd" >
          <arbre>
            <personne individual_id="e10001" parent_id="e10002 e10003">
              <prenom>Bart</prenom><nom>Simpson</nom>
            </personne>
            <personne individual_id="e10002">
              <prenom>Homer</prenom><nom>Simpson</nom>
            </personne>
            <personne individual_id="e10003">
              <prenom>Marge</prenom><nom marital="oui">Simpson</nom><nom>Bouvier</nom>
            </personne>
          </arbre>



__Entité__ : alias pour un groupe de données

__Composition d'une DTD dans une DTD__:

          <!ENTITY %secondeDTD SYSTEM "secondeDTD.dtd">
          ...
          %secondeDTD;

__Notation__:

 * identifie par un nom le format des entités non analysées par le parseur XML
 * définit le format des données et les applications qui permet de les traiter

          <!NOTATION nomNotation SYSTEM|PUBLIC "notation">
          <!NOTATION GIF SYSTEM "GIF">

##### Structure d'un document XML

* __Prologue__ :
  * déclaration XML:

        <?xml version="1.0" encoding="UTF-8" standalone="no"?>
 *standalone* : la présence ou non de références externes
  * déclaration de type:

        <!DOCTYPE bibliographie SYSTEM "bibliographie.dtd">
  * instructions de traitement:

          <?xml-stylesheet type="text/css" href="bibliographie.css" ?>

 Instructions "facultatives". Leur contenu est transmis à une application pour traitement.

        <cible arg1="val1" arg2="val2" ... >

   * *cible*: nom d'une application
   * arguments passés à l'application cible

* __Arbre des éléments__ :
  * éléments (balises)
  * attributs
  * entités


### DTD

*Une DTD sert à définir la grammaire d'un document XML. Donc, elle facilite la validation de document et l'échange de fichiers.*

* DTD *externe local* : *SYSTEM*
* DTD *externe publique* : *PUBLIC*
* dans le fichier .dtd il n'y a pas de < __!DOCTYPE__ > ; il sert à définir les relations parent-fils, les cardinalités,  l'enchaînement;

Erreurs typiques :

 * indentation
 * balises mal placées, fermetures oubliées
 * conformité avec la dtd
 * *à vérifier : encodage, mettre utf-8*

Exemple :
        <!-- dtdid.dtd -->
        <!ELEMENT e1 (e2 | e3 | e4)* >
        <!ELEMENT e2 (#PCDATA)>
        <!ELEMENT e3 (#PCDATA)>
        <!ELEMENT e4 (#PCDATA)>
        <!ATTLIST e2 id ID #REQUIRED>
        <!ATTLIST e3 ref IDREF #IMPLIED>
        <!ATTLIST e4 refs IDREFS #IMPLIED>

        <?xml version="1.0" encoding="utf-8"?>
        <e1>
            <e2 id="id1">...</e2>
            <e2 id="id2">...</e2>
            ...
            <e3 ref="id1"/>
            ...
            <e4 refs="id1 id2"/>
        </e1>

#### CSS

* Remarque : Pour placer la ponctuation, on est obligé de les placer après/avant chaque type plutôt que d'utiliser un sélecteur global (comme AllOf) et d'ajouter une exception.

#### Remarques pratiques

* Un document possède une racine et une seule!

* Si un document n'a pas de DTD on doit préciser ça dans sa déclaration XML: __standalone__

* Un document sans DTD peut être affiché mais ne peut pas être interprété.

* Un document est dit __valide__ s'il est conforme à sa DTD.

* Un document est dit __bien formé__ s'il respecte la syntaxe XML(même s'il n'a pas de DTD)

* __CDATA dans XML__ indique à l'analyseur de ne pas tenir compte du balisage. Utile lorsque l'on inclut du Javascript à XML.

* Le prologue d'une DTD est identique au celui pour un XML, excepté standalone et DOCTYPE qui n'ont pas de sens. __Une DTD n'a pas nécessairement de prologue.__


## Scripts

## Serveur bibliographique (1) : XML et CSS

__Enoncé:__ On définit une bibliographie comme un ensemble de publications. Une publication est composée d’un titre, d’une liste d’auteurs (auteurs), d’un ensemble de pages (au moins une ; ex : 200-210) et d’une annee de publication. Une publication est caractérisée par un type (soit article, soit conference). Un (auteurs) est un ensemble d’auteurs.

##### bibliographie.dtd

          <?xml version="1.0" encoding="UTF-8"?>
            <!ELEMENT bibliographie (publication+)>
            <!ELEMENT publication (titre,auteurs+,pages+,annee)>
            <!ATTLIST publication type (ARTICLE|CONFERENCE) #REQUIRED>
            <!ELEMENT titre (#PCDATA)>
            <!ELEMENT auteurs (auteur+)>
            <!ELEMENT auteur (#PCDATA)>
            <!ELEMENT pages (#PCDATA)>
            <!ELEMENT annee (#PCDATA)>

##### bibliographie.xml

          <?xml version="1.0" encoding="UTF-8" standalone="no"?>
          <!DOCTYPE bibliographie SYSTEM "bibliographie.dtd">
          <?xml-stylesheet type="text/css" href="bibliographie2.css" ?>
          <bibliographie>
            <publication type="CONFERENCE">
              <titre>Noémie and Bianca are awesome</titre>
              <auteurs>
                <auteur>Bianca</auteur>
                <auteur>Noémie</auteur>
              </auteurs>
              <pages>500</pages>
              <annee>2019</annee>
            </publication>

            <publication type="ARTICLE">
              <titre>Noémie and Bianca are still awesome</titre>
              <auteurs>
                <auteur>Malandain</auteur>
                <auteur>Delestre</auteur>
              </auteurs>
              <pages>600</pages>
              <annee>2019</annee>
            </publication>
          </bibliographie>


##### bibliographie.css

          * {}
          publication {
            display: block;
            background-color: pink;
            padding-left: 10px;
            width: 500px;
            font-family: arial ;
            color: black;
            font-size: 12pt ;
          }
          titre, auteurs, auteur, annee, pages {
            display: inline;
          }
          auteur:after, pages:after {
            content: ", "; /*des virgules apparaissent entre chaque élément*/
          }
          titre:before {
            content: "\"";
          }
          titre {
            font-style: italic; /*le titre apparait entre guillemets et en italiques,*/
          }
          titre:after {
            content: "\"";
          }
          pages:before {
            content: "pp. ";
          }
          annee:after {
            content: "."; /*un point est ajouté à la fin de chaque publication*/
          }
          publication {
            margin-bottom: 10px;
          }
