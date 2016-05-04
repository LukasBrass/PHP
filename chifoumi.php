<!DOCTYPE html>
<html>
  <head>
     <meta charset='UTF-8'/>
    <title> chifoumi.php</title>
  </head>
  <body>
    <form method='get' action='chifoumi.php'>
      <fieldset>
        <legend>
          <h1> Pierre, Feuille, Ciseaux</h1><br>
        </legend>
        Choisissez votre coup :
        <a href="?coup=0" name='rep' value='pierre'><img src="pierre.png"></a>
        <a href="?coup=1" name='rep' value='feuille'><img src="feuille.png"></a>
        <a href="?coup=2" name='rep' value='ciseaux'><img src="ciseaux.png"></a>
      </fieldset>
    </form>
    <?php
    if (isset($_GET['coup']))
    $coup = $_GET['coup'];
    else echo'A vous de jouer';
    $player2 = rand(0,2);
      if($coup==='0'){
        echo'<img src="pierre.png">';
      if($player2 == 1){
        echo'<img src="feuille.png"></a>';
        echo '<br>LOOSER';}
      else if($player2 == 2){
        echo '<img src="ciseaux.png">';
        echo '<br>WINNER';}
        else {
          echo'<img src="pierre.png">';
             echo 'TIE';}
      ;}
    if($coup==='1'){
      echo'<img src="feuille.png"></a>';
      if($player2 == 2){
        echo '<img src="ciseaux.png">';
        echo 'LOOSER';}
    else if($player2 == 0){
     echo'<img src="pierre.png">';
      echo 'WINNER';
    }
    else {
      echo'<img src="feuille.png">';
      echo 'TIE';}
    ;}
    if($coup==='2'){
      echo'<img src="ciseaux.png">';
      if($player2 == 1){
        echo'<img src="feuille.png">';
        echo 'WINNER';}
    else if($player2 == 0){
      echo'<img src="pierre.png">';
      echo 'LOOSER';}
    else {echo '<img src="ciseaux.png">';
      echo 'TIE';}
    ;}
    ?>
  </body>
</html>