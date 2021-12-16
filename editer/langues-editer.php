<!DOCTYPE>
 <html>
      <head>
        <title> Formulaire d'inscription </title>
        <meta charset="utf-8" />
         <link rel="stylesheet" href="form.css" />

      </head>
  
<body>
    <header id="haut">
        <nav>
            <ul class="lien">

                    <li><a href="accueil.php">Acceuil</a></li>
                    <li><a href="infos-editer.php">Informations personnelles</a></li>
                    <li><a href="comp-editer.php">Competences</a></li>
                    <li><a href="exp-editer.php">Expériences Professionneles</a></li>
                    <li><a href="interet-editer.php">Points d'interets</a></li>
                    <li><a href="langues-editer.php">langues</a></li>
                    <li><a href="cursus-editer.php">Cursus académiques</a></li>
                
            </ul>
        </nav>
    </header>

 
   
    
   <div class="container">
      <div class="login-form">
        <div class="login"> 
        <a id="fiche">  <h3>fiche d'édition  </h3> </a>
        </div>
	<form method="post" id="for"  >
        <fieldset  id="fiel">
            <legend >EDITER</legend>
            <div>
       <label for ="Nom"> Nom </label>
       <input type="text" name = "Nom" id="Nom" placeholder="Entrer votre nom" autofocus> </br>
            
            <p>
       <label for="Prenom">Prenom</label>
       <input type="text" name="Prenom" id="Prenom" placeholder="Entrer votre prenom" ></br>
            </p>
       <p>
       <label for="Diplome">profession</label>
       <input type="text" name="Diplome" id="Diplome" placeholder="Entrer votre profession"></br>
        </p>
       
           <p>
        <label for="Annee_obtention">Annee d'obtention du dernier diplome</label>
       <input type="text" name="Annee_obtention" id="Annee_obtention" placeholder="Entrer l'année d'obtention"></br>
           </p>
       <label for="Ecole">Ecole d'obtention du dernier diplome</label>
       <input type="text" name="Ecole" id="Ecole" placeholder="Exemple: 3IAC"></br>
            <p>
       <label for="Ville">Ville d'obtention du dernier diplome</label>
       <input type="text" name="Ville" id="Ville" placeholder="Exemple: Douala">
             </p>
             <p>
       <label for="Datej">Date</label>
       <input type="date" name="Datej" id="Datej" >
             </p>
        <input type="submit" name="enregistrer" value= "enregistrer"  class="bouton" id="enregistrer">
       <input type="submit" name="supprimer" value="supprimer" class="bouton" id="supprimer" > 
        
       <a href="acceuil.html"><input type="button"  name="annuler" value="annuler" class="bouton" id="annuler"> </a>
       
             
       </fieldset>
       </div>
    </div>
  
</body>

 </html>

 
