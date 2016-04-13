<?php
echo'<h1> Reponses</h1>
<ul>';
if($_GET['capitale'] == NULL)
  echo'<li>Question 1 : pas de reponse</li>';
  else if ($_GET['capitale'] == 'Paris'){
      echo'<li>Question 1 : bonne reponse !</li>';
      $i = 1;
  }
  else{
  echo'<li>Question 1 : mauvaise reponse</li>';
    }
if($_GET['suite'] == NULL)
  echo'<li>Question 2 : pas de reponse</li>';
  else if ($_GET['suite'] == 16){
      echo'<li>Question 2 : bonne reponse !</li>';
      $i++;
  }
  else{
  echo'<li>Question 2 : mauvaise reponse</li>';
    }
if($_GET['annee'] == NULL)
  echo'<li>Question 3 : pas de reponse</li>';
  else if ($_GET['annee'] == 1515){
      echo'<li>Question 3 : bonne reponse !</li>';
      $i++;
  }
  else{
  echo'<li>Question 3 : mauvaise reponse</li>';
    }

echo'<h4> Score : '.$i.'</h4>';
?>