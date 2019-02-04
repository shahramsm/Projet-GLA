<h3>Vos emprunts</h3><br />
<table border=1 width=50%>
	<tr>
		<td><b>Nom</b></td>
		<td><b>Auteur</b></td>
		<td><b>Type</b></td>
		<td><b>Année de publication</b></td>
		<td><b>Retour</b></td>
	</tr>
<?php
while($resultat = mysqli_fetch_array($listReservSansRetour)){
	echo "<tr>";
		echo "<td>".$resultat['NOM']."</td>";
		echo "<td>".$resultat['AUTEUR']."</td>";
		echo "<td>".$resultat['TYPE_RESS']."</td>";
		echo "<td>".$resultat['ANNEE_PUBLI']."</td>";
		echo "<td>Non</td>";
	echo "</tr>";
}
	
while($resultat = mysqli_fetch_array($listReservAvecRetour)){
	$dateRetour = new DateTime($resultat['DATE_RETOUR']);
	echo "<tr>";
		echo "<td>".$resultat['NOM']."</td>";
		echo "<td>".$resultat['AUTEUR']."</td>";
		echo "<td>".$resultat['TYPE_RESS']."</td>";
		echo "<td>".$resultat['ANNEE_PUBLI']."</td>";
		echo "<td>".$dateRetour->format('d/m/Y')."</td>";
	echo "</tr>";
}
?>
</table>