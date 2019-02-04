<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="../Vue/css/bootstrap.min.css" rel="stylesheet">
    <title>Accueil</title>
  </head>
  <body>
    <?php
	include('../Vue/BarreNavigation.php');

	include('../Modele/FonctionReservation.php');
	$idR = $_POST["idR"];
	$Confirmation = Reservation($idR);
  $caution = Caution($idR);
  RetirerSolde($caution,$_SESSION['identifiant']);

	include('../Vue/VueReservation.php');
	?>

  </body>
</html>
