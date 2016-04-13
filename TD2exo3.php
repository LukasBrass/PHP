<?php
    if(isset($_GET['val1']))
      $val1=$_GET['val1'];
    if(isset($_GET['val2']))
      $val2=$_GET['val2'];
    if(isset($_GET['op'])) {
       if($_GET['op'] == 1) {
           $res = $val1+$val2;
       }
       if($_GET['op'] == 2) {
           $res = $val1-$val2;
       }
       if($_GET['op'] == 3) {
           $res = $val1*$val2;
       }
       if($_GET['op'] == 4) {
          if($val2 == 0){
             echo'Division par zero impossible';
               $res = NULL;
          }
          else{
           $res = $val/$val2;
          }
       }
    }
        ?>
<html>
  <head>
    <meta charset='UTF-8'/>
    <title> formulaire</title>
  </head>
  <body>
    <h1> Calculatrice </h1>
    <form method='get' action='TD2exo3.php'>
      
      <input type='text' name='val1' value="<?php if(isset($res)) echo $res; ?>" />
      <select name='op'>
        <option value='1'> +</option>
        <option value='2'> - </option>
        <option value='3'> * </option>
        <option value='4'> / </option>
      </select>
      <input type='text' name='val2'/>
      <button type='submit' value='Envoyer'> Calculer </button><br>
      </form>
  </body>
</html>