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
	
	include('../Modele/FonctionEspacePerso.php');
	
	$InfoM = GetMembre($_SESSION['identifiant']);
	
	include('../Vue/VueEspacePerso.php');
	?>

  </body>
</html>
