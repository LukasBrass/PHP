<?php
if(isset($_GET['nombre']))
  $nombre = $_GET['nombre'];
else
  $nombre = 12;
  echo'<h1>table de '.$nombre.'</h1>';
for($i = 1; $i <= 10;$i++){
    $res = $i*$nombre;
    echo $i.' x '.$nombre.' = '.$res."<br>";
}
echo"<form method='get' action='TD2exo2.php'>
      <input type='text' name='nombre'>
      <button type='submit' value='Envoyer'> Envoyer
      </form>"
  ?>
