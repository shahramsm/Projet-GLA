<h3>Résultat de la recherche</h3><br />

<?php
if(mysqli_num_rows($listResultats) > 0)
{
	echo "<table border='0'>";
	while($resultat = mysqli_fetch_array($listResultats))
	{
		echo "<tr>";
			echo "<td height='35'><b>Nom : </b></td>";
			echo "<td height='35'>".$resultat['NOM']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td height='35'><b>Auteur : </b></td>";
			echo "<td height='35'>".$resultat['AUTEUR']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td height='35'><b>Type : </b></td>";
			echo "<td height='35'>".$resultat['TYPE_RESS']."</td>";
		echo "</tr>";
		if(isset($_SESSION['typeProfil']) and $_SESSION['typeProfil']=='m'){
			echo "<tr>";
				echo " <td><form action='../Controleur/Reservation.php' method='POST'><button value='".$resultat['ID_RESSOURCE']."' name='idR' type=submit>Réserver</button></form></td>";
		}
		echo "<tr>";
			echo "<td height='25' width=50%><hr></td>";
			echo "<td height='25' width=50%><hr></td>";
		echo "</tr>";
	}
	echo "</table>";
}
else
{
	echo "Aucun résultat correspondant à votre recherche n'a été trouvé.";
}
?>