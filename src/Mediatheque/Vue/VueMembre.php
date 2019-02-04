<h1>Liste des membres</h1>

<table border="1">
	<tr>
		<td><b>Nom du membre</b></td>
		<td><b>Prénom du membre</b></td>
		<td><b>Mail du membre</b></td>
		<td><b>Solde</b></td>
		<td><b>Defaillant</b></td>
	</tr>
	<?php
    while($resultat = mysqli_fetch_array($listMembre)){
      if($resultat['DEFAILLANT']==0){
        $etatDefaillant = "Valide";
      }
      else {
        $etatDefaillant = "Non valide";
      }

  		echo "<tr>";
				echo "<td>".$resultat['NOM']."</td>";
	  		echo "<td>".$resultat['PRENOM']."</td>";
	  		echo "<td>".$resultat['MAIL']."</td>";
	  		echo "<td>".$resultat['SOLDE']." €</td>";
	  		echo "<td>".$etatDefaillant."</td>";
	      echo "<td><a href='../Controleur/Retour.php?idMembre=".$resultat['IDENTIFIANT']."'>Retour</a></td>";
	      if($etatDefaillant == "Valide"){
	        echo "<td><a href='../Controleur/RendreDefaillant.php?id=".$resultat['IDENTIFIANT']."'>Défaillant</a></td>";
	      } else {
	        echo "<td><a href='../Controleur/RendreNonDefaillant.php?id=".$resultat['IDENTIFIANT']."'>Valide</a></td>";
	      }
				echo '<form method="POST" action="AjoutSolde.php?idMembre='.$resultat["IDENTIFIANT"].'">';
					echo '<td><input type="number" name="solde" ></td>';
					echo '<td><input type="submit" value="Ajouter du solde"></td>';
				echo '</form>';
  		echo "</tr>";
  	}
  ?>
</table>
