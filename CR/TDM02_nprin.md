# CR TP 2 XML
*Noémie PRIN et Maria-Bianca ZUGRAVU*


#### Points importants CM
<span style="color:red"> Structure d'un document XML </span>
* __Prologue__ :
 * déclaration XML: <?xml version="1.0" encoding="UTF-8" standalone="no"?>
 *standalone* : la présence ou non de références externes
 * déclaration de type: <!DOCTYPE bibliographie SYSTEM "bibliographie.dtd">
 * instructions de traitement:   <?xml-stylesheet type="text/css" href="bibliographie.css" ?>

 Instructions "facultatives". Leur contenu est transmis à une application pour traitement.

 __<?cible arg1="val1" arg2="val2" ... ?>__
  * *cible*: nom d'une application
  * arguments passés à l'application cible

* __Arbre des éléments__ :
 * éléments (balises)
 * attributs
 * entités


### DTD

* DTD *externe local* : *SYSTEM*
* DTD *externe publique* : *PUBLIC*
* dans le fichier .dtd il n'y a pas de < __!DOCTYPE__ > ; il sert à définir les relations parent-fils, les cardinalités,  l'enchaînement;
* Erreurs typiques :
  * indentation
  * balises mal placées, fermetures oubliées
  * conformité avec la dtd
  * *à vérifier : encodage, mettre utf-8*

* différencier un attribut d'un élément : attribut sert à préciser un élément, son type, ses limites
* valeurs d'éléments :
  * __(EMPTY|ANY)__ peut être vide ou contenir n'importe quel élément de la dtd.
* valeurs d'attributs :
  * __REQUIRED__ : instanciation de l'attribut obligatoire.
ne fonctionne pas dans toutes les configurations
  * __IMPLIED__ : valeur d'attribut optionnelle, instanciation non obligatoire
  * __FIXED 'val'__ : valeur constante
* types d'attributs :
  * __CDATA__ : chaîne de caractère
  * __(a | b)__ : valeurs possibles
  * __ID__ : 2 valeurs d'attributs d'un élément utilisé 2 fois ne peuvent être les mêmes
  * __IDREFS__ : référence plusieurs ID d'attributs
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
  * cardinalités :
    * __+__ : 1 -> inf
    * __*__ : 0 ou inf
    * __?__ 0 ou 1
    * __e1 | e2__ ou

#### CSS

* Remarque : Pour placer la ponctuation, on est obligé de les placer après/avant chaque type plutôt que d'utiliser un sélecteur global (comme AllOf) et d'ajouter une exception.

#### Remarques pratiques
<span style="color:red"> Un document possède une racine et une seule! </span>

<span style="color:red"> Si un document n'a pas de DTD on doit préciser ça dans sa déclaration XML: __standalone__ </span>

<span style="color:red"> Un document sans DTD peut être affiché mais ne peut pas être interprété. </span>

<span style="color:red"> Un document est dit __valide__ s'il est conforme à sa DTD. </span>

<span style="color:red"> Un document est dit __bien formé__ s'il respecte la syntaxe XML(même s'il n'a pas de DTD)  </span>

<span style="color:red"> __CDATA dans XML__ indique à l'analyseur de ne pas tenir compte du balisage. Utile lorsque l'on inclut du Javascript à XML.  </span>

<span style="color:red"> Le prologue d'une DTD est identique au celui pour un XML, excepté standalone et DOCTYPE qui n'ont pas de sens. __Une DTD n'a pas nécessairement de prologue.__ </span>
#### Scripts
