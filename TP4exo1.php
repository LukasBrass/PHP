<!DOCTYPE html>
<html>
  <head>
    <meta charset='latin'/>
    <title> artiste.php</title>
  </head>
  <body>
		<h1>Ajouter un artiste</h1>
		<form method="get" action="enregistrement.php">
			Nom : <br>
			<input type="text" name="nom"><br>
			Prenom : <br>
			<input type="text" name="prenom"><br>
			Annee de naissance : <br>
			<input type="text" name="annee"><br>
			<input type='submit' value='Envoyer'/>
		</form>
    <h1>Liste des Artistes</h1>
    <form>
      <table class='table table-striped table-condensed table-bordered'>
				<thead>
					<tr>
						<th>Artiste</th>
						<th>Année de naissance</th>
					</tr>
				</thead>
      <tbody>
        <?php
        $link=mysqli_connect("dwarves.iut-fbleau.fr","carlu","ludo1811","carlu");
        if(!$link)
            die("<p> connexion impossible</p>");
        else{
        $resultat=mysqli_query($link,"select nom,prenom,anneeNaiss from Artiste");
        if($resultat){
            while($artiste=mysqli_fetch_object($resultat)){
                echo "<tr><td>".$artiste->nom." ".$artiste->prenom."</td>";
                echo "<td>".$artiste->anneeNaiss."</td></tr>";
            }
        }
        else
            die("<p> Erreur de requete");
        }
        ?>
      </tbody>
  </body>
</html>