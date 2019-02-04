<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="../Vue/css/bootstrap.min.css" rel="stylesheet">
    <title>Ressource</title>
  </head>
  <body>
    <?php include('../Vue/BarreNavigation.php');

          include('../Modele/FonctionRessource.php');

          $listRessource = GetListRessource();

          include('../Vue/VueRessource.php');

          include('../Vue/VueNouvelleRessource.php');
    ?>


  </body>
</html>
