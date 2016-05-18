<!DOCTYPE html>
<html>
  <head>
    <meta charset='latin'/>
    <title> films.php</title>
  </head>
  <body>
		<h1>Ajouter un Film</h1>
		<form method="get" action="enregistrement.php">
			Acteur : <br>
			<select name="acteur">
				<?php
        $link=mysqli_connect("dwarves.iut-fbleau.fr","carlu","ludo1811","carlu");
        if(!$link){
            die("<p> connexion impossible</p>");
        }
        $resultat=mysqli_query($link,"select distinct nom,prenom,idArtiste from Acteur");
            while($artiste=mysqli_fetch_object($resultat)){
                echo"<option value=".$artiste->idArtiste.">".$artiste->nom.$artiste->prenom."</option>";
            }
				?>
			</select><br>
				Film : <br>
			<select name="film">
				<?php
        $resultat=mysqli_query($link,"select distinct titre from Film");
            while($film=mysqli_fetch_object($resultat)){
                echo"<option>".$film->titre;
            }
					echo"</option>";
        ?>
			</select><br>
				Role : <br>
				<input type="text" name="role"><br>
			<input type='submit' value='Envoyer'/>
    <h1>liste des Films</h1>
    <form>
      <select name='real' method='get' action='films.php'>
        <?php
        $resultat=mysqli_query($link,"select nomRole from Role");
        echo"
        <br/><input type='submit' value='Submit'/>
      </select>
    </form>
    <table class='table table-striped table-condensed table-bordered'>
				<thead>
					<tr>
						<th>nomRole</th>
					</tr>
				</thead>
      <tbody>";
        if($resultat){
            while($film=mysqli_fetch_object($resultat)){
                echo"<tr><td>".$film->nomRole."</td></tr>";
            }
        }
        else
            die("<p> Erreur de requete");
        ?>
      </tbody>
  </body>
</html>