<?php
extract($_GET);
$nom = strtolower($nom);
$nom = ucfirst($nom);
$prenom = strtolower($prenom);
$prenom = ucfirst($prenom);
  if($sexe=='homme')
    echo'Bonjour Monsieur ';
  else
      echo'Bonjour Madame ';
  echo $nom;
  echo' ';  
  echo $prenom;