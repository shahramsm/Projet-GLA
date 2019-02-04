<h1>Nouvelle ressource</h1>

<form method="POST" action="NouvelleRessource.php">
	<table class='centre'>

		<tr>
			<td>Nom </td>
			<td><input type="text" name="NOM" required/></td>
		</tr>

		<tr>
			<td>Auteur </td>
			<td><input type="text" name="AUTEUR" required/></td>
		</tr>

		<tr>
			<td>Année de publication</td>
      <td><input type="number" value ="1980" name="ANNEEPUBLI" required/></td>
		</tr>

    <tr>
			<td>Type de ressource</td>
			<td><select name="TYPE">
	      <option value="L" selected>Livre</option>
	      <option value="D" >DVD</option>
	      <option value="R">Revue</option>
    	</select></td>
		</tr>


    <tr>
			<td>Nombre d'exemplaire </td>
      <td><input type="number" name="NBREXEMP" required/></td>
		</tr>

    <tr>
			<td>Caution </td>
      <td><input type="number" name="CAUTION" required/></td>
		</tr>

    <tr>
			<td>Délai en jours </td>
			<td><input type="number" name="DELAI" required/></td>
		</tr>

    <tr>
      <td>Niveau </td>
      <td><input type="number" name="NIVEAU" required/></td>
    </tr>

    <tr>
      <td>Etagère </td>
      <td><input type="number" name="ETAGERE" required/></td>
    </tr>

		<tr>
			<td></td>
			<td><input type="submit" value="Nouvelle ressource"/></td>
		</tr>
	</table>

</form>
