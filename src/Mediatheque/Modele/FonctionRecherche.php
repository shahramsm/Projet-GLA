<?php
function recherche($nom, $auteur, $type)
{
	include('../Constante/ConnexionBDD.php');

	//Permet d'éviter les attaques par injection SQL
	$nom = $mysqli->real_escape_string($nom);
	$auteur = $mysqli->real_escape_string($auteur);
	$type = $mysqli->real_escape_string($type);

	$req = "SELECT * FROM ressource WHERE DEREFERENCE=0";
	
	if (!empty($nom)) {
		$string = " AND NOM LIKE '%".$nom."%'";
		$req = $req . $string;
	}	
	if (!empty($auteur)) {
		$string = " AND AUTEUR LIKE '%".$auteur."%'";
		$req = $req . $string;
	}	
	if (!empty($type)) {
		$string = " AND TYPE_RESS='".$type."'";
		$req = $req . $string;
	}
	
	$resultats = $mysqli->query($req);

	return $resultats;
}
?>