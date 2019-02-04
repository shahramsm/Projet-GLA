<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="../Vue/css/bootstrap.min.css" rel="stylesheet">
    <title>Membre</title>
  </head>
  <body>
    <?php include('../Vue/BarreNavigation.php');

          include('../Modele/FonctionMembre.php');

          $listMembre = GetListMembre();

          include('../Vue/VueMembre.php');

          include('../Vue/VueInscriptionMembre.php');
    ?>


  </body>
</html>
