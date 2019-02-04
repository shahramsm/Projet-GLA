<?php
function Reservation($idR){
	include('../Constante/ConnexionBDD.php');
	$idM = $_SESSION['identifiant'];
	$req = "SELECT ID_RESERV FROM reservation WHERE ID_MEMBRE='".$idM."' AND DATE_RETOUR IS NULL";
	$resultatEM = $mysqli->query($req);
	$nbrEmprunts = $resultatEM->num_rows;
	if($nbrEmprunts < 5){
		$req = "SELECT NBR_EXEMP FROM ressource WHERE ID_RESSOURCE=".$idR;
		$resultatEX = $mysqli->query($req);
		$nbrExemp = mysqli_fetch_array($resultatEX);
		if($nbrExemp['NBR_EXEMP'] > 0){
			$req = "INSERT INTO reservation VALUES (DEFAULT,'".$idM."',".$idR.",'".date('Y-m-d')."',NULL)";
			$mysqli->query($req);

			$req2 = "SELECT CAUTION FROM ressource WHERE ID_RESSOURCE = ".$idR;
			$result2 = $mysqli->query($req2);
			$ligne = mysqli_fetch_array($result2);

			return 1;
		}
		else{
			return 2;
		}
	}
	else{
		return 3;
	}
}

function caution($idR){
	include('../Constante/ConnexionBDD.php');
	$req = "SELECT CAUTION FROM ressource WHERE ID_RESSOURCE = ".$idR;
	$result = $mysqli->query($req);
	$ligne = mysqli_fetch_array($result);
	return $ligne['CAUTION'];
}

function RetirerSolde($caution,$idMembre)
{
	include('../Constante/ConnexionBDD.php');

	$req1 = "Select SOLDE from utilisateur where IDENTIFIANT ='".$idMembre."'";
	$result = $mysqli->query($req1);
	$ligne = mysqli_fetch_array($result);
	//echo $req1;
	$nouveauSolde =  $ligne['SOLDE'] - $caution;
	$req2 ="UPDATE utilisateur SET SOLDE=".$nouveauSolde." WHERE IDENTIFIANT ='".$idMembre."'";
	$mysqli->query($req2);
}
?>
