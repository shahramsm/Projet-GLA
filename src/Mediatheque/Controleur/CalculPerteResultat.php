<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="../Vue/css/bootstrap.min.css" rel="stylesheet">
    <title>Calcul des pertes Résultat</title>
  </head>
  <body>
    <?php include('../Vue/BarreNavigation.php');

          include('../Modele/FonctionRessource.php');

          $dateDeb = new DateTime($_POST['DATEDEB']);
          $dateFin = new DateTime($_POST['DATEFIN']);

          $listePerteParRessource = CalculPerteParRessource($_POST['DATEDEB'],$_POST['DATEFIN']);
          $listePerteParTypePerte = CalculPerteParType($_POST['DATEDEB'],$_POST['DATEFIN']);

          include('../Vue/VueCalculPerteResultat.php');

    ?>


  </body>
</html>
