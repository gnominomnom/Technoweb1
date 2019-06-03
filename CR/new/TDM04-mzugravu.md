# CR TDM04 jQuery
#### Remarques pratiques
  * documentation jquery : https://api.jquery.com
  * placer les fonctions en jQuery dans le __<footer>__
  * choix des doubles et simples quotes important
  * Déclarations de fonctions ne doivent pas être dans le __$(document).ready__
  * pour debugger :
    * __console.log('Texte');__
    * __console.log(Objet);__
#### Points importants CM
  * version en cache *(Google)*
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
          </script>
  * version locale *téléchargement su www.jquery.com*

      <script type="text/javascript" src="jquery.js"></script>
  * appel d'un élément html par son identifiant :

          <div id="message">Bienvenue ! </div>
          --
          $('#message').text(message);
### jQuery
  * fonctions utiles :
    * __$(document).ready__ document entièrement chargé
    * attributs :

|fonctions                                                             | explication         
|----------------------------------------------------------------------|-------------------------------------:|
| __$('selecteur').attr("attibutAChanger", "modif")__                  | pour set la valeur de l'attribut attibutAChanger de selecteur
| __$('selecteur').attr({'attribut-de-css1' : 'valeur1', ... 'attribut-de-cssn' : 'valeurn' });__                                                                  | assignation d'un ensemble d'attributs, on peut remplacer __.attr()__ par  __.css()__
  * sélections :

|fonctions                                                             | explication         
|----------------------------------------------------------------------|-------------------------------------:|
| __$('selecteur1').find('selecteur2')__                               | selecteur2 fils de selecteur1
| __$('selecteur1').children(['selecteur2'])__                         | tous les fils directs de selecteur1 désignées par 'selecteur2'
| __$('selecteur1').parent(['selecteur2'])__                           | les parents de selecteur1 désignés par 'selecteur2'
| __$('selecteur1').next(['selecteur2'])__                             | suivant
| __$('selecteur1').prev(['selecteur2'])__                             | précedent
| __$('selecteur').each()__                                            | fonction anonyme déclarée dans each(), on désigne les éléments sur lesquels on itère par __this__
  ex :

            $( "li" ).each(function( index ) {
              console.log( index + ": " + $( this ).text() );
            });
    * récupération et/ou modification de contenu de balises :

|fonctions                                                             | explication         
|----------------------------------------------------------------------|-------------------------------------:|
| __$('selecteur').text("Texte à ajouter")__                           | modifier le texte associé à selecteur
| __$('selecteur').html()__                                            |récupère le contenu des balises __<html>__
| __$('selecteur').html('<p>Nouveau contenu avec balises HTML!</p>')__ |set de nouvelles balises html
| __$('selecteur').val()__                                             |récupère la valeur
| __$('selecteur').val('Nouvelle valeur')__                            | modifie la valeur

  * sur la CSS :

|fonctions                                                             | explication         
|----------------------------------------------------------------------|-------------------------------------:|
| __$('selecteur').css("attrCSS", "nouvelleValeurCSS")__               | modifier la valeur de l'attribut attrCSS dans le .css associé à selecteur
| __$('selecteur').animate()__                                         |crée une animation sur l'objet 'selecteur' à partir de propriétés mises en entrées
  ex :
          $('#trombone').animate({
            'left':"left"+"px",
            'top':"top"+"px"
          }, 1000); //1000 est la durée de l'animation en ms

|fonctions                                                             | explication         
|----------------------------------------------------------------------|-------------------------------------:|
| __$('selecteur').prepend('Contenu')__                                | ajout au début d'un élément
| __$('selecteur').append('Contenu')__                                 |ajout à la fin d'un élément
| __$('selecteur').before('Contenu')__                                 |ajout avant un élément
| __$('selecteur').after('Contenu')__                                  |ajout après un élément
| __$('selecteur').empty()__                                           |suppression du contenu d'un élément
| __$('selecteur').remove()__                                          |suppresion d'un élément

  * opérations sur des classes :


  |fonctions                                                             | explication         
  |----------------------------------------------------------------------|-------------------------------------:|
  | __.hasClass('class')__ |
  | __.addClass('class')__ |
  | __removeClass('class')__ |
  | __.toggleClass('class')__ | ajoute la classe *class* ou la supprime si elle existe déjà
  * dimensions :

|fonctions                                                             |     
|----------------------------------------------------------------------|
|__width()__
| __heigth()__
| __innerWidth()__
| __innerHeight()__
| __outerWidth()__
| __outerHeight()__

|EVénements                                                             |     
|----------------------------------------------------------------------|
|__click__
| __load__
| __change__
| __submit__
| __focusin/focusout__
| __mousedown/mouseup__


### Javascript
  * __chaine.slice(debut, fin)__ : retourne une sous-chaine de caractères à partir de chaine
  * __chaine.indexOf('c')__ : retourne l'index du caractère 'c' dans la chaîne
  * __isNaN(valeur)__ is not a number

#### Scripts
