# CR TDM04 jQuery
#### Remarques pratiques
  * documentation jquery :
        "https://api.jquery.com"

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
  * version locale *téléchargement sur www.jquery.com*

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

###### inscritptions.html

    <!DOCTYPE html>
    <html>
      <head>
        <title>Formulaire d'inscription au forum ASI</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link href="style.css" rel="stylesheet" type="text/css"  />
      </head>
      <body>
        <header id="top">
          <img id="logo" src="logo-asi.png" alt="ASI" width="125" height="58" />
          <h1>Forum ASI</h1>
        </header>
        <form action="GET">
          <fieldset id="fieldset">
            <legend>Formulaire d'nscription</legend>
            <label for="name">Nom : </label><input onfocus='agent("neutre", 150, 0, "Je surveille votre saisie")' placeholder="Saisissez votre nom"  id="name" name="name" type="text" size="30" onchange='verifierSaisieNom(150, 0)'/>
            <label for="name">Prénom : </label><input onfocus='agent("neutre", 150, 50,  "Je surveille votre saisie")' placeholder="Saisissez votre prénom"  id="surname" name="surname" type="text" size="30" />
            <label for="email">E-mail : </label><input onfocus='agent("neutre", 150, 150,  "Je surveille votre saisie")' placeholder="Saisissez votre email" id="email" name="email" type="text" size="30" />
            <hr/>

            <label>Statut : </label>
              <input type="radio" id="enseignant" name="statut" value="enseignant" /><label class="labelradio" for="enseignant"> Enseignant</label>
              <input type="radio"  id="etudiant" name="statut" value="etudiant" /> <label  class="labelradio" for="etudiant"> Étudiant</label><br />
            <label for="annee">Si étudiant, année : </label>
              <select name="annee" id="annee">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select><br />
              <img id="trombone" src="Images/happy.png" height=110, width=110 />
              <div id="message">Bienvenue ! </div>
            <label for="photo">Photo :</label> <input type="file" name="maPhoto" id="photo" />
          </fieldset>
          <input type="submit" />
          <input type="reset" value="Effacer"/>
        </form>
        <footer>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
          </script>
          <script>
            function agent(expression, top, left, message) {
              switch(expression){//attributs #attr entre simples quotes
                case "heureux":
                  $('#trombone').attr("src", "Images/happy.png");
                  $('#message').text(message);
                  $('#message').css("background-color", "green");
                  break;
                case "triste":
                  $('#trombone').attr("src", "Images/sad.png");
                  $('#message').text(message);
                  $('#message').css("background-color", "red");
                  break;
                case "neutre":
                  $('#trombone').attr("src", "Images/neutre.png");
                  $('#message').text(message);
                  $('#message').css("background-color", "grey");
                  break;
              };
              $('#trombone').animate({ //doubles et simples quotes sont importantes
                'left':"left"+"px",
                'top':"top"+"px"
              }, 1000);
          };

            function verifierSaisieNom(top, left) {
              var nom=document.getElementById("name");
              if (nom.value==""){
                agent("sad", top, left, "Le champ ne doit pas être vide");
              }
              for (i : nom.value) {
                if (!isNaN(i)){
                  agent("sad", top, left, "Il ne doit pas y avoir de chiffre...");
                }
              }
            }
            function verifiersaisiePrenom(top, left) {
              var prenom=document.getElementById("surname");
              if (prenom.value==""){
                agent("sad", top, left, "Le champ ne doit pas être vide");
              }
              for (i : prenom.value) {
                if (!isNaN(i)){
                  agent("sad", top, left, "Il ne doit pas y avoir de chiffre...");
                }
              }
            }
            function verifierEMail(top, left) {
              var email=document.getElementById("email");
              int contientAt=0;
              if (email.indexOf('@')=-1){
                agent("sad", top, left, "Le format de l'entrée n'est pas celui d'un E-mail");
              }
              else {
                var domaine=email.slice(email.indexOf('@')+1);
                if (domaine.indexOf('.')=-1) {
                  agent("sad", top, left, "Le format de l'entrée n'est pas celui d'un E-mail");
                }
              }
            }

          </script>
        </footer>
      </body>
    </html>

###### style.css


     {
    	font-family:Arial, Helvetica, sans-serif;
    }
    #logo {
    	float : right;
    }
    #top {
    	width : 500px;
    }
    #page {
    	margin : 10px;
    }
    fieldset {
    	width : 500px;
    	padding : 10px;
    	margin-top : 10px;
    	border : solid 3px grey;
    	line-height : 2em;
    }
    legend {
    	border : none;
    	padding : 5px 10px 5px 10px;
    	line-height : 1em;
    	background-color : grey;
    	color : white;
    }
    label {
    	width: 150px;
    	display: block;
    	float: left;
    }
    label.labelradio , label[for=copie] {
    	display: inline;
    	float:none;
    	margin-right:20px;
    }
    h1 {
    	font-size:24px;
    }
    input[type=submit],input[type=reset] {
    	background-color : green;
    	color : white;
    	margin-top : 20px;
    	font-size:16px;
    	weight:bold
    }
    #trombone {
    	position:absolute;
    	left : 400px;
    	top : 175px;
    }

    #message {
    	position:relative;
    	left : 450px;
    	top : -125px;
    	background-color: white;
    	border : solid 2px black;
    	width : 150px;
    	align-self: center;
    }
