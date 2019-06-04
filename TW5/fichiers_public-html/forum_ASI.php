<!DOCTYPE html>
<html>
  <head>
    <title>Forum ASI</title>
    <meta http-equiv="Content-Type" content= "text/html;charset=utf-8">
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <style type= "text/css">
      object{overflow : auto;}
    </style>
    <style type= "text/css">
      p #probleme{color : Red;}
    </style>
    <script type="text/javascript">
      function verification () {
        var emailBox=document.getElementById("email");
        var probleme=document.getElementById("probleme")
        emailBox.style.outline= "initial";
        if (probleme.hasChildNodes()) {
          probleme.removeChild(probleme.childNodes.item(0));
        }
        if(emailBox.value==" ") {
          if (!probleme.hasChildNodes()) {
            emailBox.style.outline= "solid Red";
            probleme.appendChild(document.createTextNode("Champ obligatoire."));
          }
        } else {
          document.forms['formulaire'].submit();
        }
      };
      function nettoyage() {
        if( confirm('Etes vous sur ?')) {
          document.getElementById("email").style.outline= "initial";
          var probleme=document.getElementById("probleme");
          if (probleme.hasChildNodes()) {
          probleme.removeChild(probleme.childNodes.item(0));
        }
          document.forms['formulaire'].reset();
        }
      };
    </script>
  </head>
  <body>
    <div id="page">
      <div id="top">
        <img id="logo" src= "logo-asi.png" alt= "ASI" width= "125" height= "58"/>
        <h1> Forum ASI</h1>
      </div>
      <p id= "probleme"> </p>
      <form action="forum_ASI.php" name="formulaire" method="POST">
        <fieldset>
          <legend> Coordonnées : </legend>
          <label for="name"> Name : </label> <input placeholder="Saisissez votre nom" id="name" name="name" type="text" size="30"/> <br/>
          <label for="email"> E-mail : </label> <input placeholder="Saisissez votre email" id="email" name="email" type="email" size="30"/> <br/>
          <label> Etudiant : </label>
          <input type="radio" id="etudiantinsaoui" name="etudiantinsa" value="Oui" checked="checked"/>
          <label class="labelradio" for="etudiantinsaoui">Oui</label>
          <input type="radio" id="etudiantinsanon" name="etudiantinsa" value="Non"/>
          <label class="labelradio" for="etudiantinsanon"> Non</label> <br/>
          <label for="annee"> Année : </label>
          <select name="annee" id="annee">
            <option value="1"> 1 </option>
            <option value="2"> 2 </option>
            <option value="3"> 3 </option>
            <option value="4"> 4 </option>
            <option value="5"> 5 </option>
          </select>
        </fieldset>
        <fieldset>
          <legend> Message : </legend>
          <textarea name="message" rows="4" cols="50"> </textarea> <br/>
          <label for="copie"> Je souhaites recevoir une copie du message : </label> <input type="checkbox" name="copie" id="copie" checked="checked"/> <br/>
        </fieldset>
        <input type="submit" value="Poster le message"/>
        <input type="button" value="Effacer" onclick="Javascript:nettoyage();"/>
      </form>
      <?php
        foreach($_POST as $val) echo "$val ! ";
        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {
          echo "entre";
          $filename = '/tmp/file.txt'; /*si on met ./tmp/... le fichier sera sauvegardé dans /var/www/tmp/ sans . directement dans public_html/tmp/ */
          $dirname = dirname($filename);
          if (!is_dir($dirname))
          {
              mkdir($dirname, 0777, true); /*0777 : droits sur le repertoire: max des droits*/
          }
          $fichier=fopen($filename, "a+");
          fputs($fichier,$_POST['name']." ".$_POST['email']." ".$_POST['message']);
          while (!foef($fichier)){
            echo fgetc($fichier);
          }
          fclose($fichier);
        } else {
        echo "else";
        }
       ?>
    </div>
  </body>
</html>
