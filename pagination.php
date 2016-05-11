<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title></title>
		<link href="/bootstrap/css/bootstrap.css" rel="stylesheet" />
	</head>
	<body>
		<?php
include 'data.php.txt';
?>
		<div class="container">
<div class="page-header">
<h5>DonnÃ©es</h5>
</div>
			<table class="table table-striped table-condensed table-bordered">
				<thead>
					<tr>
						<th>Nom</th>
						<th>PrÃ©nom</th>
						<th>Mail</th>
						<th>Taille</th>
						<th>Poids</th>
						<th>Imc</th>
					</tr>
				</thead>
				<tbody>
<?php
$nb=count($data);

for ($i=0;$i<$nb;$i++){
	$personne=$data[$i];
	$m=$personne['Poids'];
	$t=$personne['Taille']/100;
	$imc=$m/($t*$t);
	$class="";
	if ($imc >= 25) $class="error";
	if ($imc <= 18) $class="warning";
	echo "<tr class=\"$class\">";
	echo "<td>".$personne['Nom']."</td>";
	echo "<td>".$personne['Prenom']."</td>";
	echo "<td>".$personne['Email']."</td>";
	echo "<td>".$personne['Taille']."</td>";
	echo "<td>".$personne['Poids']."</td>";
	echo "<td>".round($imc,2)."</td>";
	echo "</tr>";
}
?>
				</tbody>
			</table>
    <div class="pagination">
    </div>
		</div>
	</body>
</html>
