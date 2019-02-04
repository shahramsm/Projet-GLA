<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="../Vue/css/bootstrap.min.css" rel="stylesheet">
    <title>Accueil</title>
  </head>
  <body>
    <?php include('../Vue/BarreNavigation.php');?>
	<?php include('../Modele/FonctionRecherche.php');?>
	
	<?php 
	$nom = $_GET['nom'];
    $auteur = $_GET['auteur'];
    $type = $_GET['type'];
    $listResultats = recherche($nom,$auteur,$type);
	?>
	
	<?php include('../Vue/VueResultatRecherche.php');?>
  </body>
</html>