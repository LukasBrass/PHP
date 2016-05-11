<!DOCTYPE html>
<html>
  <head>
    <meta charset='latin'/>
    <title> films.php</title>
  </head>
  <body>
    <h1>Films</h1>
    <form>
      <select name='real' method='get' action='films.php'>
        <?php
        $link=mysqli_connect("dwarves.iut-fbleau.fr","carlu","ludo1811","carlu");
        if(!$link){
            die("<p> connexion impossible</p>");
        }
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
  
  
  // bien indenté , claire , fonctionne pour l'exo 1 et 2 ,le 3 fonctionne a moitié 
  // le 3 nous envoye un lien  vide
  // exo1 : 8 
  //exo 2 : 8
  //exo 3 : 2  (-2 car il manque les commentaire de l'exo3 mais nous envoye vers un lien)
  //note : 18
  