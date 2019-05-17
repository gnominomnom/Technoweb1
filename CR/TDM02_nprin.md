# CR TP 2
*Noémie PRIN et Maria-Bianca ZUGRAVU*


#### XML

* dans le fichier .dtd il n'y a pas de <__!DOCTYPE__> ; il sert à définir les relations parent-fils, les cardinalités,  l'enchaînement;
* Erreurs typiques :
  * indentation
  * balises mal placées, fermetures oubliées
  * conformité avec la dtd
  * *à vérifier : encodage, mettre utf-8*

### DTD

* différencier un attribut d'un élément : attribut sert à préciser un élément, son type, ses limites
* valeurs d'attributs :
  * __REQUIRED__ : instanciation de l'attribut obligatoire.
ne fonctionne pas dans toutes les configurations
  * __IMPLIED__ : valeur d'attribut optionnelle, instanciation non obligatoire
  * __FIXED 'val'__ : valeur constante
* types d'attributs :
  * CDATA : chaîne de caractère
  * (a | b) : valeurs possibles
  * ID : 2 valeurs d'attributs d'un élément utilisé 2 fois ne peuvent être les mêmes
  * IDREFS : référence plusieurs ID d'attributs
Exemple :
        <!-- dtdid.dtd -->
        <!ELEMENT e1 (e2 | e3 | e4)* >
        <!ELEMENT e2 (#PCDATA)>
        <!ELEMENT e3 (#PCDATA)>
        <!ELEMENT e4 (#PCDATA)>
        <!ATTLIST e2
        id ID #REQUIRED>
        <!ATTLIST e3
        ref IDREF #IMPLIED>
        <!ATTLIST e4
        refs IDREFS #IMPLIED>

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
    * *+* : 1 -> "infty"

#### CSS

* Remarque : Pour placer la ponctuation, on est obligé de les placer après/avant chaque type plutôt que d'utiliser un sélecteur global (comme AllOf) et d'ajouter une exception.
