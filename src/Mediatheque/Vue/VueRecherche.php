<h3>Recherche</h3><br />

<form action="../Controleur/ResultatRecherche.php" method="GET">
	<label for="nom">Nom de l'oeuvre</label>
	<input type="text" id="nom" name="nom" placeholder="Nom.."><br />

	<label for="auteur">Auteur</label>
	<input type="text" id="auteur" name="auteur" placeholder="Auteur.."><br />

	<label for="type">Type</label>
	<select id="type" name="type">
	  <option></option>
	  <option value="livre">Livre</option>
	  <option value="revue">Revue</option>
	  <option value="dvd">DVD</option>
	</select><br />
		
	<button type="submit">Rechercher</button>
</form>