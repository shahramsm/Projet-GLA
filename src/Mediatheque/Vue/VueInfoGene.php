<h2 align="center">Actualités</h2><br />

<?php
$i = 0;
while($resultat = mysqli_fetch_array($listInfoGene) and $i<10 ){
	$datePubli = new DateTime($resultat['DATE_PUBLI']);
	echo "<table border=0 width=100%>";
	echo "<tr>";
		echo "<td align='center'>".$resultat['TITRE']."</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>".$resultat['TEXTE']."</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td align='right'>Rédigé par ".$resultat['ID_GEST']." le ".$datePubli->format('d/m/Y')."</td>";
	echo "</tr";
	echo "</table>";
	echo "<hr>";
	$i++;
  	}
?>
