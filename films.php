<!DOCTYPE html>
<html>
  <head>
    <meta charset='latin'/>
    <title> films.php</title>
  </head>
  <body>
		<h1>Ajouter un Film</h1>
		<form method="get" action="enregistrement.php">
			Titre : <br>
			<input type="text" name="titre"><br>
			Genre : <br>
			<select name="genre">
				<?php
        $link=mysqli_connect("dwarves.iut-fbleau.fr","carlu","ludo1811","carlu");
        if(!$link){
            die("<p> connexion impossible</p>");
        }
        $resultat=mysqli_query($link,"select distinct genre from Film");
            while($genre=mysqli_fetch_object($resultat)){
                echo"<option>".$genre->genre;
            }
					echo"</option>";
				?>
			</select><br>
				Pays : <br>
			<select name="codePays">
				<?php
        $resultat=mysqli_query($link,"select distinct codePays from Film");
            while($pays=mysqli_fetch_object($resultat)){
                echo"<option>".$pays->codePays;
            }
					echo"</option>";
        ?>
			</select><br>
				Realisateur : <br>
				<select name="realisateur">
				<?php
        $resultat=mysqli_query($link,"select distinct nom,prenom,idMes from Artiste join Film on (idMes = idArtiste)");
             while($nomreal=mysqli_fetch_object($resultat)){
                echo"<option value=".$nomreal->idMes.">".$nomreal->nom." ".$nomreal->prenom;
						}
					echo"</option>";
				?>
			</select><br>
				Resume : <br>
			<textarea rows="4" cols="50" name="resume"></textarea><br>
				Annee : <br>
				<input type="text" name="annee"><br>
			<input type='submit' value='Envoyer'/>
    <h1>liste des Films</h1>
    <form>
      <select name='real' method='get' action='films.php'>
        <?php
        $resultat=mysqli_query($link,"select distinct nom from Artiste join Film on (idMes = idArtiste)");
        if($resultat){
            while($nom=mysqli_fetch_object($resultat)){
                echo"<option value=".$nom->nom.">".$nom->nom;
            }
        }
        else
          die("erreur de requete");
        if (isset($_GET['real'])){
				$real = $_GET['real'];
          $resultat=mysqli_query($link,"select titre,annee,genre,nom from Film join Artiste on (idMes = idArtiste) where nom =\"$real\"");
        }
        else{
          $resultat=mysqli_query($link,"select titre,annee,genre,nom from Film join Artiste on (idMes = idArtiste);");
        }
        echo"
        <br/><input type='submit' value='Submit'/>
      </select>
    </form>
    <table class='table table-striped table-condensed table-bordered'>
				<thead>
					<tr>
						<th>Titre</th>
						<th>Année</th>
						<th>Genre</th>
						<th>Realisateur</th>
					</tr>
				</thead>
      <tbody>";
        if($resultat){
            while($film=mysqli_fetch_object($resultat)){
                echo"<tr><td><a href='./fiche.php?film=1'>".$film->titre."</td>";
                echo"<td>".$film->annee."</td>";
                echo"<td>".$film->genre."</td>";
                echo"<td>".$film->nom."</td>";
              echo"</tr>";
            }
          echo"</tr>";
        }
        else
            die("<p> Erreur de requete");
        ?>
      </tbody>
  </body>
</html>