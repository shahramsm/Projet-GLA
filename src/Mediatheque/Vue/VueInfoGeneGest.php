<h1>Liste des information générales</h1>

<table border="1">
	<tr>
		<td><b>Identifiant</b></td>
		<td><b>Titre</b></td>
		<td><b>Date de publication</b></td>
		<td><b>Identifiant du gestionnaire</b></td>
	</tr>
	<?php
    while($resultat = mysqli_fetch_array($listInfoGene)){
      $datePubli = new DateTime($resultat['DATE_PUBLI']);
  		echo "<tr>";
				echo "<td>".$resultat['ID_INFOGENE']."</td>";
	  		echo "<td>".$resultat['TITRE']."</td>";
	  		echo "<td>".$datePubli->format('d/m/Y')."</td>";
	  		echo "<td>".$resultat['ID_GEST']."</td>";
	      echo "<td><a href='../Controleur/SuprInfoGene.php?idInfoGene=".$resultat['ID_INFOGENE']."'>Suppression</a></td>";
  		echo "</tr>";
  	}
  ?>
</table>
