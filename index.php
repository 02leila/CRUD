<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="C:/wamp64/www/crud/css/style.css"/>

      <title></title>
    </head>

    <body>
    <br/> <br/> <br/> 
     
    <form methode="POST" action="#" >
      <div class="section">
        <div class="row">
          <div class="input-field col offset-s4 s4">
            <input id="nom" type="text" name="nom" class="validate" required>
            <label for="Nom">Nom</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col offset-s4 s4">
            <input id="prenom" type="text" name="prenom" class="validate" required>
            <label for="Prenom">Prenom</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col offset-s4 s4">
            <input id="date de naissance" type="date" name="date" class="validate" reqired>
            <label for="Date de naissance">Date de naissance</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col offset-s4 s4">
            <input id="nationnalite" type="text" name="nation" class="validate" required>
            <label for="Nationnalité">Nationnalité</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col offset-s4 s4">
            <input id="classe" type="text" name="classe" class="validate" required>
            <label for="lCasse">Classe</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col offset-s4 s4">
            <input id="matricule" type="text" name="mat" class="validate" required>
            <label for="Matricule">Matricule</label>
          </div>
      </div>
    </form>

      <div class="center-align">
          <a class="waves-effect waves-light btn ">ENvoyer</a>
      <div>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    
    </body>
</html>