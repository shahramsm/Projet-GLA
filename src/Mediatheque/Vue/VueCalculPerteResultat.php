<?php echo "<h2>Pour la période du ".$dateDeb->format('d/m/Y')." au ".$dateFin->format('d/m/Y')." </h2>"; ?>

<h3>Liste des pertes par ressource </h3>

<table border="1">
	<tr>
		<td><b>Nom de la ressource</b></td>
    <td><b>Nom de l'auteur</b></td>
    <td><b>Type de la ressource</b></td>
		<td><b>Nombre de pertes</b></td>
	</tr>
	<?php
    $totalPerteRess = 0;
    while($resultat = mysqli_fetch_array($listePerteParRessource)){

      $totalPerteRess = $totalPerteRess + $resultat['NBRPERTE'];
  		echo "<tr>";
				echo "<td>".$resultat['NOM']."</td>";
	  		echo "<td>".$resultat['AUTEUR']."</td>";
	  		echo "<td>".$resultat['TYPE_RESS']."</td>";
	  		echo "<td>".$resultat['NBRPERTE']."</td>";
  		echo "</tr>";
  	}
    echo "<tr>";
      echo "<td></td>";
      echo "<td></td>";
      echo "<td><b>Total : </b></td>";
      echo "<td><b>".$totalPerteRess."</b></td>";
    echo "</tr>";
  ?>
</table>

<h3>Liste des pertes par type de perte </h3>

<table border="1">
	<tr>
		<td><b>Type de perte</b></td>
    <td><b>Nombre de pertes</b></td>
	</tr>
	<?php
    $totalPerteType = 0;
    while($resultat2 = mysqli_fetch_array($listePerteParTypePerte)){

      $totalPerteType = $totalPerteType + $resultat2['NBRPERTE'];
  		echo "<tr>";
				echo "<td>".$resultat2['TYPE_PERTE']."</td>";
	  		echo "<td>".$resultat2['NBRPERTE']."</td>";
  		echo "</tr>";
  	}
    echo "<tr>";
      echo "<td><b>Total : </b></td>";
      echo "<td><b>".$totalPerteType."</b></td>";
    echo "</tr>";
  ?>
</table>

</br></br>


<a href="javascript:history.go(-1)">Retour</a>
