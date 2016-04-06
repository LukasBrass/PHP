<!DOCTYPE html>
<head>
  <meta charset='UTF-8'/>
  <title> data.php</title>
  <style type="text/css"> 
    #red {background-color : pink};</style>
</head>
<body>
  <table>
    <caption> tableau</caption>
    <thead>
      <tr>
        <th> Nom</th>
        <th> Prenom</th>
        <th> Email</th>
        <th> Taille</th>
        <th> Poids</th>
        <th> IMC</th>
      </tr>
    </thead>
    <tbody>
  <?php $data = array(
	array("Nom"=>"Garza","Prenom"=>"Forrest","Email"=>"eleifend@ligulaedu","Taille"=>"185","Poids"=>"65"),
	array("Nom"=>"Tanner","Prenom"=>"Orla","Email"=>"adipiscing@vitaecouk","Taille"=>"180","Poids"=>"73"),
	array("Nom"=>"Griffith","Prenom"=>"Susan","Email"=>"condimentum@tristiqueca","Taille"=>"172","Poids"=>"75"),
	array("Nom"=>"Wilkinson","Prenom"=>"Carla","Email"=>"tinciduntaliquamarcu@utmolestieca","Taille"=>"178","Poids"=>"71"),
	array("Nom"=>"Kirkland","Prenom"=>"Vladimir","Email"=>"Donec@egettinciduntduiorg","Taille"=>"178","Poids"=>"73"),
	array("Nom"=>"Holloway","Prenom"=>"Joy","Email"=>"enim@Nullamca","Taille"=>"191","Poids"=>"67"),
	array("Nom"=>"Soto","Prenom"=>"Cleo","Email"=>"posuereatvelit@Incondimentumca","Taille"=>"167","Poids"=>"70"),
	array("Nom"=>"Jacobson","Prenom"=>"Linda","Email"=>"disparturientmontes@metusurnaconvallisnet","Taille"=>"169","Poids"=>"73"),
	array("Nom"=>"Wilder","Prenom"=>"Ina","Email"=>"odiovel@eratcouk","Taille"=>"167","Poids"=>"68"),
	array("Nom"=>"Pace","Prenom"=>"Melvin","Email"=>"euismodindolor@DonecestNuncca","Taille"=>"175","Poids"=>"68"),
	array("Nom"=>"Moody","Prenom"=>"Hayden","Email"=>"ornareelit@malesuadaIntegeridedu","Taille"=>"180","Poids"=>"63"),
	array("Nom"=>"Rhodes","Prenom"=>"Jarrod","Email"=>"turpis@placeratnet","Taille"=>"168","Poids"=>"68"),
	array("Nom"=>"Bean","Prenom"=>"Marah","Email"=>"suscipitest@ullamcorperDuiscursusnet","Taille"=>"165","Poids"=>"61"),
	array("Nom"=>"Beard","Prenom"=>"Dylan","Email"=>"nonmagna@mollisnet","Taille"=>"173","Poids"=>"62"),
	array("Nom"=>"Davenport","Prenom"=>"September","Email"=>"amet@purusca","Taille"=>"179","Poids"=>"67"),
	array("Nom"=>"Boyd","Prenom"=>"Natalie","Email"=>"Aeneangravidanunc@metusorg","Taille"=>"179","Poids"=>"62"),
	array("Nom"=>"Davidson","Prenom"=>"Kane","Email"=>"ullamcorpermagnaSed@eutemporcouk","Taille"=>"181","Poids"=>"67"),
	array("Nom"=>"Burch","Prenom"=>"Tanek","Email"=>"a@Vivamussitorg","Taille"=>"169","Poids"=>"69"),
	array("Nom"=>"Talley","Prenom"=>"Leo","Email"=>"musAeneaneget@ornareliberoatcom","Taille"=>"167","Poids"=>"72"),
	array("Nom"=>"Stephens","Prenom"=>"Simone","Email"=>"in@auctorodioacom","Taille"=>"170","Poids"=>"65"),
	array("Nom"=>"Haynes","Prenom"=>"Gloria","Email"=>"liberoettristique@diamvelarcucouk","Taille"=>"169","Poids"=>"70"),
	array("Nom"=>"Blanchard","Prenom"=>"Faith","Email"=>"massa@augueeutellusnet","Taille"=>"166","Poids"=>"62"),
	array("Nom"=>"Randall","Prenom"=>"Blaze","Email"=>"atpede@blanditNamnullacom","Taille"=>"163","Poids"=>"66"),
	array("Nom"=>"Griffith","Prenom"=>"Roary","Email"=>"aliquetmetus@velnislcouk","Taille"=>"162","Poids"=>"64"),
	array("Nom"=>"Morgan","Prenom"=>"Tanner","Email"=>"egetlaoreet@arcucouk","Taille"=>"179","Poids"=>"67"),
	array("Nom"=>"Chapman","Prenom"=>"Amelia","Email"=>"nunc@massaQuisquecom","Taille"=>"164","Poids"=>"69"),
	array("Nom"=>"Grant","Prenom"=>"Chloe","Email"=>"auctorMauris@loremegetorg","Taille"=>"173","Poids"=>"72"),
	array("Nom"=>"Richardson","Prenom"=>"Ryan","Email"=>"scelerisque@ullamcorpermagnacouk","Taille"=>"173","Poids"=>"64"),
	array("Nom"=>"Cleveland","Prenom"=>"Yeo","Email"=>"acsem@vehiculaca","Taille"=>"163","Poids"=>"69"),
	array("Nom"=>"Gay","Prenom"=>"Amanda","Email"=>"fames@idsapienedu","Taille"=>"165","Poids"=>"63"),
	array("Nom"=>"Peters","Prenom"=>"Bruno","Email"=>"ornaretortor@condimentumDonecatcom","Taille"=>"163","Poids"=>"66"),
	array("Nom"=>"Lambert","Prenom"=>"Dean","Email"=>"sapien@sitametrisuscouk","Taille"=>"180","Poids"=>"71"),
	array("Nom"=>"Petty","Prenom"=>"Nigel","Email"=>"pedeSuspendisse@risusDuiscouk","Taille"=>"168","Poids"=>"66"),
	array("Nom"=>"Phelps","Prenom"=>"Cullen","Email"=>"euaugue@Vestibulumanteca","Taille"=>"159","Poids"=>"76"),
	array("Nom"=>"Cochran","Prenom"=>"Marny","Email"=>"Lorem@enimconsequatpuruscouk","Taille"=>"157","Poids"=>"67"),
	array("Nom"=>"Bauer","Prenom"=>"Sloane","Email"=>"nisi@liberonet","Taille"=>"174","Poids"=>"72"),
	array("Nom"=>"Strong","Prenom"=>"Leigh","Email"=>"ut@Aliquamcouk","Taille"=>"176","Poids"=>"65"),
	array("Nom"=>"Olsen","Prenom"=>"Herrod","Email"=>"uteratSed@rutrumloremedu","Taille"=>"167","Poids"=>"72"),
	array("Nom"=>"Spears","Prenom"=>"Bruno","Email"=>"congueturpis@nullaorg","Taille"=>"162","Poids"=>"77"),
	array("Nom"=>"Pearson","Prenom"=>"Marah","Email"=>"Donecatarcu@aedu","Taille"=>"174","Poids"=>"62"),
	array("Nom"=>"Moore","Prenom"=>"Orson","Email"=>"semegetmassa@puruscouk","Taille"=>"189","Poids"=>"76"),
	array("Nom"=>"Roman","Prenom"=>"Kylie","Email"=>"habitant@duiaugueca","Taille"=>"177","Poids"=>"66"),
	array("Nom"=>"Michael","Prenom"=>"Ciaran","Email"=>"nostraper@nibhPhaselluscom","Taille"=>"156","Poids"=>"65"),
	array("Nom"=>"Sheppard","Prenom"=>"Colton","Email"=>"enim@inaliquetedu","Taille"=>"159","Poids"=>"70"),
	array("Nom"=>"Mathews","Prenom"=>"Pamela","Email"=>"auctor@Praesenteuedu","Taille"=>"168","Poids"=>"74"),
	array("Nom"=>"Thompson","Prenom"=>"Olga","Email"=>"vel@egestascom","Taille"=>"173","Poids"=>"75"),
	array("Nom"=>"Petersen","Prenom"=>"Jared","Email"=>"urna@Crasvulputatevelitca","Taille"=>"173","Poids"=>"75"),
	array("Nom"=>"Leblanc","Prenom"=>"Aurora","Email"=>"dictum@egetcom","Taille"=>"164","Poids"=>"72"),
	array("Nom"=>"Blanchard","Prenom"=>"Keiko","Email"=>"Suspendisse@torquentperconubiacouk","Taille"=>"167","Poids"=>"72"),
	array("Nom"=>"Sharp","Prenom"=>"Barrett","Email"=>"Proineget@laoreetposuereedu","Taille"=>"163","Poids"=>"72"),
	array("Nom"=>"Hughes","Prenom"=>"Orson","Email"=>"utdolor@risusDonecegestasnet","Taille"=>"159","Poids"=>"62"),
	array("Nom"=>"Porter","Prenom"=>"Ava","Email"=>"Fuscedolor@Nuncnet","Taille"=>"178","Poids"=>"70"),
	array("Nom"=>"Figueroa","Prenom"=>"Lesley","Email"=>"Quisquenonummy@eulacusorg","Taille"=>"168","Poids"=>"68"),
	array("Nom"=>"Wyatt","Prenom"=>"Zelenia","Email"=>"sitametultricies@accumsansedfacilisiscom","Taille"=>"174","Poids"=>"61"),
	array("Nom"=>"Stark","Prenom"=>"Sarah","Email"=>"natoquepenatibuset@neccursusacom","Taille"=>"167","Poids"=>"67"),
	array("Nom"=>"Carney","Prenom"=>"Ariana","Email"=>"enimsit@nuncinterdumfeugiatorg","Taille"=>"180","Poids"=>"78"),
	array("Nom"=>"Simmons","Prenom"=>"Herrod","Email"=>"ac@estnet","Taille"=>"172","Poids"=>"72"),
	array("Nom"=>"Mayo","Prenom"=>"Carissa","Email"=>"Nulla@quamquisca","Taille"=>"182","Poids"=>"60"),
	array("Nom"=>"Higgins","Prenom"=>"Serena","Email"=>"anteblanditviverra@aliquetPhasellusfermentumedu","Taille"=>"178","Poids"=>"71"),
	array("Nom"=>"Fletcher","Prenom"=>"Remedios","Email"=>"Phaselluselitpede@consequatcouk","Taille"=>"180","Poids"=>"73"),
	array("Nom"=>"Green","Prenom"=>"Dale","Email"=>"libero@temporeratorg","Taille"=>"171","Poids"=>"68"),
	array("Nom"=>"White","Prenom"=>"Jack","Email"=>"velconvallis@anteedu","Taille"=>"172","Poids"=>"73"),
	array("Nom"=>"Russo","Prenom"=>"Giselle","Email"=>"nonnisi@luctusvulputateorg","Taille"=>"160","Poids"=>"69"),
	array("Nom"=>"James","Prenom"=>"Kimberley","Email"=>"malesuadafamesac@nuncsitametcom","Taille"=>"191","Poids"=>"72"),
	array("Nom"=>"Huffman","Prenom"=>"Thomas","Email"=>"Nuncmauriselit@Pellentesqueca","Taille"=>"168","Poids"=>"68"),
	array("Nom"=>"Turner","Prenom"=>"Cody","Email"=>"lorem@elitcouk","Taille"=>"172","Poids"=>"73"),
	array("Nom"=>"Neal","Prenom"=>"Cheryl","Email"=>"nequevitaesemper@rhoncusidcom","Taille"=>"170","Poids"=>"68"),
	array("Nom"=>"Patel","Prenom"=>"Hamilton","Email"=>"ametultriciessem@nonantebibendumedu","Taille"=>"172","Poids"=>"79"),
	array("Nom"=>"Alexander","Prenom"=>"Grant","Email"=>"nonnisiAenean@massacom","Taille"=>"174","Poids"=>"68"),
	array("Nom"=>"Shepherd","Prenom"=>"Tad","Email"=>"ac@inorg","Taille"=>"165","Poids"=>"76"),
	array("Nom"=>"Wynn","Prenom"=>"Danielle","Email"=>"lectusquismassa@InfaucibusMorbiorg","Taille"=>"169","Poids"=>"66"),
	array("Nom"=>"Pollard","Prenom"=>"Ahmed","Email"=>"velarcu@Nullaegetorg","Taille"=>"164","Poids"=>"62"),
	array("Nom"=>"Peters","Prenom"=>"Hollee","Email"=>"loremipsum@sitametca","Taille"=>"177","Poids"=>"75"),
	array("Nom"=>"Alston","Prenom"=>"Brendan","Email"=>"antebibendumullamcorper@idblanditcouk","Taille"=>"156","Poids"=>"68"),
	array("Nom"=>"Keith","Prenom"=>"Vernon","Email"=>"diam@sagittisnet","Taille"=>"168","Poids"=>"70"),
	array("Nom"=>"Rodgers","Prenom"=>"Angela","Email"=>"pharetra@vellectusCumcom","Taille"=>"171","Poids"=>"65"),
	array("Nom"=>"Parker","Prenom"=>"Tatiana","Email"=>"penatibusetmagnis@scelerisquesedca","Taille"=>"173","Poids"=>"68"),
	array("Nom"=>"Miller","Prenom"=>"Timothy","Email"=>"tinciduntcongue@atca","Taille"=>"178","Poids"=>"66"),
	array("Nom"=>"Wilder","Prenom"=>"Rosalyn","Email"=>"mauris@aliquameuorg","Taille"=>"165","Poids"=>"67"),
	array("Nom"=>"Baker","Prenom"=>"Sheila","Email"=>"sitametrisus@euplacerategetcouk","Taille"=>"178","Poids"=>"69"),
	array("Nom"=>"Lee","Prenom"=>"Roary","Email"=>"nequenon@acouk","Taille"=>"159","Poids"=>"61"),
	array("Nom"=>"Gillespie","Prenom"=>"Quemby","Email"=>"nonenimcommodo@lobortiscom","Taille"=>"167","Poids"=>"61"),
	array("Nom"=>"Dixon","Prenom"=>"Zenaida","Email"=>"risus@etmagnisdisca","Taille"=>"170","Poids"=>"72"),
	array("Nom"=>"Holden","Prenom"=>"Chloe","Email"=>"in@elementumorg","Taille"=>"169","Poids"=>"76"),
	array("Nom"=>"Rios","Prenom"=>"Stone","Email"=>"consequatenim@enimMaurisca","Taille"=>"169","Poids"=>"77"),
	array("Nom"=>"Berg","Prenom"=>"Sara","Email"=>"faucibusleo@Maurisblanditenimorg","Taille"=>"162","Poids"=>"63"),
	array("Nom"=>"Clay","Prenom"=>"Timon","Email"=>"etultrices@necorg","Taille"=>"168","Poids"=>"72"),
	array("Nom"=>"Schneider","Prenom"=>"Knox","Email"=>"dolor@liberoca","Taille"=>"165","Poids"=>"65"),
	array("Nom"=>"Cervantes","Prenom"=>"Pandora","Email"=>"metusVivamuseuismod@ligulaca","Taille"=>"179","Poids"=>"73"),
	array("Nom"=>"Allen","Prenom"=>"Micah","Email"=>"dolorsitamet@nonhendreritorg","Taille"=>"176","Poids"=>"75"),
	array("Nom"=>"Kirkland","Prenom"=>"Jolie","Email"=>"Fuscemollis@Nuncullamcorperorg","Taille"=>"154","Poids"=>"66"),
	array("Nom"=>"Woodard","Prenom"=>"Quincy","Email"=>"idliberoDonec@Phasellusnullaca","Taille"=>"166","Poids"=>"69"),
	array("Nom"=>"Peck","Prenom"=>"Octavius","Email"=>"lobortis@semperegestasurnaca","Taille"=>"167","Poids"=>"68"),
	array("Nom"=>"Andrews","Prenom"=>"Wade","Email"=>"sedpede@mifelisorg","Taille"=>"158","Poids"=>"64"),
	array("Nom"=>"Kennedy","Prenom"=>"Lydia","Email"=>"Vestibulumaccumsanneque@ipsumnuncidnet","Taille"=>"178","Poids"=>"67"),
	array("Nom"=>"Velez","Prenom"=>"Erin","Email"=>"sagittisDuisgravida@nonduineccouk","Taille"=>"167","Poids"=>"66"),
	array("Nom"=>"Hendrix","Prenom"=>"Sopoline","Email"=>"asollicitudin@etcouk","Taille"=>"173","Poids"=>"74"),
	array("Nom"=>"Boyd","Prenom"=>"Neville","Email"=>"nuncidenim@vehiculaPellentesquetinciduntcom","Taille"=>"173","Poids"=>"75"),
	array("Nom"=>"Rice","Prenom"=>"Lois","Email"=>"nonmassanon@Aeneanca","Taille"=>"166","Poids"=>"58"),
	array("Nom"=>"Lloyd","Prenom"=>"Aline","Email"=>"dapibusgravida@utmolestieinedu","Taille"=>"145","Poids"=>"80")
);
  foreach($data as $array) {
      $imc=$array["Poids"]/(($array["Taille"]/100)*($array["Taille"]/100));
    if($imc >= 25){
     echo"<tr id='red'>";
    }
    else{
        echo "<tr>";
    }
    foreach($array as $value) {
      echo"<td>".$value."</td>";
      $imc = round($imc,2);
    }
     echo"<td>".$imc."</td>";
    echo "</tr>";
    }
?>
    </tbody>
  </table>
</body>