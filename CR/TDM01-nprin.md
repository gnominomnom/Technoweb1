# ************************************ CR ******************************


* lors d'une balise **input** dans un formulaire si on veut afficher une boîte où l'utilisateur doit rentrer ses données en écrivant un petit message on utilise le paramètre : __placeholder__

 Example:
 <label> Name : </label> <input type = "text" name = "monNom" id ="name" placeholder="Saisissez votre nom" />

* associer une étiquette à un bouton : <*label* __for="name"__> Name : </label><input type="text" name="monNom" id="name" placeholder="Nom :"/>
* faire une saute de ligne: <__br/__>
* faire une ligne horizontale: <__hr/__>

  <span style="color:red"> Attention à la difference entre *head* et *header* ! </span>

* __head__: est placée juste après <*!DOCTYPE html*> <*html*>; il contient, en géneral, les balises suivantes: <*title*> <*meta*> <*link*>
* __header__: est placée dans le <*body*> . Bonne idée de placer ici les images.
* boutons qui ne sont pas cochables en même temps: utilisation de <**radio**> en mettant le paramètre **name** identique dans la déclaration des boutons.

  Exemple :
         <label> Statut:  </label> <input type="radio" name="statut" id="enseignant" /><label for="enseignant">Enseignant</label>
        <input type="radio" name="statut" id="etudiant"/><label for="etudiant">Etudiant</label> <!--meme nom dans variable "name" pour qu'on ne puisse sélectionner que l'un des 2-->

* pour placer les éléments dans un rectangle : <*fieldset*> <*/fieldset*>
* titre associé au rectangle : <*legend*> Légende </*legend*>

* dans un selecteur, ne pas oublier de préciser le nombre d'option sélectionnées à la fois avec __size__.
Exemple :
      <label>Si étudiant, année : </label> <select name="annee" size="1">
      <option value="1">1</option>
      <option value="2">2</option>


    * définition d'un id class="nomClasse" pour le CSS
  Exemple :
          <img src="nomImage.png" alt="logo ASI" class="logo"/>
    * rectangle, class pour le CSS :
  Exemple :
          <fieldset class="nomClasse"> </fielset>
  * légende
        <legend class="nomClasse">légende</legend>
  * bouton :
    * types possibles :
      * text
      * radio
      * submit

Exemple :

          <label> Nom : </label> <input type = "text" name = "name" id="identifier" placeholder="Saisissez votre nom" />

          <input class="Bouton" type="submit" name="action" value="ValeurEcriteSurLeBouton" />
  * rectangle pour entrer du texte avec un message

Exemple :

        <textarea name="texte" rows="10" cols="80"> Message... </textarea>


___

### CSS

* padding : espace entre les limites d'un élément et son contenant

* __Sélecteurs__:
 * *sélecteur de descendant* : p h2 {color: green}
 * *sélecteur d'enfant* : p __>__ h2 {color: green}
 * *sélecteur d'adjacent* : p __+__ {color: green}
 * *sélecteur de pseudo-classe* :  
    liste des pseudo-classes standards:
      * __:active__ : permet de cibler un élément lorsque celui-ci est activé par l'utilisateur. Elle permet de fournir un feedback indiquant que l'activation a bien été détectée par le navigateur. Par exemple si on clique sur un lien qui est de base en bleu il se transforme en rouge
      * __:checked__ : le statut du contenu
      * __:hover__ : position souris
      * __:first-child__:  permet de cibler un élément qui est le premier élément fils par rapport à son élément parent.
      * __:nth-child(a*n+b)__ __ou__ :nth-child(__odd__) __ou__ __:nth-child__(__even__)
      * __:required__: permet de cibler un élément <__input__> pour lequel l'attribut required est activé. Cela permet de mettre en forme les éléments obligatoires pour remplir correctement un formulaire. Par exemple, dans un formulaire où certains champs sont obligatoires comme le nom, le numéro de téléphone.
      * __:invalid__ : cible tout élément <*input*> pour lequel la validation du contenu échoue par rapport au type de donnée attendu. Ceci permet de mettre en forme les champs non valides pour aider l'utilisateur à identifier et à corriger les erreurs.
      * __margin__
      * __padding__
      * __background-color__
      * __color__
      * __position__
      * __width__, __height__
      * __right__, __left__, __top__, __bottom__
      * __border-width : thick, thin, medium, 10px__


  <span style="color:red"> Pour voir des exemples cliquer ici:chrétien paul apôtre du christ https://developer.mozilla.org/fr/docs/Web/CSS/Pseudo-classes! </span>

 * *sélecteur de pseudo élément première lettre* : p:first-letter {text-transform: capitalize}
 * *sélecteur de pseudo élément __:before__ et __:after__* : Généralement utilisé pour ajouter du contenu esthétique à un élément via la propriété CSS content. Par défaut, l'élément créé est de type en-ligne (inline). Le content peut être laissé comme vide mais on ne peut pas le supprimer.


 __#example:before {</br>
   content: ""; </br>
   display: block; </br>
   width: 100px;</br>
   height: 100px;</br>
}__

<span style="color:red"> Pour voir des exemples cliquer ici: https://developer.mozilla.org/fr/docs/Web/CSS/::before</span>

*Différence entre __:before__ et __::before__ : dans CSS3  pour différencier les pseudo classes des pseudo éléments *


* __Positionnement__:

    * flottant : élément positionné à droite ou à gauche du bloc, les éléments qui le suivent dans le flux prennent l'espace qui leur reste
    * absolu : position n'est pas par rapport aux autres éléments du bloc qui les contient tous, mais par rapport aux limites du bloc lui-même
    * fixe : position immuable même en cas de scroll de la page.
    * relatif : position dépendant de l'élément qui a été positionné juste avant dans le flux (élément parent)

<span style="color:red"> ATTENTION! Pour comprendre le positionnement il faut tenir compte de la taille initiale du flux (+ environ 2 px pour l'encadrement) qu'on fixe avec les attributs width et height car si la taille de la balise qu'on veut placer dépasse cette taille, elle se met pas en ligne horizontale avec l'autre d'avant mais en dessous et ainsi de suite pour les autres</span>
* __Sélecteurs en bref__:

  *Syntaxe* : sélecteur[, sélecteur...] {déclarations}
  * sélecteur d’élément :element
  * sélecteur d’id : <span style="color:red">#id</span>
  * sélecteur de classe : <span style="color:red">.</span>class
  * sélecteur universel : <span style="color:red"> * </span>
  * sélecteur de descendant : element element
  * sélecteur d’enfant (descendant direct) : element<span style="color:red"> > </span>element
  * sélecteur d’adjacent :element1<span style="color:red">~</span>element2
  * sélecteur d’adjacent direct: element<span style="color:red">+</span>element
