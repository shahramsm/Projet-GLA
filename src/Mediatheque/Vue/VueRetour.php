<h1>Liste des réservations du membre sans retour </h1>

<table border="1">
	<tr>
		<td><b>Nom de la ressource</b></td>
    <td><b>Nom du producteur</b></td>
		<td><b>Type de ressource</b></td>
		<td><b>Date de réservation</b></td>
	</tr>
	<?php
    while($resultat = mysqli_fetch_array($listReservSansRetour)){

      $dateReserv = new DateTime($resultat['DATE_RESERV']);
      //$dateRetourMax = $dateReserv;
      //$dateRetourMax->modify('+'.$resultat['NBR_JOUR_RETOUR']' day');


  		echo "<tr>";
			echo "<td>".$resultat['NOM']."</td>";
  		echo "<td>".$resultat['AUTEUR']."</td>";
  		echo "<td>".$resultat['TYPE_RESS']."</td>";
  		echo "<td>".$dateReserv->format('d/m/Y')."</td>";
      echo "<td><a href='../Controleur/RetourRess.php?idReserv=".$resultat['ID_RESERV']."'>Retour</a></td>";
			echo '<form method="POST" action="Perte.php?idReserv='.$resultat["ID_RESERV"].'">';
			echo '<td><SELECT name="typePerte"  size="1">
								<option value="NAT">Perte Naturelle</option>
								<option value="DEG">Dégradation Apparente</option>
						</SELECT></td>';
			echo '<td><input type="submit" value="Déclarer une perte"></td>';
			echo '</form>';
  		echo "</tr>";
  	}
  ?>
</table>
</br></br></br>
<h1>Liste des réservations du membre avec un retour </h1>

<table border="1">
	<tr>
		<td><b>Nom de la ressource</b></td>
    <td><b>Nom du producteur</b></td>
		<td><b>Type de ressource</b></td>
		<td><b>Date de réservation</b></td>
		<td><b>Date de retour</b></td>
	</tr>
	<?php
    while($resultat = mysqli_fetch_array($listReservAvecRetour)){

      $dateReserv = new DateTime($resultat['DATE_RESERV']);
      $dateRetour = new DateTime($resultat['DATE_RETOUR']);


  		echo "<tr>";
			echo "<td>".$resultat['NOM']."</td>";
  		echo "<td>".$resultat['AUTEUR']."</td>";
  		echo "<td>".$resultat['TYPE_RESS']."</td>";
  		echo "<td>".$dateReserv->format('d/m/Y')."</td>";
			echo "<td>".$dateRetour->format('d/m/Y')."</td>";
  		echo "</tr>";
  	}
  ?>
</table>
