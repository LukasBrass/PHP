<?php
extract($_GET);
$link=mysqli_connect("dwarves.iut-fbleau.fr","carlu","ludo1811","carlu");
        if(!$link)
            die("<p> connexion impossible</p>");
        else{
          if(isset($_GET["prenom"]))
        $resultat=mysqli_query($link,"insert into Artiste(nom,prenom,anneeNaiss) values('".$nom."','".$prenom."','".$annee."');");
          else{
              $resultat=mysqli_query($link,"insert into Film(titre,annee,idMes,genre,resume,codePays) values('".$titre."','".$annee."','".$realisateur."','".$genre."','".$resume."','".$codePays."');");
          }
        if($resultat)
          echo"Done";
          else
            echo"pb";
        }
?>