<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="../Vue/css/bootstrap.min.css" rel="stylesheet">
    <title>Information générale</title>
  </head>
  <body>
    <?php include('../Vue/BarreNavigation.php');

          include('../Modele/FonctionInfoGene.php');

          $listInfoGene = GetListInfoGene();

          include('../Vue/VueInfoGeneGest.php');

          include('../Vue/VueNouvelleInfo.php');
    ?>


  </body>
</html>
