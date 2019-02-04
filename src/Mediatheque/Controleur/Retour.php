<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="../Vue/css/bootstrap.min.css" rel="stylesheet">
    <title>Retour</title>
  </head>
  <body>
    <?php include('../Vue/BarreNavigation.php');

          include('../Modele/FonctionMembre.php');

          $listReservSansRetour = GetListReservationSansRetour($_GET['idMembre']);
          $listReservAvecRetour = GetListReservationAvecRetour($_GET['idMembre']);

          include('../Vue/VueRetour.php');
    ?>


  </body>
</html>
