<!DOCTYPE html>
<head>
  <meta charset='UTF-8'/>
  <title> data.php</title>
</head>
<body>
  <?php
  $theme1 = "Moteur";
  $Bookmarks = array(
        "name"=>"moteur",
       "theme1"=> array(
         array("name"=>"Google", "url"=>"https://www.google.fr/","image"=>"http://upload.wikimedia.org/wikipedia/commons/thumb/a/aa/Logo_Google_2013_Official.svg/64px-Logo_Google_2013_Official.svg.png"),
        array("name"=>"Ixquick","url"=> "https://ixquick.fr/","image"=>"http://eu.ixquick.com/graphics/eng/ixquick.gif"),
      )
      array("name"=>"Le Monde","url" => "http://lemonde.fr/","image"=>"http://upload.wikimedia.org/wikipedia/commons/thumb/5/54/Le_monde_logo.svg/200px-Le_monde_logo.svg.png"),
      array("name"=>"L'Equipe","url"=>"http://lequipe.fr/","image"=>"http://upload.wikimedia.org/wikipedia/commons/3/32/L%27%C3%89quipe_wordmark.svg"),
    
      array("name"=>"FFF","url"=>"http://fff.fr/","image"=>"http://upload.wikimedia.org/wikipedia/fr/6/67/Logo_F%C3%A9d%C3%A9ration_Fran%C3%A7aise_de_Football.svg"),
      array("name"=>"FFA","url"=>"http://www.athle.org","image"=>"http://usl.athletisme.free.fr/FFA.jpg")
    );
  foreach($Bookmarks as $array) {
    echo "<li><a href=".$array["url"]."><img src=".$array["image"]."></a></li>";
  }
  ?>
</body>