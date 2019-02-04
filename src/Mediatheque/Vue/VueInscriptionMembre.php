<h1>Nouveau membre</h1>

<form method="POST" action="InscriptionMembre.php">
	<table class='centre'>

		<tr>
			<td>Identifiant </td>
			<td><input type="text" name="ID" required/></td>
		</tr>

		<tr>
			<td>Nom </td>
			<td><input type="text" name="NOM" required/></td>
		</tr>

		<tr>
			<td>Prénom </td>
			<td><input type="text" name="PRENOM" required/></td>
		</tr>

		<tr>
			<td>Mail </td>
			<td><input type="mail" name="MAIL" required/></td>
		</tr>

    <tr>
			<td>Mot de passe </td>
			<td><input type="password" name="MDP" required/></td>
		</tr>

    <tr>
			<td>Mot de passe confirmation </td>
			<td><input type="password" name="MDPCONF" required/></td>
		</tr>

    <tr>
			<td>Solde </td>
			<td><input type="number" name="SOLDE" required/></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" value="Inscription"/></td>
		</tr>
	</table>

</form>
