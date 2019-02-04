<h1>Liste des ressources</h1>

<table border="1">
	<tr>
		<td><b>Nom de la ressource</b></td>
    <td><b>Nom de l'auteur</b></td>
    <td><b>Type de la ressource</b></td>
		<td><b>Nombre d'exemplaire totale</b></td>
		<td><b>Caution</b></td>
		<td><b>Délai de jours</b></td>
    <td><b>Nombre d'exemplaire disponible</b></td>
    <td><b>Référencement</b></td>
	</tr>
	<?php
    while($resultat = mysqli_fetch_array($listRessource)){
      if($resultat['DEREFERENCE']==0){
        $etatReference = "Référencé";
      }
      else {
        $etatReference = "Non référencé";
      }

      $nbrExempDispo = $resultat['NBR_EXEMP'] - GetNbrReserv($resultat['ID_RESSOURCE']);

  		echo "<tr>";
				echo "<td>".$resultat['NOM']."</td>";
	  		echo "<td>".$resultat['AUTEUR']."</td>";
	  		echo "<td>".$resultat['TYPE_RESS']."</td>";
	  		echo "<td>".$resultat['NBR_EXEMP']."</td>";
        echo "<td>".$resultat['CAUTION']." €</td>";
        echo "<td>".$resultat['NBR_JOUR_RETOUR']." jours</td>";
        echo "<td>".$nbrExempDispo."</td>";
	  		echo "<td>".$etatReference."</td>";
        if($etatReference == "Référencé"){
	        echo "<td><a href='../Controleur/Dereference.php?idRessource=".$resultat['ID_RESSOURCE']."'>Déréférencer</a></td>";
	      } else {
	        echo "<td><a href='../Controleur/Reference.php?idRessource=".$resultat['ID_RESSOURCE']."'>Référencer</a></td>";
	      }
	      //echo "<td><a href='../Controleur/Retour.php?idMembre=".$resultat['IDENTIFIANT']."'>Retour</a></td>";
				echo '<form method="POST" action="AchatRessource.php?idRessource='.$resultat['ID_RESSOURCE'].'">';
					echo '<td><input type="number" name="achat" ></td>';
					echo '<td><input type="submit" value="Achat de ressources"></td>';
				echo '</form>';
  		echo "</tr>";
  	}
  ?>
</table>
