<h1>Espace personnel</h1><br />

<table border="0" width=25%>
	<?php
	$resultat = mysqli_fetch_array($InfoM);

  		echo "<tr>";
			echo "<td height='35'><b>Nom du membre : </b></td>";
			echo "<td height='35'>".$resultat['NOM']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td height='35'><b>Prénom du membre : </b></td>";
	  		echo "<td height='35'>".$resultat['PRENOM']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td height='35'><b>Mail du membre : </b></td>";
	  		echo "<td height='35'>".$resultat['MAIL']."</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td height='35'><b>Solde : </b></td>";
	  		echo "<td height='35'>".$resultat['SOLDE']." €</td>";
  		echo "</tr>";
  ?>
</table>