<?php session_start();
  include('../Modele/FonctionRessource.php');
  if((isset($_SESSION['typeProfil']))){ //déja connecté
    if($_SESSION['typeProfil']=='g'){
      NouvelleRessource($_POST['NOM'],$_POST['AUTEUR'],$_POST['ANNEEPUBLI'],
                        $_POST['TYPE'],$_POST['NBREXEMP'],
                        $_POST['CAUTION'],$_POST['DELAI'],
                        $_POST['NIVEAU'],$_POST['ETAGERE']);
      echo "<script>alert('La ressource a bien été créer.'); history.back();</script>";

    }
  }
?>
