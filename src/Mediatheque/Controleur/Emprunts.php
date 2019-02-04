<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="../Vue/css/bootstrap.min.css" rel="stylesheet">
    <title>Accueil</title>
  </head>
  <body>
    <?php include('../Vue/BarreNavigation.php');
	
	include('../Modele/FonctionMembre.php');
	
	$listReservSansRetour = GetListReservationSansRetour($_SESSION['identifiant']);
    $listReservAvecRetour = GetListReservationAvecRetour($_SESSION['identifiant']);
	
	include('../Vue/VueEmprunts.php');?>
  </body>
</html>
